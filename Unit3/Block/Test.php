<?php
/**
 * Created by PhpStorm.
 * User: olha
 * Date: 30.09.18
 * Time: 17:18
 */
namespace Training\Unit3\Block;

class Test extends \Magento\Framework\View\Element\AbstractBlock
{
    public function _toHtml()
    {
        return "<b>Hello world from block!</b>";
    }
}