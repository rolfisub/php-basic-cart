<?php
/**
 * Created by PhpStorm.
 * User: rolf
 * Date: 1/2/19
 * Time: 1:08 AM
 */

namespace Rolfisub\BasicCart\Entity;


class Customer extends Model
{
    private $first_name;
    private $last_name;
    private $address;

    /**
     * @return array
     */
    public function getModel(): array
    {
        return [
            "id" => $this->getId(),
            "first_name" => $this->getFirstName(),
            "last_name" => $this->getLastName(),
            "address" => $this->getAddress()->getModel()
        ];
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name !== null ? $this->first_name : $this->setFirstName("")->getFirstName();
    }

    /**
     * @param $first_name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name !== null ? $this->last_name : $this->setLastName("")->getLastName();
    }

    /**
     * @param $last_name
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress(): Address
    {
        return $this->address ? $this->address : $this->setAddress(new Address())->getAddress();
    }

    /**
     * @param $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
        return $this;
    }

}