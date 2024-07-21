<?php
namespace CustomModule\QuickBuy\Controller\Index;

class Save extends \Magento\Framework\App\Action\Action
{
    protected $quickBuyFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \CustomModule\QuickBuy\Model\QuickBuyFactory $quickBuyFactory
    ) {
        $this->quickBuyFactory = $quickBuyFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_JSON);

        $phoneNumber = $this->getRequest()->getParam('phone_number');
        $sku = $this->getRequest()->getParam('sku');

        if ($phoneNumber && $sku) {
            try {
                $quickBuy = $this->quickBuyFactory->create();
                $quickBuy->setData('phone_number', $phoneNumber);
                $quickBuy->setData('sku', $sku);
                $quickBuy->save();
                $result->setData(['success' => true]);
            } catch (\Exception $e) {
                $result->setData(['success' => false, 'message' => $e->getMessage()]);
            }
        } else {
            $result->setData(['success' => false, 'message' => 'Invalid data']);
        }

        return $result;
    }
}
