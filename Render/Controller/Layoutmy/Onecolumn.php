<?php
/**
 * Created by PhpStorm.
 * User: olha
 * Date: 03.10.18
 * Time: 20:56
 */
namespace Training\Render\Controller\Layoutmy;

class Onecolumn extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}