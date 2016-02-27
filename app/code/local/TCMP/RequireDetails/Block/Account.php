<?php

class TCMP_RequireDetails_Block_Account extends Mage_Adminhtml_Block_Sales_Order_Create_Form_Account
{
    protected function _addAdditionalFormElementData(Varien_Data_Form_Element_Abstract $element)
    {
        switch ($element->getId()) {
            case 'email':
                $element->setRequired(true);
                $element->setClass('validate-email');
                break;
        }
        return $this;
    }
}