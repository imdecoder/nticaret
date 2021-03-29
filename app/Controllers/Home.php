<?php

	namespace App\Controllers;

	use App\Models\GroupModel;
	use App\Entities\GroupEntity;

	class Home extends BaseController
	{
		public function index()
		{
			$groupModel = new GroupModel();
			$groupEntity = new GroupEntity();

			/*$groupEntity->setSlug('test_slug');
			$groupEntity->setTitle([
				'tr' => 'Türkçe Başlık',
				'en' => 'English Title'
			]);

			$groupEntity->setPermit([
				'user_login',
				'user_listing'
			]);

			$groupModel->insert($groupEntity);*/

			$group = $groupModel->find(1);

			print_r($group->getTitleLang('en'));
		}
	}
