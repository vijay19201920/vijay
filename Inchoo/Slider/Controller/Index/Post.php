<?php


/**
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Inchoo\Slider\Controller\Index;


class Post extends \Magento\Framework\App\Action\Action
{
 public function execute()
    {
        $post = $this->getRequest()->getPostValue();
		
		 if (!$post) {
            $this->_redirect('*/*/');
            return;
       }
        
       // echo "vijay";
        
		
       $currenttime = date('Y-m-d H:i:s');
        $model = $this->_objectManager->create('Inchoo\Slider\Model\Slider');
		
		$id = $post['id'];
		$name = $post['name'];
		
		echo $id;
		exit;
		
        $model->setData('id', $post['custom_id']);
        $model->setData('name', $post['name']);
		
		$model->save();
       $this->_redirect('*/*/');
       $this->messageManager->addSuccess(__('Your Data has beeen submitted successfully.'));    
    }

}
