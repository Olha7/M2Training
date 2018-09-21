<?php
/**
 * Created by PhpStorm.
 * User: olha
 * Date: 21.09.18
 * Time: 20:45
 */

namespace Training\Unit2\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;


class UpgradeData implements UpgradeDataInterface
{

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if ($context->getVersion() && version_compare($context->getVersion(), '1.0.1') < 0
        ) {
            $setup->getConnection()->query('INSERT INTO url_rewrite SET request_path="testpage.html", target_path="test/action/index",redirect_type=0, store_id=1, is_autogenerated=0;');
        }

        $setup->endSetup();
    }
}