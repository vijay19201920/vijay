<?php
namespace Inchoo\Helloworld\Block;
 
class Helloworld extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
        return 'Hello world!';
    }

	 public function getFormAction()
    {
		
        return $this->getUrl('helloworld/index/post', ['_secure' => true]);
    }
}