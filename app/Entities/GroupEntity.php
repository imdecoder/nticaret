<?php

    namespace App\Entities;

    use \CodeIgniter\Entity;
    use CodeIgniter\I18n\Time;

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

        public function getTitle(string $lang = null)
        {
            $locale = !is_null($lang) ? $lang : service('request')->getLocale();
            $title = json_decode($this->attributes['title']);

            return $title->$locale;
        }

        public function getPermit()
        {
            return json_decode($this->attributes['permissions']);
        }

        public function getCreatedAt($humanize = false)
        {
            if ($humanize)
            {
                $date = Time::parse($this->attributes['created_at']);
                return $date->humanize();
            }

            return $this->attributes['created_at'];
        }

        public function getUpdatedAt($humanize = false)
        {
            if ($humanize)
            {
                $date = Time::parse($this->attributes['updated_at']);
                return $date->humanize();
            }

            return $this->attributes['updated_at'];
        }

        public function getDeletedAt($humanize = false)
        {
            if ($humanize)
            {
                $date = Time::parse($this->attributes['deleted_at']);
                return $date->humanize();
            }

            return $this->attributes['deleted_at'];
        }

        public function setSlug($title)
        {
            $defaultLang = config('app')->defaultLocale;

            if (is_array($title))
            {
                $slug = permalink($title[$defaultLang]);
            }
            else
            {
                $slug = permalink($title);
            }

            $this->attributes['slug'] = $slug;
        }

        public function setTitle(array $title)
        {
            $this->attributes['title'] = json_encode($title, JSON_UNESCAPED_UNICODE);
        }

        public function setPermit(array $permissions)
        {
            $this->attributes['permissions'] = json_encode($permissions, JSON_UNESCAPED_UNICODE);
        }

        public function haveLoginPermit()
        {
            if ($this->attributes['slug'] == DEFAULT_ADMIN_GROUP)
            {
                return true;
            }

            $permit = json_decode($this->attributes['permissions']);

            if (in_array(LOGIN_PERMIT_KEY, $permit))
            {
                return true;
            }

            return false;
        }

        public function permitControl(string $permit)
        {
            if ($this->attributes['slug'] == DEFAULT_ADMIN_GROUP)
            {
                return true;
            }

            $userPermissionList = json_decode($this->attributes['permissions']);

            if (in_array($permit, $userPermissionList))
            {
                return true;
            }

            return false;
        }
    }
