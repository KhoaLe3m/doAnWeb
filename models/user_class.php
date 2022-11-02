<?php

class User
{
    private $user_id;
    private $user_phone;
    private $user_password;
    private $user_name;
    private $user_address;

    public function __construct($user_id, $user_phone, $user_password, $user_name, $user_address)
    {
        $this->user_id = $user_id;
        $this->user_phone = $user_phone;
        $this->user_password = $user_password;
        $this->user_name = $user_name;
        $this->user_address = $user_address;
    }

    public function getUserId($user_id)
    {
        return $this->user_id;
    }
    public function getUserPhone($user_phone)
    {
        return $this->user_phone;
    }
    public function getUserPassword($user_password)
    {
        return $this->user_password;
    }
    public function getUserName($user_name)
    {
        return $this->user_name;
    }
    public function getUserAddress($user_address)
    {
        return $this->user_address;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
    public function setUserPhone($user_phone)
    {
        $this->user_phone = $user_phone;
    }
    public function setUserPassword($user_password)
    {
        $this->user_password = $user_password;
    }
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }
    public function setUserAddress($user_address)
    {
        $this->user_address = $user_address;
    }
}
