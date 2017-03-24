<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * stuff_me_user
 *
 * @ORM\Table(name="stuff_me_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\stuff_me_userRepository")
 */
class stuff_me_user extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @var string
    *
    * @ORM\Column(name="nationalite", type="string", length=255)
     */
    private $nationalite;

    /**
     * @var int
     *
     * @ORM\Column(name="win", type="bigint")
     */
    private $win;

    /**
     * @var int
     *
     * @ORM\Column(name="loose", type="bigint")
     */
    private $loose;

    /**
     * @var int
     *
     * @ORM\Column(name="totale_score", type="bigint")
     */
    private $totale_score;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return stuff_me_user
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set win
     *
     * @param integer $win
     *
     * @return stuff_me_user
     */
    public function setWin($win)
    {
        $this->win = $win;

        return $this;
    }

    /**
     * Get win
     *
     * @return integer
     */
    public function getWin()
    {
        return $this->win;
    }

    /**
     * Set loose
     *
     * @param integer $loose
     *
     * @return stuff_me_user
     */
    public function setLoose($loose)
    {
        $this->loose = $loose;

        return $this;
    }

    /**
     * Get loose
     *
     * @return integer
     */
    public function getLoose()
    {
        return $this->loose;
    }

    /**
     * Set totaleScore
     *
     * @param integer $totaleScore
     *
     * @return stuff_me_user
     */
    public function setTotaleScore($totaleScore)
    {
        $this->totale_score = $totaleScore;

        return $this;
    }

    /**
     * Get totaleScore
     *
     * @return integer
     */
    public function getTotaleScore()
    {
        return $this->totale_score;
    }
}
