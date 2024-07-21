<?php
namespace CustomModule\QuickBuy\Model\ResourceModel;

class QuickBuy extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('quick_buy', 'id');
    }
}
