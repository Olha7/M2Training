<?php
/**
 * Created by PhpStorm.
 * User: olha
 * Date: 20.09.18
 * Time: 20:56
 */
namespace Training\Unit2\Observer;

use Magento\Framework\Event\ObserverInterface;

class LogPageOutput implements ObserverInterface
{
    /**
     * @var null|\Psr\Log\LoggerInterface
     */
    protected $_logger = null;

    /**
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->_logger = $logger;
    }

    /**
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return $this
     *
     * @SuppressWarnings(PHPMD.UnusedLocalVariable)
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $response = $observer->getEvent()->getData('response');
        $body = $response->getBody();
        //$this->_logger->debug("--------\n\n\n BODY \n\n\n " . $body);
    }
}