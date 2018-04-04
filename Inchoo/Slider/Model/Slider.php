<?php

/**
 * Copyright 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Inchoo\Slider\Model;

class Slider extends \Magento\Framework\Model\AbstractModel {

    
    
    public function _construct() {
       // echo "vijay";
       // exit;
        $this->_init('Inchoo\Slider\Model\ResourceModel\Slider');
    }

}
