<?php

/**
* Ecommerce Resource Collection
*/
namespace Inchoo\Helloworld\Model\Resource\Helloworld;

class Collection extends \Magento\Framework\Model\Resource\Db\Collection\AbstractCollection{
/**
* Resource initialization
*
* @return void
*/
protected function _construct(){
$this->_init(‘Inchoo\Helloworld\Model\Helloworld’, ‘Inchoo\Helloworld\Model\Resource\Helloworld’);
}
}