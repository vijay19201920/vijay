<?php
namespace Inchoo\Slider\Block\Adminhtml\post;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var \Magento\Framework\Module\Manager
     */
    protected $moduleManager;

    /**
     * @var \Silk\Contact\Model\silkmodelFactory
     */
    protected $_sliderFactory;

   // protected $_status;

    /**
     * @var \Silk\Contact\Model\Status
     */
   // protected $_status;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \Silk\Contact\Model\silkmodelFactory $silkmodelFactory
     * @param \Silk\Contact\Model\Status $status
     * @param \Magento\Framework\Module\Manager $moduleManager
     * @param array $data
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Inchoo\Slider\Model\SliderFactory  $sliderFactory,
       // \Silk\Contact\Model\Status $status,
        \Magento\Framework\Module\Manager $moduleManager,
        array $data = []
    ) {
        $this->_sliderFactory = $sliderFactory;
       // $this->_status = $status;
        $this->moduleManager = $moduleManager;
        parent::__construct($context, $backendHelper, $data);
    }

    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('postGrid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(false);
        $this->setVarNameFilter('post_filter');
    }

    /**
     * @return $this
     */
    protected function _prepareCollection()
    {
        echo "_prepareCollection grid";
         exit;
        $collection = $this->_sliderFactory->create()->getCollection();
        $this->setCollection($collection);

        parent::_prepareCollection();

        return $this;
    }
     protected function _prepareColumns()
    {
         
         echo "_prepareColumns grid";
         exit;
        $this->addColumn(
            'custom_id',
            [
                'header' => __('ID'),
                'type' => 'number',
                'index' => 'custom_id',
                'header_css_class' => 'col-id',
                'column_css_class' => 'col-id'
            ]
        );
        return parent::_prepareColumns();
    }
    
    
     protected function _prepareLayout()
    {
         
       
        $this->setChild(
            'export_button',
            $this->getLayout()->createBlock('Magento\Backend\Block\Widget\Button')->setData(
                [
                    'label' => __('Export'),
                    'onclick' => $this->getJsObjectName() . '.doExport()',
                    'class' => 'task',
                ]
            )
        );
        $this->setChild(
            'reset_filter_button',
            $this->getLayout()->createBlock('Magento\Backend\Block\Widget\Button')->setData(
                [
                    'label' => __('Reset Filter'),
                    'onclick' => $this->getJsObjectName() . '.resetFilter()',
                    'class' => 'action-reset action-tertiary'
                ]
            )->setDataAttribute(
                [
                    'action' => 'grid-filter-reset'
                ]
            )
        );
        $this->setChild(
            'search_button',
            $this->getLayout()->createBlock('Magento\Backend\Block\Widget\Button')->setData(
                [
                    'label' => __('Search'),
                    'onclick' => $this->getJsObjectName() . '.doFilter()',
                    'class' => 'task action-secondary',
                ]
            )->setDataAttribute(
                [
                    'action' => 'grid-filter-apply'
                ]
            )
        );
        return parent::_prepareLayout();
    }

    

	

}