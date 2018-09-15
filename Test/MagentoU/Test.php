<?php

namespace Training\Test\MagentoU;

class Test
{
    private $productRepository;

    private $unit1ProductRepository;

    private $justAParameter;

    private $data;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Checkout\Model\Session $session,
        \Magento\Catalog\Model\ProductRepository $unit1ProductRepository,
        $justAParameter = false,
        array $data
    ) {
        $this->productRepository = $productRepository;
        $this->unit1ProductRepository = $unit1ProductRepository;
        $this->justAParameter = $justAParameter;
        $this->data = $data;
    }

    public function log()
    {
        echo get_class($this->productRepository)."</br>\n";
        echo get_class($this->unit1ProductRepository)."</br>\n";

        var_dump($this->justAParameter);
        var_dump($this->data);
    }

}