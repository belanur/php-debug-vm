<?php

class Factory
{
    /**
     * @return RandomQuoteCommand
     */
    public function getRandomQuoteCommand()
    {
        return new RandomQuoteCommand($this->getQuoteCollection());
    }

    /**
     * @return QuoteCollection
     */
    public function getQuoteCollection()
    {
        $reader = $this->getQuoteReader();
        $quotes = $reader->getQuotes(include __DIR__ . '/../conf/quotes.php');
        return new QuoteCollection($quotes);
    }

    /**
     * @return QuoteReader
     */
    private function getQuoteReader()
    {
        return new QuoteReader();
    }
}