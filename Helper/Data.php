<?php


namespace Leanswift\ProductSales\Helper;

use Leanswift\ProductSales\Model\Showcount;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $scopeConfig;
    /**
     * @var \Magento\Sales\Model\OrderFactory
     */
    private $orderFactory;
    private $orderId;
    private $sku;
    /**
     * @var Showcount
     */
    private $_showcount;

    /**
     * Data constructor
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param $getSalableQuantityDataBySku
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context, Showcount $showcount,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
        $this->_showcount= $showcount;

    }

    /**
     * @return $telephoneConfig
     */
    public function getEnable()
    {
        $enableConfig = $this->scopeConfig->getValue(
            'productsales/general/enable',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );


        return $enableConfig;
    }

    public function getDays()
    {
        $yearConfig = $this->scopeConfig->getValue(
            'productsales/general/productsales_dropdown_custom',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $yearConfig;
    }
    public function getData($sku,$ordershippeddays)
    {
        $a=$this->_showcount->getProductOrder($sku,$ordershippeddays);
        return $a;
    }



}