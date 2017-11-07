<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuestionRepository")
 */
class Question
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
     * @ORM\Column(name="Question", type="string", length=255)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="firstAnswer", type="string", length=255)
     */
    private $firstAnswer;

    /**
     * @var string
     *
     * @ORM\Column(name="secondAnswer", type="string", length=255)
     */
    private $secondAnswer;

    /**
     * @var string
     *
     * @ORM\Column(name="thirdAnswer", type="string", length=255)
     */
    private $thirdAnswer;

    /**
     * @var string
     *
     * @ORM\Column(name="fourthAnswer", type="string", length=255)
     */
    private $fourthAnswer;

    /**
     * @var string
     *
     * @ORM\Column(name="correctAnswerNumber", type="string", length=255)
     */
    private $correctAnswerNumber;


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
     * Set question
     *
     * @param string $question
     *
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set firstAnswer
     *
     * @param string $firstAnswer
     *
     * @return Question
     */
    public function setFirstAnswer($firstAnswer)
    {
        $this->firstAnswer = $firstAnswer;

        return $this;
    }

    /**
     * Get firstAnswer
     *
     * @return string
     */
    public function getFirstAnswer()
    {
        return $this->firstAnswer;
    }

    /**
     * Set secondAnswer
     *
     * @param string $secondAnswer
     *
     * @return Question
     */
    public function setSecondAnswer($secondAnswer)
    {
        $this->secondAnswer = $secondAnswer;

        return $this;
    }

    /**
     * Get secondAnswer
     *
     * @return string
     */
    public function getSecondAnswer()
    {
        return $this->secondAnswer;
    }

    /**
     * Set thirdAnswer
     *
     * @param string $thirdAnswer
     *
     * @return Question
     */
    public function setThirdAnswer($thirdAnswer)
    {
        $this->thirdAnswer = $thirdAnswer;

        return $this;
    }

    /**
     * Get thirdAnswer
     *
     * @return string
     */
    public function getThirdAnswer()
    {
        return $this->thirdAnswer;
    }

    /**
     * Set fourthAnswer
     *
     * @param string $fourthAnswer
     *
     * @return Question
     */
    public function setFourthAnswer($fourthAnswer)
    {
        $this->fourthAnswer = $fourthAnswer;

        return $this;
    }

    /**
     * Get fourthAnswer
     *
     * @return string
     */
    public function getFourthAnswer()
    {
        return $this->fourthAnswer;
    }

    /**
     * Set correctAnswerNumber
     *
     * @param string $correctAnswerNumber
     *
     * @return Question
     */
    public function setCorrectAnswerNumber($correctAnswerNumber)
    {
        $this->correctAnswerNumber = $correctAnswerNumber;

        return $this;
    }

    /**
     * Get correctAnswerNumber
     *
     * @return string
     */
    public function getCorrectAnswerNumber()
    {
        return $this->correctAnswerNumber;
    }
}

