<?php
/**
 * Created by PhpStorm.
 * User: olha
 * Date: 30.09.18
 * Time: 18:38
 */
namespace Training\Unit3\Block\Product\View;

class Description
{
    public function _beforeToHtml(\Magento\Catalog\Block\Product\View\Description $subject)
    {
        //exit();
        $subject->getProduct()->setDescription('Test description');
    }
}
