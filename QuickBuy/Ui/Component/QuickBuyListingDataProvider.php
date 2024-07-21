<?php
namespace CustomModule\QuickBuy\Ui\Component;

class QuickBuyListingDataProvider extends \Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider
{
    protected $collection;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \CustomModule\QuickBuy\Model\ResourceModel\QuickBuy\Grid\CollectionFactory $collectionFactory,
        \Magento\Framework\Api\Search\ReportingInterface $reporting,
        \Magento\Framework\Api\Search\SearchCriteriaBuilder $searchCriteriaBuilder,
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\Api\FilterBuilder $filterBuilder,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name,
            $primaryFieldName,
            $requestFieldName,
            $reporting,
            $searchCriteriaBuilder,
            $request,
            $filterBuilder,
            $meta,
            $data);
    }

    public function getData()
    {
        return [
            'totalRecords' => $this->collection->getSize(),
            'items' => $this->collection->toArray()['items'],
        ];
    }
}
