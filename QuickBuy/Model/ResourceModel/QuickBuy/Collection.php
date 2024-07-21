<?php
namespace CustomModule\QuickBuy\Model\ResourceModel\QuickBuy;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(\CustomModule\QuickBuy\Model\QuickBuy::class, \CustomModule\QuickBuy\Model\ResourceModel\QuickBuy::class);
    }
}
