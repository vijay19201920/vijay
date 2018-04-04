<?php

namespace Inchoo\Slider\Observer\Catalog;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class Catalogcatagorybeforehai implements ObserverInterface {
	 public function execute(Observer $observer) {
		 
		 //echo "vijay";
		 //exit;
		 
		 echo "Catalog catagory before hai inchoo slider observer";
		// print_r($observer->getCatagory());
		 //exit;
	 }
}