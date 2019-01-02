<?php
/**
 * Created by PhpStorm.
 * User: rolf
 * Date: 1/2/19
 * Time: 1:11 AM
 */

namespace Rolfisub\BasicCart\Entity;


class Address extends Model
{
    private $address_1;
    private $address_2;
    private $city;
    private $state;
    private $zip;

    public function getModel(): array
    {
        return [
            "address_1" => $this->getAddress1(),
            "address_2" => $this->getAddress2(),
            "city" => $this->getCity(),
            "state" => $this->getState(),
            "zip" => $this->getZip()
        ];
    }

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->address_1;
    }

    /**
     * @param mixed $address_1
     */
    public function setAddress1($address_1): void
    {
        $this->address_1 = $address_1;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->address_2;
    }

    /**
     * @param $address_2
     * @return $this
     */
    public function setAddress2($address_2)
    {
        $this->address_2 = $address_2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param $zip
     * @return $this
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }


}