<?php
/**
 * Created by PhpStorm.
 * User: sagbo
 * Date: 6/30/21
 * Time: 4:07 PM
 */

namespace App\Form;


class OrganizationForm
{
    private $name;
    private $description;

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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }
}