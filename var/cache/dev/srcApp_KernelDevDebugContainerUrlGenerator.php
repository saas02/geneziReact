<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'general_home' => [[], ['_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::index'], [], [['text', '/']], [], []],
        'productos_creados' => [[], ['_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::indexAction'], [], [['text', '/productos_creados']], [], []],
        'register' => [[], ['_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::register'], [], [['text', '/registro']], [], []],
        'products' => [[], ['_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::products'], [], [['text', '/productos']], [], []],
        'products-img' => [[], ['_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::productsImg'], [], [['text', '/productos-imagenes']], [], []],
        'car_shop' => [[], ['_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::carShop'], [], [['text', '/carrito']], [], []],
        'car_load' => [[], ['_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::loadCarShop'], [], [['text', '/cargar-carrito']], [], []],
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'general_login' => [[], ['_controller' => 'App\\LoginBundle\\Controller\\LoginController::login'], [], [['text', '/login']], [], []],
        'general_logout' => [[], ['_controller' => 'App\\LoginBundle\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], []],
        'general_info' => [[], ['_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::generalInfo'], [], [['text', '/nosotros']], [], []],
        'general_corporative' => [[], ['_controller' => 'App\\GeneralBundle\\Controller\\GeneralController::corporativeIndex'], [], [['text', '/cliente-corporativo']], [], []],
        'register_client' => [[], ['_controller' => 'App\\LoginBundle\\Controller\\LoginController::registerClient'], [], [['text', '/registro-cliente']], [], []],
        'general_admin' => [[], ['_controller' => 'App\\AdminBundle\\Controller\\AdminController::index'], [], [['text', '/administrador']], [], []],
        'create_products' => [[], ['_controller' => 'App\\AdminBundle\\Controller\\AdminController::createProduct'], [], [['text', '/crear-producto']], [], []],
        'create_admin' => [[], ['_controller' => 'App\\AdminBundle\\Controller\\AdminController::createAdmin'], [], [['text', '/crear-admin']], [], []],
        'create_provider' => [[], ['_controller' => 'App\\AdminBundle\\Controller\\AdminController::createProvider'], [], [['text', '/crear-proveedor']], [], []],
        'create_category' => [[], ['_controller' => 'App\\AdminBundle\\Controller\\AdminController::createCategory'], [], [['text', '/crear-categoria']], [], []],
        'create_contents' => [[], ['_controller' => 'App\\AdminBundle\\Controller\\AdminController::createContent'], [], [['text', '/crear-contenidos']], [], []],
        'contents_edit' => [['url'], ['_controller' => 'App\\AdminBundle\\Controller\\AdminController::contentList'], [], [['variable', '/', '[^/]++', 'url', true], ['text', '/editar-contenido']], [], []],
        'contents_view' => [['url'], ['_controller' => 'App\\AdminBundle\\Controller\\AdminController::contentList'], [], [['variable', '/', '[^/]++', 'url', true], ['text', '/contenido']], [], []],
        'update_products' => [[], ['_controller' => 'App\\AdminBundle\\Controller\\AdminController::updateProduct'], [], [['text', '/actualizar-producto']], [], []],
        'update_files_product' => [[], ['_controller' => 'App\\AdminBundle\\Controller\\AdminController::updateFilesProduct'], [], [['text', '/actualizar-fotos-producto']], [], []],
        'detail' => [['name'], ['_controller' => 'App\\AdminBundle\\Controller\\AdminController::detailProduct'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/detalle']], [], []],
        'pedido' => [[], ['_controller' => 'App\\OrderBundle\\Controller\\OrderController::order'], [], [['text', '/pedido']], [], []],
        'formulario' => [[], ['_controller' => 'App\\OrderBundle\\Controller\\OrderController::formOrder'], [], [['text', '/formulario']], [], []],
        'payment' => [[], ['_controller' => 'App\\OrderBundle\\Controller\\OrderController::payment'], [], [['text', '/pago']], [], []],
        'resumen_approved' => [[], ['_controller' => 'App\\OrderBundle\\Controller\\OrderController::resume'], [], [['text', '/resumen-compra-aprobada']], [], []],
        'resumen_rejected' => [[], ['_controller' => 'App\\OrderBundle\\Controller\\OrderController::resume'], [], [['text', '/resumen-compra-rechazada']], [], []],
        'update_images_parameters' => [[], ['_controller' => 'App\\AdminBundle\\Controller\\AdminController::imagesParameters'], [], [['text', '/actualizar-imagen-parametrizable']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
