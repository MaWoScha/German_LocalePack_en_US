<?php
/**
 * @category  German
 * @package   German_LocalePack
 * @authors   MaWoScha <mawoscha@siempro.co, http://www.siempro.co/>
 * @developer MaWoScha <mawoscha@siempro.co, http://www.siempro.co/>
 * @version   0.1.0
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class German_LocalePackEn_Block_System_Config_Form_Fieldset_Instructions
    extends Mage_Adminhtml_Block_System_Config_Form_Fieldset
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $nodepath = "modules/German_LocalePackEn";
        $helper = Mage::helper("localepacken");

        $html  = $this->_getHeaderHtml($element);
        $html .= "<p style='font-weight:bold;'>";
        $html .= $helper->__("The %s language pack in version %s has been successfully installed.",
                (string)Mage::app()->getConfig()->getNode($nodepath.'/locale'),
                (string)Mage::app()->getConfig()->getNode($nodepath.'/version') );
        $html .= "</p>";

        $html .= $helper->__("This package is simply adding three Static Blocks to the <a href='%s'>E-Mail-Templates</a>:",
                Mage::helper('adminhtml')->getUrl('adminhtml/system_email_template'));
        $html .= "<ul style='list-style-position: outside; list-style-type: disc; margin-left:18px;'>";
        $html .= "<li>email_template_say_hello &nbsp; (".$helper->__("Salutation").")</li>";
        $html .= "<li>email_template_contact &nbsp; (".$helper->__("Contact information").")</li>";
        $html .= "<li>email_template_say_bye &nbsp; (".$helper->__("Closing formula").")</li>";
        $html .= "</ul>";
        $html .= "<p>";
        $html .= $helper->__("The static blocks can be managed by the <a href='%s'>CMS system</a> in the admin area.",
                Mage::helper('adminhtml')->getUrl('adminhtml/cms_block'));
        $html .= "</p>";

        $html .= "<p style='margin-top:20pt;'>";
        $html .= $helper->__("Note for detailed information, the README file on the <a href='%s'>GitHub page</a>.",
                (string)Mage::app()->getConfig()->getNode($nodepath.'/link_git') );
        $html .= "</p>";
        $html .= "<p style='text-align:right;'>";
        $html .= $helper->__("powered by")." <a href='http://blog.siempro.co/' target='_blank'>MaWoScha</a>";
        $html .= "</p>";
        $html .= $this->_getFooterHtml($element);

        return $html;
    }
}
