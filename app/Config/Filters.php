<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

use App\Filters\IsLoggedIn;
use App\Filters\IsPermission;
use App\Filters\ReCaptcha;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		'IsLoggedIn' => IsLoggedIn::class,
		'IsPermission' => IsPermission::class,
		'ReCaptcha' => ReCaptcha::class
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	public $globals = [
		'before' => [
			'honeypot' => [
				'except' => [
					'*/admin/*'
				]
			],
			'csrf'
		],
		'after'  => [
			'toolbar',
			'honeypot' => [
				'except' => [
					'*/admin/*'
				]
			]
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	public $filters = [
		'IsLoggedIn' => [
			'before' => [
				'*/admin/*'
			]
		],
		'IsPermission' => [
			'before' => [
				'*/admin/*'
			]
		],
		'ReCaptcha' => [
			'before' => [
				'*/admin/login',
				'*/admin/register',
				'*/admin/forgot-password'
			]
		]
	];
}
