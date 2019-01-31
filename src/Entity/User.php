<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("clients")
 */
class User
{
     /**
     * @ORM\Column(type="text")
     * @ORM\Id
     */
    private $guid;

     /**
     * @ORM\Column(type="text")
     */
    private $first;

     /**
     * @ORM\Column(type="text")
     */
    private $last;

   /**
     * @ORM\Column(type="text")
     */
    private $street;

     /**
     * @ORM\Column(type="text")
     */
    private $city;

     /**
     * @ORM\Column(type="integer")
     */
    private $zip;



    public function getGuid()
    {
        return $this->guid;
    }

    public function getfirst()
    {
        return $this->first;
    }

    public function setfirst($first)
    {
        $this->first = $first;

        return $this;
    }

    public function getlast()
    {
        return $this->last;
    }

    public function setlast($last)
    {
        $this->last = $last;

        return $this;
    }

    /**
     * Get the value of street
     */ 
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of zip
     */ 
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set the value of zip
     *
     * @return  self
     */ 
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Set the value of guid
     *
     * @return  self
     */ 
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }
}