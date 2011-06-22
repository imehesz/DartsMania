<?php
	class Dartsmania extends CWidget
	{
		private $_asset_url;

		public function init()
		{
			$cs = Yii::app()->getClientScript();
			$cs->registerCoreScript('jquery');
			$folder = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
			$pub = Yii::app()->getAssetManager()->publish( $folder,false,-1,YII_DEBUG );
			$this->_asset_url = $pub;
			$cs->registerScriptFile($pub);
		    $cs->registerScriptFile( $this->_asset_url . '/dartsmania.js' );
	  		$cs->registerCssFile($this->_asset_url.'/dartsmania.css');
		}

		public function run()
		{
			$this->render( 'board' );
		}
	}
