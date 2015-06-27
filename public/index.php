<?php

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\Url as UrlProvider;
#use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Mvc\Dispatcher;

try {
    // Register an autoloader
    $loader = new Loader();
    $loader->registerNamespaces(
        array(
            'Latotzky\Testphalcon\Controllers' => "../app/Controllers/",
            'Latotzky\Testphalcon\Models'      => "../app/Models/",
        )
    )->register();

    // Create a DI
    $di = new FactoryDefault();

    // Setup the view component
    $di->set('view', function () {
        $view = new View();
        $view->setViewsDir('../app/Views/');
        return $view;
    });

    // Setup a base URI so that all generated URIs include the "tutorial" folder
    $di->set('url', function () {
        $url = new UrlProvider();
        $url->setBaseUri('/');
        return $url;
    });

    $di->set('dispatcher', function () {
        $dispatcher = new Dispatcher();
        $dispatcher->setDefaultNamespace('Latotzky\Testphalcon\Controllers');
        return $dispatcher;
    });

    $di->set('hello', function () {
        $hello = new Latotzky\Testphalcon\Models\HelloWorld();
        return $hello;
    });

    // Handle the request
    $application = new Application($di);

    echo $application->handle()->getContent();

} catch (\Exception $e) {
     echo "PhalconException: ", $e->getMessage();
}
