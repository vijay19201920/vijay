<?php
namespace Inchoo\Helloworld\Model\Resource;

/**
* Ecommerce Resource Model
*/
class Helloworld extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
/**
* Initialize resource model
*
* @return void
*/
protected function _construct(){

$this->_init('inchoo_helloworld', 'id');
}
}