<?php
namespace Vendor\Module\Block;

use Magento\Framework\View\Element\Template;

class CustomBlock extends Template
{
    public function getCustomData()
    {
        return "Hello from Custom Block!";
    }
}
