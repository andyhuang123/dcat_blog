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
			'title' => 'website',
			'uri'   => '',
			'icon'  => 'fa-gears', 
		],
		[
			'parent' => 'website', // 指定父级菜单
			'title'  => '网站配置',
			'uri'    => 'configs',
		],
	];
  
    // 返回配置表单对象，如果不需要保存配置参数，则请删除这个方法  
	// public function settingForm()
	// {
	// 	return new Setting($this);
	// }
}
