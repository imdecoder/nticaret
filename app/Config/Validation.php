<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $register = [
		'firstname' => [
			'rules' => 'required|string|min_length[3]',
			'errors' => [
				'required' => 'Register.controller.validation.firstname.required',
				'string' => 'Register.controller.validation.firstname.string',
				'min_length' => 'Register.controller.validation.firstname.min_length'
			]
		],
		'lastname' => [
			'rules' => 'required|string|min_length[3]',
			'errors' => [
				'required' => 'Register.controller.validation.lastname.required',
				'string' => 'Register.controller.validation.lastname.string',
				'min_length' => 'Register.controller.validation.lastname.min_length'
			]
		],
		'email' => [
			'rules' => 'required|valid_email',
			'errors' => [
				'required' => 'Register.controller.validation.email.required',
				'valid_email' => 'Register.controller.validation.email.valid_email'
			]
		],
		'password' => [
			'rules' => 'required|min_length[3]',
			'errors' => [
				'required' => 'Register.controller.validation.password.required',
				'min_length' => 'Register.controller.validation.password.min_length'
			]
		],
		'password2' => [
			'rules' => 'required|min_length[3]|matches[password]',
			'errors' => [
				'required' => 'Register.controller.validation.password2.required',
				'min_length' => 'Register.controller.validation.password2.min_length',
				'matches' => 'Register.controller.validation.password2.matches'
			]
		]
	];
}
