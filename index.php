<?php

/* -AFTERLOGIC LICENSE HEADER- */

class_exists('CApi') or die();

class CChangeLoginDetailsPlugin extends AApiPlugin
{
	/**
	 * @param CApiPluginManager $oPluginManager
	 */
	public function __construct(CApiPluginManager $oPluginManager)
	{
		parent::__construct('1.0', $oPluginManager);

		$this->AddHook('api-integrator-login-to-account', 'PluginIntegratorLoginToAccount');
	}
	
	/**
	 * @param string $sEmail
	 * @param string $sPassword
	 * @param string $sLogin
	 * @param string $sLanguage
	 * @param bool $bAuthResult
	 */
	public function PluginIntegratorLoginToAccount(&$sEmail, &$sPassword, &$sLogin, &$sLanguage, &$bAuthResult)
	{
		if (empty($sLogin))
		{
			$sLogin = str_replace('@', '.', $sEmail);
		}
		else
		{
			$sLogin = str_replace('@', '.', $sLogin);
		}
	}
}

return new CChangeLoginDetailsPlugin($this);
