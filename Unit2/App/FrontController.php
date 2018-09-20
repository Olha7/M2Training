<?php
/**
 * Created by PhpStorm.
 * User: olha
 * Date: 20.09.18
 * Time: 21:14
 */
namespace Training\Unit2\App;
use Magento\Framework\App\RouterListInterface;
use Magento\Framework\App\ResponseInterface;
class FrontController extends \Magento\Framework\App\FrontController
{
    /**
     * @var \Magento\Framework\App\RouterList
     */
    protected $routerList;
    /**
     * @var \Magento\Framework\App\Response\Http
     */
    protected $response;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * FrontController constructor.
     * @param RouterListInterface $routerList
     * @param ResponseInterface $response
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        RouterListInterface $routerList,
        ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->routerList = $routerList;
        $this->response = $response;
        $this->logger = $logger;
        parent::__construct($routerList, $response);
    }

    /**
     * @param \Magento\Framework\App\RequestInterface $request
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        foreach ($this->routerList as $router) {
            $this->logger->addDebug(get_class($router));
        }
        return parent::dispatch($request);
    }
}