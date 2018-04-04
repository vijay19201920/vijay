<?php

namespace Inchoo\Slider\Controller\Adminhtml\post;


class Index extends \Magento\Backend\App\Action
{
	protected $resultPageFactory = false;

	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
	)
	{
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
	}

	public function execute()
	{
		$resultPage = $this->resultPageFactory->create();
		//$resultPage->getConfig()->getTitle()->prepend((__('Posts')));
		//$resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Inchoo_Slider::post');
        $resultPage->addBreadcrumb(__('Inchoo'), __('Inchoo'));
        $resultPage->addBreadcrumb(__('Manage item'), __('Manage Post'));
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Post'));


        return $resultPage;
	}


}