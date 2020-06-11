<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/' => [[['_route' => 'general_home', '_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::index'], null, null, null, false, false, null]],
            '/productos_creados' => [[['_route' => 'productos_creados', '_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::indexAction'], null, null, null, false, false, null]],
            '/registro' => [[['_route' => 'register', '_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::register'], null, null, null, false, false, null]],
            '/productos' => [[['_route' => 'products', '_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::products'], null, null, null, false, false, null]],
            '/productos-imagenes' => [[['_route' => 'products-img', '_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::productsImg'], null, null, null, false, false, null]],
            '/carrito' => [[['_route' => 'car_shop', '_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::carShop'], null, null, null, false, false, null]],
            '/cargar-carrito' => [[['_route' => 'car_load', '_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::loadCarShop'], null, null, null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'general_login', '_controller' => 'App\\LoginBundle\\Controller\\LoginController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'general_logout', '_controller' => 'App\\LoginBundle\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
            '/nosotros' => [[['_route' => 'general_info', '_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::generalInfo'], null, null, null, false, false, null]],
            '/cliente-corporativo' => [[['_route' => 'general_corporative', '_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::corporativeIndex'], null, null, null, false, false, null]],
            '/registro-cliente' => [[['_route' => 'register_client', '_controller' => 'App\\LoginBundle\\Controller\\LoginController::registerClient'], null, null, null, false, false, null]],
            '/administrador' => [[['_route' => 'general_admin', '_controller' => 'App\\AdminBundle\\Controller\\AdminController::index'], null, null, null, false, false, null]],
            '/crear-producto' => [[['_route' => 'create_products', '_controller' => 'App\\AdminBundle\\Controller\\AdminController::createProduct'], null, null, null, false, false, null]],
            '/crear-admin' => [[['_route' => 'create_admin', '_controller' => 'App\\AdminBundle\\Controller\\AdminController::createAdmin'], null, null, null, false, false, null]],
            '/crear-proveedor' => [[['_route' => 'create_provider', '_controller' => 'App\\AdminBundle\\Controller\\AdminController::createProvider'], null, null, null, false, false, null]],
            '/crear-categoria' => [[['_route' => 'create_category', '_controller' => 'App\\AdminBundle\\Controller\\AdminController::createCategory'], null, null, null, false, false, null]],
            '/crear-contenidos' => [[['_route' => 'create_contents', '_controller' => 'App\\AdminBundle\\Controller\\AdminController::createContent'], null, null, null, false, false, null]],
            '/actualizar-producto' => [[['_route' => 'update_products', '_controller' => 'App\\AdminBundle\\Controller\\AdminController::updateProduct'], null, null, null, false, false, null]],
            '/actualizar-fotos-producto' => [[['_route' => 'update_files_product', '_controller' => 'App\\AdminBundle\\Controller\\AdminController::updateFilesProduct'], null, null, null, false, false, null]],
            '/pedido' => [[['_route' => 'pedido', '_controller' => 'App\\OrderBundle\\Controller\\OrderController::order'], null, null, null, false, false, null]],
            '/formulario' => [[['_route' => 'formulario', '_controller' => 'App\\OrderBundle\\Controller\\OrderController::formOrder'], null, null, null, false, false, null]],
            '/pago' => [[['_route' => 'payment', '_controller' => 'App\\OrderBundle\\Controller\\OrderController::payment'], null, null, null, false, false, null]],
            '/resumen-compra-aprobada' => [[['_route' => 'resumen_approved', '_controller' => 'App\\OrderBundle\\Controller\\OrderController::resume'], null, null, null, false, false, null]],
            '/resumen-compra-rechazada' => [[['_route' => 'resumen_rejected', '_controller' => 'App\\OrderBundle\\Controller\\OrderController::resume'], null, null, null, false, false, null]],
            '/actualizar-imagen-parametrizable' => [[['_route' => 'update_images_parameters', '_controller' => 'App\\AdminBundle\\Controller\\AdminController::imagesParameters'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/editar\\-contenido/([^/]++)(*:196)'
                    .'|/contenido/([^/]++)(*:223)'
                    .'|/detalle/([^/]++)(*:248)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            196 => [[['_route' => 'contents_edit', '_controller' => 'App\\AdminBundle\\Controller\\AdminController::contentList'], ['url'], null, null, false, true, null]],
            223 => [[['_route' => 'contents_view', '_controller' => 'App\\AdminBundle\\Controller\\AdminController::contentList'], ['url'], null, null, false, true, null]],
            248 => [[['_route' => 'detail', '_controller' => 'App\\AdminBundle\\Controller\\AdminController::detailProduct'], ['name'], null, null, false, true, null]],
        ];
    }
}
