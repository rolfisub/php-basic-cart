<?php
/**
 * Created by PhpStorm.
 * User: rolf
 * Date: 1/2/19
 * Time: 1:02 AM
 */

namespace Rolfisub\BasicCart\Entity;


class Item extends Model
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var integer
     */
    private $quantity;
    /**
     * @var float
     */
    private $price;

    /**
     * Item constructor.
     * @param string $name
     * @param int $quantity
     * @param float $price
     */
    public function __construct(
        string $name = null,
        int $quantity = null,
        float $price = null
    )
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }


    /**
     * @return array
     */
    public function getModel(): array
    {
        return [
            "id" => $this->getId(),
            "name" => $this->getName(),
            "quantity" => $this->getQuantity(),
            "price" => $this->getPrice()
        ];
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name !== null ? $this->name : $this->setName("")->getName();
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity !== null ? $this->quantity : $this->setQuantity(0)->getQuantity();
    }

    /**
     * @param $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;

    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price !== null ? $this->price : $this->setPrice(0)->getPrice();
    }

    /**
     * @param $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }


}