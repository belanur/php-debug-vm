<?php

class QuoteLine
{
    /**
     * @var string
     */
    private $character = '';

    /**
     * @var string
     */
    private $line = '';

    /**
     * @param string $character
     * @param string $line
     */
    public function __construct($character, $line)
    {
        $this->character = $character;
        $this->line = $line;
    }

    /**
     * @return string
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * @return string
     */
    public function getLine()
    {
        return $this->line;
    }

}