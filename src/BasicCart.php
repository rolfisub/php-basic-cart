<?php

namespace Rolfisub\BasicCart;


use Rolfisub\BasicCart\Entity\Model;
use Rolfisub\BasicCart\Entity\Order;

class BasicCart extends Model
{
    /**
     * @var Order
     */
    private $order;

    public function getModel(): array
    {
        return [
            "id" => $this->getId(),
            "order" => $this->getOrder()->getModel()
        ];
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Order $order
     * @return $this
     */
    public function setOrder(Order $order)
    {
        $this->order = $order;
        return $this;
    }


}