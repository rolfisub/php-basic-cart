<?php
/**
 * Created by PhpStorm.
 * User: rolf
 * Date: 1/5/19
 * Time: 9:32 PM
 */

namespace Rolfisub\BasicCart\Entity;


class Order extends Model
{
    /**
     * @var Customer
     */
    private $customer;
    /**
     * @var array Item
     */
    private $items = [];
    /**
     * @var Address
     */
    private $shippingAddress;
    /**
     * @var Address
     */
    private $billingAddress;
    /**
     * @var double
     */
    private $tax;
    /**
     * @var double
     */
    private $subTotal;
    /**
     * @var double
     */
    private $total;

    /**
     * @return array
     */
    public function getModel(): array
    {
        return [
            "id" => $this->getId(),
            "customer" => $this->getCustomer()->getModel(),
            "items" => $this->items,
            "shippingAddress" => $this->getShippingAddress()->getModel(),
            "billingAddress" => $this->getBillingAddress()->getModel(),
            "tax" => $this->getTax(),
            "subTotal" => $this->getSubTotal(),
            "total" => $this->getTotal()
        ];
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     * @return $this
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return $this
     */
    public function setItems(array $items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @param Item $i
     * @return $this
     */
    public function addItem(Item $i)
    {
        array_push($this->items, $i);
        return $this;
    }

    /**
     * @return Address
     */
    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
    }

    /**
     * @param Address $shippingAddress
     * @return $this
     */
    public function setShippingAddress(Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getBillingAddress(): Address
    {
        return $this->billingAddress;
    }

    /**
     * @param Address $billingAddress
     * @return $this
     */
    public function setBillingAddress(Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     * @return $this
     */
    public function setTax(float $tax)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubTotal(): float
    {
        return $this->subTotal;
    }

    /**
     * @param float $subTotal
     * @return $this
     */
    public function setSubTotal(float $subTotal)
    {
        $this->subTotal = $subTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $total
     * @return $this
     */
    public function setTotal(float $total)
    {
        $this->total = $total;
        return $this;
    }


}