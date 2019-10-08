<?php

namespace EcommerceBundle\Entity;

/**
 * Shipping
 */
class Shipping
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $sendDate;

    /**
     * @var \DateTime
     */
    private $delivereddate;

    /**
     * @var string
     */
    private $address;

    /**
     * @var \EcommerceBundle\Entity\Order
     */
    private $idorder;


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
     * Set reference
     *
     * @param string $reference
     *
     * @return Shipping
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Shipping
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set sendDate
     *
     * @param \DateTime $sendDate
     *
     * @return Shipping
     */
    public function setSendDate($sendDate)
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    /**
     * Get sendDate
     *
     * @return \DateTime
     */
    public function getSendDate()
    {
        return $this->sendDate;
    }

    /**
     * Set delivereddate
     *
     * @param \DateTime $delivereddate
     *
     * @return Shipping
     */
    public function setDelivereddate($delivereddate)
    {
        $this->delivereddate = $delivereddate;

        return $this;
    }

    /**
     * Get delivereddate
     *
     * @return \DateTime
     */
    public function getDelivereddate()
    {
        return $this->delivereddate;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Shipping
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set idorder
     *
     * @param \EcommerceBundle\Entity\Order $idorder
     *
     * @return Shipping
     */
    public function setIdorder(\EcommerceBundle\Entity\Order $idorder = null)
    {
        $this->idorder = $idorder;

        return $this;
    }

    /**
     * Get idorder
     *
     * @return \EcommerceBundle\Entity\Order
     */
    public function getIdorder()
    {
        return $this->idorder;
    }
}

