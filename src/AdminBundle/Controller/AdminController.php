<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Cliente;
use App\Entity\Administrador;
use App\Entity\Parameters;
use App\Entity\Producto;
use App\Entity\Categoria;
use App\Entity\Proveedor;
use App\Entity\Orders;
use App\Entity\Contenido;
use App\Entity\HistoricalContenido;

/**
 * Description of LoginController
 *
 * @author sergio.amaya
 */
class AdminController extends Controller {

    public function index() {
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        if (!$session->has('nombreAdmin')) {
            return $this->redirectToRoute('general_home');
        }


        $categorias = $this->getDoctrine()->getRepository(Categoria::class)->findBy(['estado' => 1]);
        $proveedores = $this->getDoctrine()->getRepository(Proveedor::class)->findBy(['estado' => 1]);
        $productos = $this->getDoctrine()->getRepository(Producto::class)->findBy(['estado' => 1]);
        //$productos = $this->getDoctrine()->getRepository(Producto::class)->findAll();
        $administradores = $this->getDoctrine()->getRepository(Administrador::class)->findAll();
        $Orders = $this->getDoctrine()->getRepository(Orders::class)->findBy([],array('id' => 'DESC'));        
        $ventas = [];
        $count = 0;
        foreach($Orders as $Order){                        
            $request = json_decode($this->get('encrypt_decrypt')->encrypt_decrypt('decrypt', $Order->getPayrequest()), true);
            $description = json_decode($this->get('encrypt_decrypt')->encrypt_decrypt('decrypt', $Order->getDescription()), true);                        
            $ventas[$count]["id"] = $Order->getId();
            $ventas[$count]["referenceCode"] = $request['transaction']['order']['referenceCode'];            
            $ventas[$count]["status"] = $Order->getStatus();
            $ventas[$count]["fecha"] = $Order->getCreationDate();
            $ventas[$count]["cliente"] = $Order->getIdcliente()->getNombrecompleto().' '.$Order->getIdcliente()->getApellido();
            $ventas[$count]["phone"] = $Order->getIdcliente()->getTelefono();
            $ventas[$count]["email"] = $Order->getIdcliente()->getEmail();
            $ventas[$count]["amount"] = $request['transaction']['order']['additionalValues']['TX_VALUE']['currency'].' '.number_format($request['transaction']['order']['additionalValues']['TX_VALUE']['value'], 0, ',', '.');
            $ventas[$count]["productos"] = $description['productos'];
            $count = $count + 1;
        }        
        $contenidos = $this->getDoctrine()->getRepository(Contenido::class)->findAll();
                
        $colors = ["amarillo", "azul", "rojo", "plateado", "verde", "blanca", "hielo", "purpura", "bicolor", "tricolor"];
        
        return $this->render('@Twigs/Admin/admin.html.twig', [
            "categorias" => $categorias,
            "proveedores" => $proveedores,
            "productos" => $productos,
            "administradores" => $administradores,
            "contenidos" => $contenidos,
            "ventas" => $ventas,
            "colors" => $colors
        ]);
    }

