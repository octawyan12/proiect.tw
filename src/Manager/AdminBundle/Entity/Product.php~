<?php

namespace Manager\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $price;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var \DateTime
     */
    private $expiration_date;

    /**
     * @var \DateTime
     */
    private $production_date;

    /**
     * @var \Manager\AdminBundle\Entity\Category
     */
    private $category;


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
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Product
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set price
     *
     * @param string $price
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
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Product
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
     * Set expiration_date
     *
     * @param \DateTime $expirationDate
     * @return Product
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expiration_date = $expirationDate;

        return $this;
    }

    /**
     * Get expiration_date
     *
     * @return \DateTime 
     */
    public function getExpirationDate()
    {
        return $this->expiration_date;
    }

    /**
     * Set production_date
     *
     * @param \DateTime $productionDate
     * @return Product
     */
    public function setProductionDate($productionDate)
    {
        $this->production_date = $productionDate;

        return $this;
    }

    /**
     * Get production_date
     *
     * @return \DateTime 
     */
    public function getProductionDate()
    {
        return $this->production_date;
    }

    /**
     * Set category
     *
     * @param \Manager\AdminBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\Manager\AdminBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Manager\AdminBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
