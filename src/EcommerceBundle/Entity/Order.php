<?php

namespace EcommerceBundle\Entity;

/**
 * Order
 */
class Order
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $price;

    /**
     * @var \EcommerceBundle\Entity\User
     */
    private $iduser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idproduct;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idproduct = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Order
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Order
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
     * Set iduser
     *
     * @param \EcommerceBundle\Entity\User $iduser
     *
     * @return Order
     */
    public function setIduser(\EcommerceBundle\Entity\User $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \EcommerceBundle\Entity\User
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Add idproduct
     *
     * @param \EcommerceBundle\Entity\Product $idproduct
     *
     * @return Order
     */
    public function addIdproduct(\EcommerceBundle\Entity\Product $idproduct)
    {
        $this->idproduct[] = $idproduct;

        return $this;
    }

    /**
     * Remove idproduct
     *
     * @param \EcommerceBundle\Entity\Product $idproduct
     */
    public function removeIdproduct(\EcommerceBundle\Entity\Product $idproduct)
    {
        $this->idproduct->removeElement($idproduct);
    }

    /**
     * Get idproduct
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }
}

