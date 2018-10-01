<?php
/**
 * Created by PhpStorm.
 * User: olha
 * Date: 30.09.18
 * Time: 18:38
 */
namespace Training\Unit3\Block\Product\View;

class Description extends \Magento\Catalog\Block\Product\View\Description
{
    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $subject)
    {
        $subject->getProduct()->setDescription('Test description');
    }
}
