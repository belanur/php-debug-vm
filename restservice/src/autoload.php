<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'acme\\rest\\application' => '/Application.php',
                'acme\\rest\\errorhandler' => '/ErrorHandler.php',
                'acme\\rest\\httprequest' => '/HttpRequest.php',
                'acme\\rest\\httprequestinterface' => '/interfaces/HttpRequestInterface.php',
                'acme\\rest\\indexrequesthandler' => '/requesthandlers/IndexRequestHandler.php',
                'acme\\rest\\jsonresponse' => '/JsonResponse.php',
                'acme\\rest\\requesthandlerinterface' => '/requesthandlers/RequestHandlerInterface.php',
                'acme\\rest\\responseinterface' => '/interfaces/ResponseInterface.php',
                'acme\\rest\\restexception' => '/exceptions/RestException.php',
                'acme\\rest\\route' => '/routing/Route.php',
                'acme\\rest\\router' => '/routing/Router.php',
                'acme\\rest\\routingexception' => '/exceptions/RoutingException.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd