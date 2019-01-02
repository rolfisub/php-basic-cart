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
    private $name;
    private $quantity;
    private $price;

    /**
     * @return array
     */
    public function getModel(): array
    {
       return [
           "id"=> $this->getId(),
           "name"=> $this->getName(),
           "quantity"=> $this->getQuantity(),
           "price"=> $this->getPrice()
       ];
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
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
        return $this->quantity;
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
        return $this->price;
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