<?php
/**
 * Created by PhpStorm.
 * User: olha
 * Date: 20.09.18
 * Time: 22:31
 */
namespace Training\Unit2\Controller;

class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $moduleName = 'cms';
        $controllerName = 'index';
        $actionName = 'index';
        $request
            ->setModuleName($moduleName)
            ->setControllerName($controllerName)
            ->setActionName($actionName);
        return true;
    }
}