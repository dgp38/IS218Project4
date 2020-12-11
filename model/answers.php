<?php

class Answers {
    private $answerId, $answer, $votecount;

    public function __construct($answerId, $answer, $votecount){
        $this->answerId = $answerId;
        $this->answer = $answer;
        $this-> votecount=$votecount;
    }

    /**
     * @return mixed
     */
    public function getAnswerId()
    {
        return $this->answerId;
    }

    /**
     * @param mixed $answerId
     */
    public function setAnswerId($answerId)
    {
        $this->answerId = $answerId;
    }

    /**
     * @return mixed
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @param mixed $answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    /**
     * @return mixed
     */
    public function getVotecount()
    {
        return $this->votecount;
    }

    /**
     * @param mixed $votecount
     */
    public function setVotecount($votecount)
    {
        $this->votecount = $votecount;
    }
}