<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/* Start - I have commented This Part - Savita */

// use CodeIgniter\Filters\CSRF;
// use CodeIgniter\Filters\DebugToolbar;
// use CodeIgniter\Filters\Honeypot;
// use CodeIgniter\App\Filters\Auth;

/* End - I have commented This Part - Savita */

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		'auth'     => \App\Filters\Auth::class,
		'noauth'     => \App\Filters\Noauth::class,
		'employeescheck' => \App\Filters\EmployeesCheck::class,

		
		//'auth' => Auth::class,

		//'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		//'auth' => \App\Filters\Auth::class,
		
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	public $globals = [
		'before' => [
			// 'honeypot',
			// 'csrf',
			'employeescheck',
		],
		'after'  => [
			'toolbar',
			// 'honeypot',
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
	public $filters = [];
}
