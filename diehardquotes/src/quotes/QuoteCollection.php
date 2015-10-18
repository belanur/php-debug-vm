<?php

class QuoteCollection
{
    /**
     * @var Quote[]
     */
    private $quotes = [];

    /**
     * @param Quote[] $quotes
     */
    public function __construct(array $quotes)
    {
        $this->quotes = $quotes;
    }

    /**
     * @return Quote
     * @throws Exception
     */
    public function getRandomQuote()
    {
        $quote = $this->quotes[array_rand($this->quotes)];
        if (count($quote->getLines()) == 0) {
            throw new Exception('Internal Error');
        }
        return $quote;
    }
}