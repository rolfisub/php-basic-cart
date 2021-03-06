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
    /**
     * @var string
     */
    private $address_1;
    /**
     * @var string
     */
    private $address_2;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $state;
    /**
     * @var string
     */
    private $zip;
    /**
     * @var string
     */
    private $country;

    /**
     * Address constructor.
     * @param string $address_1
     * @param string $address_2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $country
     */
    public function __construct(
        string $address_1 = null,
        string $address_2 = null,
        string $city = null,
        string $state = null,
        string $zip = null,
        string $country = null
    )
    {
        $this->address_1 = $address_1;
        $this->address_2 = $address_2;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->country = $country;
    }


    /**
     * @return array
     */
    public function getModel(): array
    {
        return [
            "id" => $this->getId(),
            "address_1" => $this->getAddress1(),
            "address_2" => $this->getAddress2(),
            "city" => $this->getCity(),
            "state" => $this->getState(),
            "zip" => $this->getZip(),
            "country" => $this->getCountry()
        ];
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country !== null ? $this->country : $this->setCountry("")->getCountry();
    }

    /**
     * @param $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->address_1 !== null ? $this->address_1 : $this->setAddress1("")->getAddress1();
    }

    /**
     * @param $address_1
     * @return $this
     */
    public function setAddress1($address_1)
    {
        $this->address_1 = $address_1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->address_2 !== null ? $this->address_2 : $this->setAddress2("")->getAddress2();
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
        return $this->city !== null ? $this->city : $this->setCity("")->getCity();
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
        return $this->state !== null ? $this->state : $this->setState("")->getState();
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
        return $this->zip !== null ? $this->zip : $this->setZip("")->getZip();
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