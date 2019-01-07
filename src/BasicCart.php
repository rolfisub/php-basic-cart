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

    /**
     * BasicCart constructor.
     * @param Order $order
     */
    public function __construct(
        Order $order = null
    )
    {
        $this->order = $order;
    }


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
        return $this->order ? $this->order : $this->setOrder(new Order())->getOrder();
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