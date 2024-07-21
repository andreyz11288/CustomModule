<?php
namespace CustomModule\QuickBuy\Model;

class QuickBuy extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct(): void
    {
        $this->_init('CustomModule\QuickBuy\Model\ResourceModel\QuickBuy');
    }
}
