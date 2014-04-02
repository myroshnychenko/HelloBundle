<?php
/**
 * Created by PhpStorm.
 * User: d.myroshnychenko
 * Date: 27.03.14
 * Time: 13:14
 */

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Acme\HelloBundle\Repository\ProductRepository")
 * @ORM\Table(name="product")
 */
class Product {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     */
    protected $name;
    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    protected $price;
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    protected $description;

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
     * Set description
     *
     * @param string $description
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
}
