<?php
namespace Inchoo\Slider\Block;
 
class Slider extends \Magento\Framework\View\Element\Template
{
    public function getSliderTxt()
    {
        return 'Hello world!';
    }

	 public function getFormAction()
    {
		
        return $this->getUrl('Slider/index/post', ['_secure' => true]);
    }
}