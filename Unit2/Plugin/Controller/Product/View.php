<?php
/**
 * Created by PhpStorm.
 * User: olha
 * Date: 20.09.18
 * Time: 22:42
 */
namespace Training\Unit2\Plugin\Controller\Product;

class View
{
    public function beforeExecute(\Training\Unit2\Controller\Product\View $subject)
    {
        echo "BEFORE<BR>";
    }
    public function afterExecute(\Training\Unit2\Controller\Product\View $controller, $result)
    {
        echo "AFTER";
    }

}