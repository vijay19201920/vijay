<?php

/**
 * Ecommerce Resource Collection
 */

namespace Inchoo\Slider\Model\ResourceModel\Slider;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct() {
       
        
        $this->_init('Inchoo\Slider\Model\Slider', 'Inchoo\Slider\Model\ResourceModel\Slider');
    }

}
