<?
class bizpcate extends CModule
{
	
	var $MODULE_ID = 'bizpcate';
	var $MODULE_VERSION = '1.0';
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME = 'BizPro Category';
	var $MODULE_DESCRIPTION = 'BizPro Category Management';
	var $MODULE_CSS;

	function DoInstall()
	{
		RegisterModule($this->MODULE_ID);
	}

	function DoUninstall()
	{
		
	}

	function bizpcate()
	{
		
	}
}