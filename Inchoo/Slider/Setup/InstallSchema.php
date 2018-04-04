<?php

namespace Inchoo\Slider\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
//use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface {

    public function install(SchemaSetupInterface  $setup, ModuleContextInterface $context) {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
                        $setup->getTable('inchoo_slider')
                )->addColumn(
                        'custom_id', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true], 'Custom Id'
                )->addColumn(
                        'name', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'Custom Name'
                )->setComment(
                'Custom Table'
        );
        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }

}
