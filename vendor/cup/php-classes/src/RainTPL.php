<?php

	use Rain\Tpl;

	class RainTPL extends Tpl
	{

		private $config;
		
		function __construct()
		{
			$config = array(
				'tpl_dir' => 'view/',
				'cache_dir' => 'view-cache/'
			);

			Tpl::configure( $config );
		}

		public function relate($var = array())
		{
			foreach ($var as $var => $value) {
				$this->assign( $var, $value);
			}
		}

		public function drawPage( $pages = array(), $var = array())
		{
			$this->relate($var);

			foreach ($pages as $value) {
				$this->draw($value);
			}
		}
	}