    public function createAdmin() {
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        if (!$session->has('nombreAdmin')) {
            return $this->redirectToRoute('general_home');
        }
        $request = Request::createFromGlobals();
        $entityManager = $this->getDoctrine()->getManager();
        $inputs = ["admin-name", "admin-pass"];
        $mensajes = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'messages'])->getValue(), true)['mensajes'];
        $validate = true;
        $variables = [];

        foreach ($inputs as $input) {
            if (empty($request->request->get($input))) {
                $validate = false;
            } else {
                $variables[$input] = trim($request->request->get($input));
            }
        }

        $Admin = $this->getDoctrine()->getRepository(Administrador::class)->findOneBy(['nombre' => strtolower($variables['admin-name'])]);
        if (!empty($Admin)) {
            $validate = false;
        }

        if (!$validate || !$session->has('nombreAdmin')) {
            $result['error'] = $mensajes['update_register_error'];
        } else {
            $Administrador = new Administrador();
            $Administrador->setNombre(strtolower($variables['admin-name']));
            $Administrador->setClave(md5($variables['admin-pass']));
            $Administrador->setEstado(1);
            $Administrador->setCreado(new \DateTime());
            $Administrador->setActualizado(new \DateTime());

            $entityManager->persist($Administrador);
            $entityManager->flush();

            $result['message'] = $mensajes['update_register'];
            $result['redirect'] = $this->generateUrl('general_admin');
        }

        return new JsonResponse($result);
    }

    public function createCategory() {
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        if (!$session->has('nombreAdmin')) {
            return $this->redirectToRoute('general_home');
        }
        $request = Request::createFromGlobals();
        $inputs = ["categ-code", "categ-name", "categ-descrip"];
        $mensajes = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'messages'])->getValue(), true)['mensajes'];
        $validate = true;
        $update = false;
        $variables = [];

        foreach ($inputs as $input) {
            if (empty($request->request->get($input))) {
                $validate = false;
            } else {
                $variables[$input] = trim($request->request->get($input));
            }
        }

        if ($request->request->get('categ-update') !== '' && !empty($request->request->get('categ-update'))) {
            $update = true;
        }

        $Category = $this->getDoctrine()->getRepository(Categoria::class)->findOneBy(['codigocat' => strtolower($variables['categ-code'])]);
        if (!empty($Category) && $update == false) {
            $validate = false;
        }

        if (!$validate || !$session->has('nombreAdmin')) {
            $result['error'] = $mensajes['update_register_error'];
        } else {
            $entityManager = $this->getDoctrine()->getManager();            
            if ($update) {                                
                $Category->setCodigocat($variables['categ-code']);
                $Category->setNombre(strtolower($variables['categ-name']));
                $Category->setDescripcion($variables['categ-descrip']);
                $Category->setActualizado(new \DateTime());
                $entityManager->persist($Category);
                $result['message'] = $mensajes['update_register'];
            } else {
                $Categoria = new Categoria();
                $Categoria->setCodigocat($variables['categ-code']);
                $Categoria->setNombre(strtolower($variables['categ-name']));
                $Categoria->setDescripcion($variables['categ-descrip']);
                $Categoria->setEstado(1);
                $Categoria->setCreado(new \DateTime());
                $Categoria->setActualizado(new \DateTime());
                $entityManager->persist($Categoria);
                $result['message'] = $mensajes['update_register'];
            }
            $entityManager->flush();
            $result['redirect'] = $this->generateUrl('general_admin');
        }

        return new JsonResponse($result);
    }

    public function createProvider() {
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        if (!$session->has('nombreAdmin')) {
            return $this->redirectToRoute('general_home');
        }

        $request = Request::createFromGlobals();

        $entityManager = $this->getDoctrine()->getManager();
        $inputs = ["prove-nit", "prove-name", "prove-dir", "prove-tel", "prove-web"];
        $mensajes = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'messages'])->getValue(), true)['mensajes'];
        $validate = true;
        $update = false;

        foreach ($inputs as $input) {
            if (empty($request->request->get($input))) {
                $validate = false;
            } else {
                $variables[$input] = trim($request->request->get($input));
            }
        }

        if ($request->request->get('prove-update') !== '' && !empty($request->request->get('prove-update'))) {
            $update = true;
        }

        $Provider = $this->getDoctrine()->getRepository(Proveedor::class)->findOneBy(['nitproveedor' => strtolower($variables['prove-nit'])]);

        if (!empty($Provider) && $update == false) {
            $validate = false;
        }


        if (!$validate || !$session->has('nombreAdmin')) {
            $result['error'] = $mensajes['update_register_error'];
        } else {
            $entityManager = $this->getDoctrine()->getManager();
            if ($update) {
                $Provider->setNitproveedor($variables['prove-nit']);
                $Provider->setNombreproveedor($variables['prove-name']);
                $Provider->setDireccion($variables['prove-dir']);
                $Provider->setTelefono($variables['prove-tel']);
                $Provider->setPaginaweb($variables['prove-web']);
                $Provider->setActualizado(new \DateTime());
                $entityManager->persist($Provider);
            } else {
                $Proveedor = new Proveedor();
                $Proveedor->setNitproveedor($variables['prove-nit']);
                $Proveedor->setNombreproveedor($variables['prove-name']);
                $Proveedor->setDireccion($variables['prove-dir']);
                $Proveedor->setTelefono($variables['prove-tel']);
                $Proveedor->setPaginaweb($variables['prove-web']);
                $Proveedor->setEstado(1);
                $Proveedor->setCreado(new \DateTime());
                $Proveedor->setActualizado(new \DateTime());
                $entityManager->persist($Proveedor);
            }

            $entityManager->flush();
            $result['message'] = $mensajes['update_register'];
            $result['redirect'] = $this->generateUrl('general_admin');
        }

        return new JsonResponse($result);
    }

    public function createProduct() {
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        if (!$session->has('nombreAdmin')) {
            return $this->redirectToRoute('general_home');
        }

        $request = Request::createFromGlobals();

        $entityManager = $this->getDoctrine()->getManager();
        $inputs = ["prod-codigo", "prod-name", "prod-categoria", "prod-price", "prod-model", "prod-marca", "prod-stock", "prod-codigoP", "prod-descripcion", "prod-promo", "prod-color"];
        $mensajes = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'messages'])->getValue(), true)['mensajes'];
        $validate = true;
        $result = [];
        $images = null;

        if (!empty($request->request->get('prod-home'))) {
            array_push($inputs, "prod-home");
        }


        foreach ($inputs as $input) {
            if (empty($request->request->get($input))) {
                $validate = false;
                if($input == 'prod-promo'){
                    $validate = true;
                    $variables[$input] = trim($request->request->get($input));
                    if($request->request->get($input) > 100 && $request->request->get($input) < 0){
                        $validate = false;
                    }
                }
            } else {
                $variables[$input] = trim($request->request->get($input));
            }
        }
        
        if (!empty($request->files->get('img'))) {
            $folder = $this->get('kernel')->getRootDir() . '/../public/assets/img-products/' . $variables['prod-codigo'];
            if (!file_exists($folder)) {
                mkdir($folder);
            }
            foreach ($request->files->get('img') as $file) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move($folder, $fileName);
                $images .= $fileName . ';';
            }
        }

        if (!$validate || !$session->has('nombreAdmin')) {
            $result['error'] = $mensajes['update_register_error'];
        } else {
            $categoria = $this->getDoctrine()->getRepository(Categoria::class)->findOneBy(['id' => $variables['prod-categoria']]);
            $proveedor = $this->getDoctrine()->getRepository(Proveedor::class)->findOneBy(['id' => $variables['prod-codigoP']]);

            if (empty($categoria) || empty($proveedor)) {
                $result['error'] = $mensajes['update_register'];
            } else {
                $producto = $this->getDoctrine()->getRepository(Producto::class)->findOneBy(['codigoprod' => $variables['prod-codigo'], "estado" => 1]);
                if (!empty($producto)) {
                    $result['error'] = 'El código ya existe';
                }else{
                    $Product = new Producto();
                    $Product->setCodigoprod(str_replace(" ","",$variables['prod-codigo']));
                    $Product->setNombreprod($variables['prod-name']);
                    $Product->setDescripcion($variables['prod-descripcion']);
                    $Product->setPrecio($variables['prod-price']);
                    $Product->setModelo($variables['prod-model']);
                    $Product->setMarca($variables['prod-marca']);
                    $Product->setColor($variables['prod-color']);
                    $Product->setStock($variables['prod-stock']);
                    $Product->setInpromo($variables['prod-promo']);
                    if (isset($variables['prod-home'])) {
                        $Product->setInhome(1);
                    }
                    $Product->setImagen(substr($images, 0, -1));
                    $Product->setNombre($session->get('nombreAdmin'));
                    $Product->setActualizado(new \DateTime());
                    $Product->setCreado(new \DateTime());
                    $Product->setIdproveedor($proveedor);
                    $Product->setIdcategoria($categoria);
                    $entityManager->persist($Product);
                    $entityManager->flush();

                    $result['message'] = $mensajes['update_register'];
                    $result['redirect'] = $this->generateUrl('general_admin');
                }                                
            }
        }
        return $this->redirectToRoute('general_admin', ['error_message' => $result], 307);
        //return new JsonResponse($result);
    }

    public function updateProduct() {

        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        if (!$session->has('nombreAdmin')) {
            return $this->redirectToRoute('general_home');
        }
        $request = Request::createFromGlobals();
        $entityManager = $this->getDoctrine()->getManager();
        $inputs = ["code-old-prod", "code-prod", "prod-name", "prod-category", "price-prod", "model-prod", "marc-prod", "stock-prod", "prod-provider", "description-prod", "promo-prod", "color-prod"];
        $mensajes = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'messages'])->getValue(), true)['mensajes'];
        $validate = true;
        $result = [];
        $variables = [];

        if (!empty($request->request->get('prod-home'))) {
            array_push($inputs, "prod-home");
        }

        foreach ($inputs as $input) {
            if (empty($request->request->get($input))) {
                $validate = false;
                if($input == 'promo-prod'){
                    $validate = true;
                    $variables[$input] = trim($request->request->get($input));
                    if($request->request->get($input) > 100 && $request->request->get($input) < 0){
                        $validate = false;
                    }
                }
            } else {
                $variables[$input] = trim($request->request->get($input));
            }
        }
        
        if (!$validate || !$session->has('nombreAdmin')) {
            $result['error'] = $mensajes['update_register_error'] . "_1";
        } else {
            $Product = $this->getDoctrine()->getRepository(Producto::class)->findOneBy(['id' => $variables['code-old-prod']]);
            if (empty($Product)) {
                $result['error'] = $mensajes['update_register_error'] . "_2";
            } else {
                if ($request->request->get('prod-files-update') !== '' && !empty($request->request->get('prod-files-update'))) {
                    return $this->render('@Twigs/Admin/productos_actualizar.html.twig', ["producto" => $Product]);
                } else {
                    if ($request->request->get('prod-files-inactivar') !== '' && !empty($request->request->get('prod-files-inactivar'))) {
                        $Product->setEstado(($Product->getEstado() == 0) ? 1 : 0);
                    } else {
                        $categoria = $this->getDoctrine()->getRepository(Categoria::class)->findOneBy(['id' => $variables['prod-category']]);
                        $proveedor = $this->getDoctrine()->getRepository(Proveedor::class)->findOneBy(['id' => $variables['prod-provider']]);

                        if (empty($categoria) || empty($proveedor)) {
                            $result['error'] = $mensajes['update_register'];
                        } else {
                            $inhome = null;
                            if (isset($variables['prod-home'])) {
                                $inhome = 1;
                            }
                            $Product->setCodigoprod($variables['code-prod']);
                            $Product->setNombreprod($variables['prod-name']);
                            $Product->setPrecio($variables['price-prod']);
                            $Product->setModelo($variables['model-prod']);
                            $Product->setMarca($variables['marc-prod']);
                            $Product->setStock($variables['stock-prod']);
                            $Product->setInpromo($variables['promo-prod']);
                            $Product->setColor($variables['color-prod']);
                            $Product->setIdcategoria($categoria);
                            $Product->setDescripcion($variables['description-prod']);
                            $Product->setInhome($inhome);
                            $Product->setIdproveedor($proveedor);
                            $Product->setNombre($session->get('nombreAdmin'));
                            $result['message'] = $mensajes['update_register'];
                        }
                    }
                    $Product->setActualizado(new \DateTime());
                    $entityManager->persist($Product);
                    $entityManager->flush();

                    $result['redirect'] = $this->generateUrl('general_admin');
                }
            }
        }

        return new JsonResponse($result);
    }

    public function createContent() {
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        if (!$session->has('nombreAdmin')) {
            return $this->redirectToRoute('general_home');
        }
        $request = Request::createFromGlobals();
        $entityManager = $this->getDoctrine()->getManager();
        $inputs = ["cont_titulo", "cont_descripcion", "cont_clave", "cont_url", "cont_info"];
        $mensajes = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'messages'])->getValue(), true)['mensajes'];
        $validate = true;
        $result = [];
        $variables = [];

        if (!empty($request->files->get('image'))) {
            $folder = $this->get('kernel')->getProjectDir() . '/public/assets/img/contenidos';
            if (!file_exists($folder)) {
                mkdir($folder, 777, true);
            }

            if (!$_FILES["image"]["error"]) {
                $file = $request->files->get('image');
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                if ($file->move($folder, $fileName)) {
                    $result = [
                        'success' => true,
                        'status' => 200,
                        'url' => '/assets/img/contenidos/' . $fileName,
                    ];
                } else {
                    $result = [
                        'success' => false,
                    ];
                }
            } else {
                $result = [
                    'success' => false,
                ];
            }
        } else {
            if (!empty($request->request->get('cont_url_edition'))) {
                $inputs += ["cont_url_edition"];
            }

            foreach ($inputs as $input) {
                if (empty($request->request->get($input))) {
                    $validate = false;
                } else {
                    $variables[$input] = trim($request->request->get($input));
                }
            }

            if (!$validate || !$session->has('nombreAdmin')) {
                $result['error'] = $mensajes['update_register_error'] . "_1";
            } else {
                $administrador = $this->getDoctrine()->getRepository(Administrador::class)->findOneBy(['nombre' => $session->get('nombreAdmin')]);
                if (empty($administrador)) {
                    $result['error'] = $mensajes['update_register_error'] . "_2";
                } else {
                    $url = isset($variables['cont_url_edition']) ? $variables['cont_url_edition'] : $variables['cont_url'];
                    $ContenidoExists = $this->getDoctrine()->getRepository(Contenido::class)->findOneBy(['url' => $url]);
                    if (!empty($ContenidoExists)) {
                        $ContenidoExists->setAdmin($administrador);
                        $ContenidoExists->setTitle($variables['cont_titulo']);
                        $ContenidoExists->setDescription($variables['cont_descripcion']);
                        $ContenidoExists->setText($variables['cont_info']);
                        $ContenidoExists->setKeywords($variables['cont_clave']);
                        $ContenidoExists->setUrl($variables['cont_url']);
                        $entityManager->persist($ContenidoExists);

                        $Historical = new HistoricalContenido();
                        $Historical->setContenido($ContenidoExists);
                        $Historical->setAdmin($administrador);
                        $Historical->setInfo($ContenidoExists->getText());
                        $Historical->setDate(new \DateTime());
                        $Historical->setIsActive(1);
                        $entityManager->persist($Historical);

                        $result['message'] = $mensajes['update_register'] . "_1";
                        $result['redirect'] = $this->generateUrl('general_admin');
                    } else {
                        $Contenido = new Contenido();
                        $Contenido->setAdmin($administrador);
                        $Contenido->setTitle($variables['cont_titulo']);
                        $Contenido->setDescription($variables['cont_descripcion']);
                        $Contenido->setText($variables['cont_info']);
                        $Contenido->setKeywords($variables['cont_clave']);
                        $Contenido->setUrl($variables['cont_url']);
                        $Contenido->setCreationdate(new \DateTime());
                        $Contenido->setPublicationstartdate(new \DateTime());
                        $Contenido->setIsActive(1);
                        $entityManager->persist($Contenido);
                        $result['message'] = $mensajes['update_register'] . "_2";
                        $result['redirect'] = $this->generateUrl('general_admin');
                    }
                    $entityManager->flush();
                }
            }
        }

        return new JsonResponse($result);
    }

    public function contentList($url) {
        $contenido = $this->getDoctrine()->getRepository(Contenido::class)->findOneBy(['url' => $url]);
        $request = Request::createFromGlobals();
        $return = [
            "contenido" => $contenido
        ];
        if (strpos($request->getRequestUri(), 'editar') === false) {
            $return["OnlyView"] = true;
        }

        return $this->render('@Twigs/Admin/contenido.html.twig', $return);
    }
    
    public function detailProduct($name) {
        $name = $this->get('encrypt_decrypt')->encrypt_decrypt('decrypt', $name);
        $product = $this->getDoctrine()->getRepository(Producto::class)->findOneBy(['codigoprod' => $name]);        

        return $this->render('@Twigs/General/product_detail.html.twig', ['product' => $product]);
    }

    public function updateFilesProduct() {
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        if (!$session->has('nombreAdmin')) {
            return $this->redirectToRoute('general_home');
        }
        $entityManager = $this->getDoctrine()->getManager();
        $request = Request::createFromGlobals();
        $inputs = ["prod-codigo"];
        $mensajes = json_decode($this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'messages'])->getValue(), true)['mensajes'];
        $validate = true;
        $result = [];
        $variables = [];

        foreach ($inputs as $input) {
            if (empty($request->request->get($input))) {
                $validate = false;
            } else {
                $variables[$input] = trim($request->request->get($input));
            }
        }

        $images = !empty($request->request->get('img-names')) ? $request->request->get('img-names') : null;
        $folder = $this->get('kernel')->getProjectDir() . '/public/assets/img-products/' . $variables['prod-codigo'];

        if (!empty($request->files->get('img'))) {            
            if (!file_exists($folder)) {
                mkdir($folder, 777);
            }
            foreach ($request->files->get('img') as $file) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move($folder, $fileName);
                $images .= $fileName . ';';
            }
        }

        if (!$validate || !$session->has('nombreAdmin')) {
            $result['error'] = $mensajes['update_register_error'];
        } else {
            $Product = $this->getDoctrine()->getRepository(Producto::class)->findOneBy(['codigoprod' => $variables['prod-codigo']]);
            if (!empty($Product)) {
                $Product->setImagen(substr($images, 0, -1));
                $Product->setActualizado(new \DateTime());
                $entityManager->flush();
                $files = glob($folder . '/*'); //obtenemos todos los nombres de los ficheros
                $image = explode(';', $Product->getImagen());                
                foreach ($files as $file) {                    
                    if (is_file($file) && !in_array(str_replace($folder."/", "" , $file), $image)) {                        
                        unlink($file); //elimino el fichero
                    }
                }
                return $this->redirectToRoute('general_admin');
            } else {
                $result['error'] = $mensajes['update_register_error'];
            }
        }
    }
    
    
    public function imagesParameters() {
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        $request = Request::createFromGlobals();
        $entityManager = $this->getDoctrine()->getManager();        
        $parameters = $this->getDoctrine()->getRepository(Parameters::class)->findOneBy(['name' => 'images']);
        $parameter = json_decode($parameters->getValue(), true);
        if (!$session->has('nombreAdmin')) {
            return $this->redirectToRoute('general_home');
        }                
        
        if (!empty($request->request->get('marcas'))) {
            $route = '/assets/img/marcas';
            $folder = $this->get('kernel')->getRootDir() . '/../public'.$route;
            $type = 'marcas';
        }elseif(!empty($request->request->get('register'))) {
            $route = '/assets/img/register';
            $folder = $this->get('kernel')->getRootDir() . '/../public'.$route;
            $type = 'register';
        }
        
        if (!empty($request->files->get('img'))) {            
            if (!file_exists($folder)) {
                mkdir($folder);
            }
            foreach ($request->files->get('img') as $file) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move($folder, $fileName);                
            }
        }
                        
        $parameter['imagesParameter'][$type] = $route.'/'.$fileName;
        $parameters->setValue(json_encode($parameter));                        
        $entityManager->persist($parameters);
        $entityManager->flush();
        
        $files = glob($folder . '/*'); //obtenemos todos los nombres de los ficheros                        
        foreach ($files as $file) {             
            if (basename($file) != $fileName) {
                unlink($file); //elimino el fichero
            }
        }
        
                                        
        
        
        return $this->redirectToRoute('general_admin');
        //return new JsonResponse($result);
    }

}
