<?php


namespace Leanswift\ProductSales\Model;

/**
 * Class Showcount
 * @package Leanswift\ProductSales\Model
 */
class Showcount
{
    /**
     * @var \Magento\Sales\Model\ResourceModel\Order\Item\CollectionFactory
     */
    private $itemCollection;
    private $sku;
    private $ordershippeddays;


    public function __construct(\Magento\Sales\Model\ResourceModel\Order\Item\CollectionFactory $itemCollection)
    {
        $this->itemCollection = $itemCollection;
    }

    public function getProductOrder($sku, $ordershippeddays)
    {
        $this->sku = $sku;
        $this->ordershippeddays = $ordershippeddays;
        $fromDate = gmdate("Y-m-d H:i:s", gmmktime(0, 0, 0, gmdate("m"), gmdate("d") - $ordershippeddays, gmdate("Y")));
        $toDate = gmdate("Y-m-d H:i:s", gmmktime(23, 59, 59, gmdate("m"), gmdate("d"), gmdate("Y")));

        $itemCollection = $this->itemCollection->create()
            ->addAttributeToFilter('created_at', array('from' => $fromDate, 'to' => $toDate))
            ->addFieldToFilter('sku', $sku);
        count($itemCollection); // this will give number of time ordered
        $itemCollection->getSelect()->columns('SUM(qty_ordered) as total_qty');

        foreach ($itemCollection->getData() as $item) {

            echo round($item['total_qty']);
        }

    }
}