<?php
/**
 * Created by PhpStorm.
 * User: olha
 * Date: 20.09.18
 * Time: 21:32
 */
namespace Training\Unit2\Controller;

class Router implements \Magento\Framework\App\RouterInterface
{
    private $actionFactory;

    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory)
    {
        $this->actionFactory = $actionFactory;
    }

    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        //return $this->actionFactory->create('Magento\Framework\App\Action\Forward', ['request' => $request]);
        $info = $request->getPathInfo();
        if (preg_match("%^/(test)-(.*?)-(.*?)$%", $info, $m)) {

            $request->setPathInfo(sprintf("/%s/%s/%s", $m[1], $m[2], $m[3]));
            return $this->actionFactory->create('Magento\Framework\App\Action\Forward', ['request' => $request]);
        }
        return null;
    }
}