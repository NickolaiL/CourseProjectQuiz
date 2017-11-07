<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quiz
 *
 * @ORM\Table(name="quiz")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuizRepository")
 */
class Quiz
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="firstQuestionID", type="integer")
     */
    private $firstQuestionID;

    /**
     * @var int
     *
     * @ORM\Column(name="secondQuestionID", type="integer")
     */
    private $secondQuestionID;

    /**
     * @var int
     *
     * @ORM\Column(name="thirdQuestionID", type="integer")
     */
    private $thirdQuestionID;

    /**
     * @var int
     *
     * @ORM\Column(name="fourthQuestionID", type="integer")
     */
    private $fourthQuestionID;

    /**
     * @var int
     *
     * @ORM\Column(name="fifthQuestionID", type="integer")
     */
    private $fifthQuestionID;

    /**
     * @var int
     *
     * @ORM\Column(name="sixthQuestionID", type="integer")
     */
    private $sixthQuestionID;

    /**
     * @var int
     *
     * @ORM\Column(name="seventhQuestionID", type="integer")
     */
    private $seventhQuestionID;

    /**
     * @var int
     *
     * @ORM\Column(name="eighthQuestionID", type="integer")
     */
    private $eighthQuestionID;

    /**
     * @var int
     *
     * @ORM\Column(name="ninthQuestionID", type="integer")
     */
    private $ninthQuestionID;

    /**
     * @var int
     *
     * @ORM\Column(name="tenthQuestionID", type="integer")
     */
    private $tenthQuestionID;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;


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
     * Set title
     *
     * @param string $title
     *
     * @return Quiz
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set firstQuestionID
     *
     * @param integer $firstQuestionID
     *
     * @return Quiz
     */
    public function setFirstQuestionID($firstQuestionID)
    {
        $this->firstQuestionID = $firstQuestionID;

        return $this;
    }

    /**
     * Get firstQuestionID
     *
     * @return int
     */
    public function getFirstQuestionID()
    {
        return $this->firstQuestionID;
    }

    /**
     * Set secondQuestionID
     *
     * @param integer $secondQuestionID
     *
     * @return Quiz
     */
    public function setSecondQuestionID($secondQuestionID)
    {
        $this->secondQuestionID = $secondQuestionID;

        return $this;
    }

    /**
     * Get secondQuestionID
     *
     * @return int
     */
    public function getSecondQuestionID()
    {
        return $this->secondQuestionID;
    }

    /**
     * Set thirdQuestionID
     *
     * @param integer $thirdQuestionID
     *
     * @return Quiz
     */
    public function setThirdQuestionID($thirdQuestionID)
    {
        $this->thirdQuestionID = $thirdQuestionID;

        return $this;
    }

    /**
     * Get thirdQuestionID
     *
     * @return int
     */
    public function getThirdQuestionID()
    {
        return $this->thirdQuestionID;
    }

    /**
     * Set fourthQuestionID
     *
     * @param integer $fourthQuestionID
     *
     * @return Quiz
     */
    public function setFourthQuestionID($fourthQuestionID)
    {
        $this->fourthQuestionID = $fourthQuestionID;

        return $this;
    }

    /**
     * Get fourthQuestionID
     *
     * @return int
     */
    public function getFourthQuestionID()
    {
        return $this->fourthQuestionID;
    }

    /**
     * Set fifthQuestionID
     *
     * @param integer $fifthQuestionID
     *
     * @return Quiz
     */
    public function setFifthQuestionID($fifthQuestionID)
    {
        $this->fifthQuestionID = $fifthQuestionID;

        return $this;
    }

    /**
     * Get fifthQuestionID
     *
     * @return int
     */
    public function getFifthQuestionID()
    {
        return $this->fifthQuestionID;
    }

    /**
     * Set sixthQuestionID
     *
     * @param integer $sixthQuestionID
     *
     * @return Quiz
     */
    public function setSixthQuestionID($sixthQuestionID)
    {
        $this->sixthQuestionID = $sixthQuestionID;

        return $this;
    }

    /**
     * Get sixthQuestionID
     *
     * @return int
     */
    public function getSixthQuestionID()
    {
        return $this->sixthQuestionID;
    }

    /**
     * Set seventhQuestionID
     *
     * @param integer $seventhQuestionID
     *
     * @return Quiz
     */
    public function setSeventhQuestionID($seventhQuestionID)
    {
        $this->seventhQuestionID = $seventhQuestionID;

        return $this;
    }

    /**
     * Get seventhQuestionID
     *
     * @return int
     */
    public function getSeventhQuestionID()
    {
        return $this->seventhQuestionID;
    }

    /**
     * Set eighthQuestionID
     *
     * @param integer $eighthQuestionID
     *
     * @return Quiz
     */
    public function setEighthQuestionID($eighthQuestionID)
    {
        $this->eighthQuestionID = $eighthQuestionID;

        return $this;
    }

    /**
     * Get eighthQuestionID
     *
     * @return int
     */
    public function getEighthQuestionID()
    {
        return $this->eighthQuestionID;
    }

    /**
     * Set ninthQuestionID
     *
     * @param integer $ninthQuestionID
     *
     * @return Quiz
     */
    public function setNinthQuestionID($ninthQuestionID)
    {
        $this->ninthQuestionID = $ninthQuestionID;

        return $this;
    }

    /**
     * Get ninthQuestionID
     *
     * @return int
     */
    public function getNinthQuestionID()
    {
        return $this->ninthQuestionID;
    }

    /**
     * Set tenthQuestionID
     *
     * @param integer $tenthQuestionID
     *
     * @return Quiz
     */
    public function setTenthQuestionID($tenthQuestionID)
    {
        $this->tenthQuestionID = $tenthQuestionID;

        return $this;
    }

    /**
     * Get tenthQuestionID
     *
     * @return int
     */
    public function getTenthQuestionID()
    {
        return $this->tenthQuestionID;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Quiz
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
}

