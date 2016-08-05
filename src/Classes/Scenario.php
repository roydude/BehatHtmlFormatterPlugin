<?php
/**
 * Created by PhpStorm.
 * User: nealv
 * Date: 05/01/15
 * Time: 14:39
 */

namespace roydude\BehatHTMLFormatter\Classes;


class Scenario
{
    /**
     * @var int
     */
    private $id;
    private $name;
    private $line;
    private $tags;
    private $loopCount;
    private $screenshotName;

    /**
     * @var bool
     */
    private $passed;

    /**
     * @var bool
     */
    private $undefined;

    /**
     * @var bool
     */
    private $skipped;

    /**
     * @var Step[]
     */
    private $steps;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getScreenshotName()
    {
        return $this->screenshotName;
    }

    public function setScreenshotName($scenarioName)
    {
        $this->screenshotName = str_replace(' ','', $scenarioName) . '.png';
    }

    /**
     * @return int
     */
    public function getLoopCount()
    {
        return $this->loopCount;
    }

    /**
     * @param int $loopCount
     */
    public function setLoopCount($loopCount)
    {
        $this->loopCount = $loopCount;
    }
    /**
     * @return mixed
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param mixed $line
     */
    public function setLine($line)
    {
        $this->line = $line;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return boolean
     */
    public function isPassed()
    {
        return $this->passed;
    }

    /**
     * @return boolean
     */
    public function isUndefined()
    {
        return $this->undefined;
    }

    /**
     * @return boolean
     */
    public function isSkipped()
    {
        return $this->skipped;
    }

    /**
     * @param boolean $passed
     */
    public function setPassed($passed)
    {
        $this->passed = $passed;
    }

    /**
     * @param boolean $passed
     */
    public function setUndefined($passed)
    {
        $this->undefined = $passed;
    }

    /**
     * @param boolean $passed
     */
    public function setSkipped($passed)
    {
        $this->skipped = $passed;
    }

    /**
     * @return Step[]
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param Step[] $steps
     */
    public function setSteps($steps)
    {
        $this->steps = $steps;
    }

    /**
     * @param Step $step
     */
    public function addStep($step)
    {
        $this->steps[] = $step;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLoopSize()
    {
        //behat
        return $this->loopCount > 0 ? sizeof($this->steps)/$this->loopCount : sizeof($this->steps);
    }
}
