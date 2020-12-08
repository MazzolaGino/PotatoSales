<?php
namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validator as CustomAssert;

class User
{
     /**
     * @CustomAssert\Username
     */
    protected $username;
    /**
     * @CustomAssert\Password
     */
    protected $password;
    protected $email;
    protected $fullname;

    function getUsername() {
        return $this->username;
    }
    
    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function getFullname() {
        return $this->fullname;
    }

    function setUsername($username): void {
        $this->username = $username;
    }

    function setPassword($password): void {
        $this->password = $password;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setFullname($fullname): void {
        $this->fullname = $fullname;
    }


}