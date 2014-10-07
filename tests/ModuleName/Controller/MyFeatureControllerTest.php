<?php
namespace ModuleName\Controller;

use Zend\Test\PHPUnit\Controller\AbstractConsoleControllerTestCase;

class MyFeatureControllerTest extends AbstractConsoleControllerTestCase
{
    public function setUp()
    {
        $this->setApplicationConfig(include __DIR__ . '/application.conf.php');
    }

    public function testMyCommandReplyAsAgreed()
    {
        $this->dispatch('my-custom-command');

        $this->assertConsoleOutputContains("This is my incredible CLI command!");
    }
}

