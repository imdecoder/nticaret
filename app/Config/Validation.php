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
				'required' => 'Validation.text.firstname_required',
				'string' => 'Validation.text.firstname_string',
				'min_length' => 'Validation.text.firstname_min_length'
			]
		],
		'lastname' => [
			'rules' => 'required|string|min_length[3]',
			'errors' => [
				'required' => 'Validation.text.lastname_required',
				'string' => 'Validation.text.lastname_string',
				'min_length' => 'Validation.text.lastname_min_length'
			]
		],
		'email' => [
			'rules' => 'required|valid_email',
			'errors' => [
				'required' => 'Validation.text.email_required',
				'valid_email' => 'Validation.text.email_valid_email'
			]
		],
		'password' => [
			'rules' => 'required|min_length[3]',
			'errors' => [
				'required' => 'Validation.text.password_required',
				'min_length' => 'Validation.text.password_min_length'
			]
		],
		'password2' => [
			'rules' => 'required|min_length[3]|matches[password]',
			'errors' => [
				'required' => 'Validation.text.password2_required',
				'min_length' => 'Validation.text.password2_min_length',
				'matches' => 'Validation.text.password2_matches'
			]
		]
	];

	public $forgot = [
		'email' => [
			'rules' => 'required|valid_email',
			'errors' => [
				'required' => 'Validation.text.email_required',
				'valid_email' => 'Validation.text.email_valid_email'
			]
		]
	];

	public $resetPassword = [
		'password' => [
			'rules' => 'required|min_length[3]',
			'errors' => [
				'required' => 'Validation.text.password_required',
				'min_length' => 'Validation.text.password_min_length'
			]
		],
		'password2' => [
			'rules' => 'required|min_length[3]|matches[password]',
			'errors' => [
				'required' => 'Validation.text.password2_required',
				'min_length' => 'Validation.text.password2_min_length',
				'matches' => 'Validation.text.password2_matches'
			]
		]
	];
}
