<?php
/**
 * Created by PhpStorm.
 * User: olha
 * Date: 30.09.18
 * Time: 17:25
 */
namespace Training\Unit3\Controller\Block;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\LayoutFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var LayoutFactory
     */
    private $layoutFactory;

    /**
     * @var PageFactory
     */
    protected $resultFactory;

    public function __construct(
        Context $context,
        LayoutFactory $layoutFactory,
        PageFactory $resultFactory
    )
    {
        $this->layoutFactory = $layoutFactory;
        $this->resultFactory = $resultFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $layout = $this->layoutFactory->create();
        $block  = $layout->createBlock('Training\Unit3\Block\Test');
        //$this->getResponse()->appendBody($block->toHtml());

        /** @var \Magento\Framework\Controller\Result\Raw $resultRaw */
        $resultRaw = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $resultRaw->setContents(
            $block->toHtml()
        );
        return $resultRaw;

    }
}