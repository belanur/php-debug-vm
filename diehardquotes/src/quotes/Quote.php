<?php

class Quote
{
    private $lines = [];

    /**
     * @param QuoteLine[] $lines
     */
    public function __construct(array $lines)
    {
        $this->lines = $lines;
    }

    /**
     * @return QuoteLine[]
     */
    public function getLines()
    {
        return $this->lines;
    }

}