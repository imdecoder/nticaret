<?php

	namespace App\Controllers;

	use App\Models\LanguageModel;

	class Home extends BaseController
	{
		public function index()
		{
			$lang = new LanguageModel();

			$get = $lang->findAll();

			foreach ($get as $key => $value)
			{
				echo $value->getCreatedAt(true);
				echo '<br>';
			}
		}
	}
