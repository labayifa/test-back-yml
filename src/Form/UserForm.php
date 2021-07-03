<?php
/**
 * Created by PhpStorm.
 * User: sagbo
 * Date: 6/30/21
 * Time: 4:08 PM
 */

namespace App\Form;


class UserForm
{
    private $name;
    private $password;
    private $role;
    private $orgId;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * @param mixed $orgId
     */
    public function setOrgId($orgId): void
    {
        $this->orgId = $orgId;
    }
}