<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class TrackerLine
{
    /** @ORM\Id
     *  @ORM\Column(type="integer")
     *  @ORM\GeneratedValue
     */
    private $id;

    /** @ORM\Column(type="string") **/
    private $username;

    /** @ORM\Column(type="date") **/
    private $day;

    /** @ORM\Column(type="float") **/
    private $strecke;

    /** @ORM\Column(type="float") **/
    private $zeit;




    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @param mixed $strecke
     */
    public function setStrecke($strecke)
    {
        $this->strecke = $strecke;
    }

    /**
     * @param mixed $zeit
     */
    public function setZeit($zeit)
    {
        $this->zeit = $zeit;
    }





    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day->format('d.m.Y');
    }

    /**
     * @return mixed
     */
    public function getStrecke()
    {
        return $this->strecke;
    }

    /**
     * @return mixed
     */
    public function getZeit()
    {
        return $this->zeit / 60 ;
    }

    /**
     * @return float|int
     */
    public function getSpeed()
    {
        return ($this->strecke)/($this->zeit / 3600);
    }


}