<?php

namespace Login\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Occupy
 */
class Occupy
{
    /**
     * @var string
     */
    private $hallname;

    /**
     * @var float
     */
    private $roomno;

    /**
     * @var \DateTime
     */
    private $year;

    /**
     * @var string
     */
    private $studentno;


    /**
     * Set hallname
     *
     * @param string $hallname
     * @return Occupy
     */
    public function setHallname($hallname)
    {
        $this->hallname = $hallname;
    
        return $this;
    }

    /**
     * Get hallname
     *
     * @return string 
     */
    public function getHallname()
    {
        return $this->hallname;
    }

    /**
     * Set roomno
     *
     * @param float $roomno
     * @return Occupy
     */
    public function setRoomno($roomno)
    {
        $this->roomno = $roomno;
    
        return $this;
    }

    /**
     * Get roomno
     *
     * @return float 
     */
    public function getRoomno()
    {
        return $this->roomno;
    }

    /**
     * Set year
     *
     * @param \DateTime $year
     * @return Occupy
     */
    public function setYear($year)
    {
        $this->year = $year;
    
        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set studentno
     *
     * @param string $studentno
     * @return Occupy
     */
    public function setStudentno($studentno)
    {
        $this->studentno = $studentno;
    
        return $this;
    }

    /**
     * Get studentno
     *
     * @return string 
     */
    public function getStudentno()
    {
        return $this->studentno;
    }
}
