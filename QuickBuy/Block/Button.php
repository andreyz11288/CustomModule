<?php
namespace CustomModule\QuickBuy\Block;

class Button extends \Magento\Framework\View\Element\Template
{
    protected $productRepository;
    protected $_registry;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->productRepository = $productRepository;
        $this->_registry = $registry;
        parent::__construct($context, $data);
    }

    public function getProduct()
    {
        return $this->_registry->registry('current_product');
    }
}
