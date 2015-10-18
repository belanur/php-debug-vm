<?php

class RandomQuoteCommand extends \Symfony\Component\Console\Command\Command
{
    /**
     * @var QuoteCollection
     */
    private $quoteCollection;

    /**
     * @param QuoteCollection $quoteCollection
     */
    public function __construct(QuoteCollection $quoteCollection)
    {
        $this->quoteCollection = $quoteCollection;
        parent::__construct();
    }

    protected function configure() {
        $this->setName('random')
            ->setDescription('Return a random "Die Hard" quote.');
    }

    protected function execute(
        \Symfony\Component\Console\Input\InputInterface $input,
        \Symfony\Component\Console\Output\OutputInterface $output
    )
    {
        $quote = $this->quoteCollection->getRandomQuote();
        $quoteOutput = [];
        foreach ($quote->getLines() as $line) {
            $quoteOutput[] = sprintf("\n  %s\n    ~%s\n\n", $line->getLine(), $line->getCharacter());
        }
        $output->write($quoteOutput);
    }

}