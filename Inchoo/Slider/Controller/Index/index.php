<?php

namespace Inchoo\Slider\Controller\Index;

use Magento\Framework\App\Action\Context;
use Inchoo\Slider\Model\SliderFactory ;
//to use the collection we should use SliderFactory instead of Slider


class Index extends \Magento\Framework\App\Action\Action {

   protected $_resultPageFactory;
    protected $_hello;

    public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, SliderFactory $hello) {
        
        
        parent::__construct($context);
		$this->_resultPageFactory = $resultPageFactory;
        $this->_hello = $hello;
    }

    public function execute() {
        
        //echo "vijay";
       // exit;

        $resultPage = $this->_resultPageFactory->create();
         

        $newsModel = $this->_hello->create();

     $item = $newsModel->load(1);
       // var_dump($item->getData());;

        // Get news collection
        $newsCollection = $newsModel->getCollection();
        // Load all data of collection
        //var_dump($newsCollection->getData());
    }

}
