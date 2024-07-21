<?php
namespace CustomModule\QuickBuy\Controller\Adminhtml\Grid;

class Index extends \Magento\Backend\App\Action
{
    protected \Magento\Framework\View\Result\PageFactory $resultPageFactory;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('CustomModule_QuickBuy::grid');
        $resultPage->getConfig()->getTitle()->prepend(__('Quick Buy Orders'));
        return $resultPage;
    }
}
