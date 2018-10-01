<?php
/**
 * Created by PhpStorm.
 * User: olha
 * Date: 01.10.18
 * Time: 22:29
 */
namespace Training\Unit3\Controller\Action;

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
        $block  = $layout->createBlock('Magento\Framework\View\Element\Template');
        $block->setTemplate('Training_Unit3::test.phtml');

        /** @var \Magento\Framework\Controller\Result\Raw $resultRaw */
        $resultRaw = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $resultRaw->setContents(
            $block->toHtml()
        );
        return $resultRaw;

    }
}