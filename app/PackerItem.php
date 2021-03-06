<?php
/**
 * Box packing (3D bin packing, knapsack problem).
 *
 * @author Doug Wright
 */

namespace App;

use DVDoug\BoxPacker\Item;

class PackerItem implements Item
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $length;

    /**
     * @var int
     */
    public $depth;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var int
     */
    public $keepFlat;

    /**
     * @var int
     */
    public $volume;

    /**
     * TestItem constructor.
     *
     * @param id $id
     * @param string $description
     * @param int    $width
     * @param int    $length
     * @param int    $depth
     * @param int    $weight
     * @param bool   $keepFlat
     */
    public function __construct(
        $id,
        $description,
        $width,
        $length,
        $depth,
        $weight,
        $keepFlat)
    {
        $this->id = $id;
        $this->description = $description;
        $this->width = $width;
        $this->length = $length;
        $this->depth = $depth;
        $this->weight = $weight;
        $this->keepFlat = $keepFlat;

        $this->volume = $this->width * $this->length * $this->depth;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @return bool
     */
    public function getKeepFlat()
    {
        return $this->keepFlat;
    }

    public function __toString()
    {
        return [
          "item_id"=>$this->id,
          "description"=>$this->description,
          "width"=>$this->width,
          "length"=>$this->length,
          "depth"=>$this->depth,
          "weight"=>$this->weight,
          "keepFlat"=>$this->keepFlat
        ];
    }
}
