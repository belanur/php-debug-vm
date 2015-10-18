<?php

class QuoteReader
{
    /**
     * @param array $sourceData
     *
     * @return array
     */
    public function getQuotes(array $sourceData)
    {
        $quotes = [];
        foreach ($sourceData as $quoteData) {
            $lines = [];
            foreach ($quoteData as $character => $line) {
                $lines[] = new QuoteLine($character, $line);
            }
            $quotes[] = new Quote($lines);
        }
        return $quotes;
    }
}