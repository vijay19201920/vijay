<?php

namespace Inchoo\Slider\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface {

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context) {
        $setup->startSetup();
        $tableName = $setup->getTable('inchoo_slider');
        if (version_compare($context->getVersion(), '1.0.1', '<')) {
            if ($setup->getConnection()->isTableExists($tableName) == true) {

                $setup->getConnection()
                ->addColumn(
                $setup->getTable('inchoo_slider'),
                'summery',
                [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'primary' => false,
                'auto_increment' => false,
                'unsigned' => true,
                'nullable' => false,
                'comment' => 'summery'
                ]
                        );
            }
            //$setup->getConnection()->createTable($table);
        }
        $setup->endSetup();
    }

}
