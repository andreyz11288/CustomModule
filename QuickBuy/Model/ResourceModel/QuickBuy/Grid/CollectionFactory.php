<?php
namespace CustomModule\QuickBuy\Model\ResourceModel\QuickBuy\Grid;

class CollectionFactory
{
    protected $objectManager;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function create(array $data = [])
    {
        return $this->objectManager->create('CustomModule\QuickBuy\Model\ResourceModel\QuickBuy\Grid\Collection', $data);
    }
}
