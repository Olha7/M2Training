<?php
/**
 * Created by PhpStorm.
 * User: olha
 * Date: 20.09.18
 * Time: 22:58
 */
namespace Training\Unit2\Controller\Adminhtml\Action;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * Test action index
     */
    public function execute()
    {
        $this->_redirect('catalog/category/edit/id/3');
        //$this->getResponse()->appendBody("HELLO WORLD");
    }
    /**
     * Check if admin has permissions to visit related pages
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        $secret = $this->getRequest()->getParam('secret');
        return isset($secret) && (int)$secret == 1;
    }
}