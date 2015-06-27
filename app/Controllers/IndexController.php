<?php
namespace Latotzky\Testphalcon\Controllers;

use Phalcon\Mvc\Controller;

/**
 * IndexController
 */
class IndexController extends Controller
{

    /**
     * show welcome message.
     */
    public function indexAction()
    {
        $msg = $this->hello->getHello();
        echo "<h1>$msg!</h1>";
    }
}
