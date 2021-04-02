<?php

    namespace App\Entities;

    use \CodeIgniter\Entity;
    use CodeIgniter\I18n\Time;

    class UserEntity extends Entity
    {
        protected $group_id;
        protected $firstname;
        protected $lastname;
        protected $email;
        protected $password;
        protected $verify_key;
        protected $verify_code;
        protected $bio;
        protected $status;

        protected $dates = ['created_at', 'updated_at', 'deleted_at'];

        public function getGroupID()
        {
            return $this->attributes['group_id'];
        }

        public function getFirstname()
        {
            return $this->attributes['firstname'];
        }

        public function getLastname()
        {
            return $this->attributes['lastname'];
        }

        public function getFullName()
        {
            return $this->attributes['firstname'] . ' ' . $this->attributes['lastname'];
        }

        public function getEmail()
        {
            return $this->attributes['email'];
        }

        public function getVerifyKey()
        {
            return $this->attributes['verify_key'];
        }

        public function getVerifyCode()
        {
            return $this->attributes['verify_code'];
        }

        public function getBio()
        {
            return $this->attributes['bio'];
        }

        public function getStatus()
        {
            return $this->attributes['status'];
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

        public function getVerifyToken()
        {
            return base64_encode($this->attributes['id'] . '.' . $this->attributes['verify_key']);
        }

        public function getPasswordVerify(string $password)
        {
            if (password_verify($password, $this->attributes['password']))
            {
                return true;
            }

            return false;
        }

        public function setID(int $id)
        {
            $this->attributes['id'] = $id;
        }

        public function setGroupID(int $group_id)
        {
            $this->attributes['group_id'] = $group_id;
        }

        public function setFirstname(string $firstname)
        {
            $this->attributes['firstname'] = $firstname;
        }

        public function setLastname(string $lastname)
        {
            $this->attributes['lastname'] = $lastname;
        }

        public function setEmail(string $email)
        {
            $this->attributes['email'] = $email;
        }

        public function setVerifyKey()
        {
            helper('text');
            $this->attributes['verify_key'] = random_string('alpha', 64);
        }

        public function setVerifyCode()
        {
            helper('text');
            $this->attributes['verify_code'] = random_int(100000, 999999);
        }

        public function setBio(string $bio)
        {
            $this->attributes['bio'] = $bio;
        }

        public function setStatus($status = STATUS_PENDING)
        {
            $this->attributes['status'] = $status;
        }

        public function setDeletedAt()
        {
            $this->attributes['deleted_at'] = date('Y-m-d H:i:s');
        }

        public function setPassword(string $password)
        {
            $this->attributes['password'] = password_hash($password, PASSWORD_DEFAULT);
        }
    }
