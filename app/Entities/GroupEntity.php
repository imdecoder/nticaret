<?php

    namespace App\Entities;

    use \CodeIgniter\Entity;

    class GroupEntity extends Entity
    {
        protected $slug;
        protected $title;
        protected $permissions;

        protected $dates = ['created_at', 'updated_at', 'deleted_at'];

        public function getSlug()
        {
            return $this->attributes['slug'];
        }

        public function getTitle()
        {
            $locale = service('request')->getLocale();
            $title = json_decode($this->attributes['title']);

            return $title->$locale;
        }

        public function getTitleLang(string $lang)
        {
            $title = json_decode($this->attributes['title']);
            return $title->$lang;
        }

        public function getPermit()
        {
            return json_decode($this->attributes['permissions']);
        }

        public function setSlug(string $slug)
        {
            $this->attributes['slug'] = $slug;
        }

        public function setTitle(array $title)
        {
            $this->attributes['title'] = json_encode($title);
        }

        public function setPermit(array $permissions)
        {
            $this->attributes['permissions'] = json_encode($permissions);
        }
    }
