<?php
namespace Inchoo\Slider\Model\ResourceModel;

/**
* Ecommerce Resource Model
*/
class Slider extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
/**
* Initialize resource model
*
* @return void
*/
protected function _construct(){

    
   // echo "vijay";
 
$this->_init('inchoo_slider', 'custom_id');
//echo "vijayd"; exit;


}
}