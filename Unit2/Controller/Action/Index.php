<?php

namespace Training\Unit2\Controller\Action;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        $this->getResponse()->appendBody("HELLO WORLD");
    }
}
