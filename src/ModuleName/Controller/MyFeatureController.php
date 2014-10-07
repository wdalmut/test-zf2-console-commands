<?php
namespace ModuleName\Controller;

use Zend\Mvc\Controller\AbstractConsoleController;

class MyFeatureController extends AbstractConsoleController
{
    public function helloAction()
    {
        return "This is my incredible CLI command!";
    }
}
