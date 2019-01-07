<?php
/**
 * Created by PhpStorm.
 * User: rolf
 * Date: 1/2/19
 * Time: 1:03 AM
 */

namespace Rolfisub\BasicCart\Entity;


abstract class Model
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id !== null ? $this->id : $this->setId(0)->getId();
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return array
     */
    abstract public function getModel(): array;
}