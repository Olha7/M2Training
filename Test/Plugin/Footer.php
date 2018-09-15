<?php
namespace Training\Test\Plugin;

class Footer
{
    public function aroundGetCopyright(\Magento\Theme\Block\Html\Footer $subject, \Closure $procede)
    {
        return 'Customized copyright!';
    }
}