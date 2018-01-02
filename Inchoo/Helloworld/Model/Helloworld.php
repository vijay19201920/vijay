<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Inchoo\Helloworld\Model;

class Helloworld extends \Magento\Framework\Model\AbstractModel
{
	public function __construct(
	        \Magento\Framework\Model\Context $context,
	        \Magento\Framework\Registry $registry,
	        //\Magento\Framework\Model\Resource\AbstractResource $resource = null,
	        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
	        array $data = []
	) 
	{
	    parent::__construct($context, $registry, $resourceCollection);
	}

	public function _construct()
	{
	    $this->_init('Inchoo\Helloworld\Model\Resource\Helloworld');
	}
}