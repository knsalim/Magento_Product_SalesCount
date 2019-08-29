<?php
//
//namespace Mageplaza\HelloWorld\Helper;
//use \Magento\Framework\App\Helper\AbstractHelper;
//use Magento\Framework\App\Helper\Context;
//
//class SalesData extends AbstractHelper
//{
//    protected $_productAttributeRepository;
//
//    public function __construct(Context $context,\Magento\Catalog\Model\Product\Attribute\Repository $productAttributeRepository)
//    {
//        $this->_productAttributeRepository = $productAttributeRepository;
//        parent::__construct($context);
//    }
//
//    public function getTest()
//    {
//    return 'Hello';
////        if ($_product=$this->_productAttributeRepository->getCustomAttributes('show_sales_count')=='yes') {
////            return '  your sale is 100';
////        }
//    }
//
//    public function getWelcome()
//    {
//        return "This helper is called directly";
//    }
//}


namespace Leanswift\ProductSales\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;

class SalesData extends AbstractHelper
{

    public function getTest()
    {
        return "This is Lean swift helper";
        $this->getProduct()->getAttributeText('material');
    }

    public function getWelcome()
    {
        return "This helper is called directly from Lean swift";
    }

}