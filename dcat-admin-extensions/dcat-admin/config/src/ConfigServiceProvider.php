<?php

namespace Dcat\Admin\Config;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class ConfigServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//
		
	}
	// 注册菜单
	protected $menu = [
		[
			'title' => 'Operation Log',
			'uri'   => '',
			'icon'  => 'feather icon-x', 
		],
		[
			'parent' => 'Operation Log', // 指定父级菜单
			'title'  => 'List',
			'uri'    => 'configs',
		],
	];
  

	public function settingForm()
	{
		return new Setting($this);
	}
}
