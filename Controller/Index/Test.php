<?php


namespace Leanswift\ProductSales\Controller\Index;


class Test extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    protected $_showcount;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Leanswift\ProductSales\Model\Showcount $showcount,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        $this->_showcount= $showcount;
        return parent::__construct($context);
    }

    public function execute()
    {
        echo "Hello World";
      echo $this->_showcount=getProductOrder();
        exit;
    }
}