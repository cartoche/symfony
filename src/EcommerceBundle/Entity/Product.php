<?php

namespace EcommerceBundle\Entity;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $price;

    /**
     * @var integer
     */
    private $stock;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idorder;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idorder = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Add idorder
     *
     * @param \EcommerceBundle\Entity\Order $idorder
     *
     * @return Product
     */
    public function addIdorder(\EcommerceBundle\Entity\Order $idorder)
    {
        $this->idorder[] = $idorder;

        return $this;
    }

    /**
     * Remove idorder
     *
     * @param \EcommerceBundle\Entity\Order $idorder
     */
    public function removeIdorder(\EcommerceBundle\Entity\Order $idorder)
    {
        $this->idorder->removeElement($idorder);
    }

    /**
     * Get idorder
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdorder()
    {
        return $this->idorder;
    }
}

