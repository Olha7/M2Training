<?php
/**
 * Created by PhpStorm.
 * User: olha
 * Date: 03.10.18
 * Time: 22:27
 */


namespace Training\Render\ViewModel;

class Form implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    private $urlBuilder;

    public function __construct(
        \Magento\Framework\UrlInterface $urlBuilder
    ) {
        $this->urlBuilder = $urlBuilder;
    }

    public function getSubmitUrl()
    {
        return $this->urlBuilder->getUrl('customer/account/login');
    }
}