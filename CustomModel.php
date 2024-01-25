<?php
namespace Vendor\Module\Model;

use Magento\Framework\Model\AbstractModel;

class CustomModel extends AbstractModel
{
    protected $_idFieldName = 'custom_id';

    protected $_eventPrefix = 'custom_model';

    protected function _construct()
    {
        $this->_init(\Vendor\Module\Model\ResourceModel\CustomModel::class);
    }
}
