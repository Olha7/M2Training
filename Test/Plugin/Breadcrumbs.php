<?php

namespace Training\Test\Plugin;

class Breadcrumbs
{
    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {
        return [$crumbName . "(!)", $crumbInfo];
    }
}