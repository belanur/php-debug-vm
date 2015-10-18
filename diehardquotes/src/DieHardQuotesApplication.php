<?php

class DieHardQuotesApplication
{
    /**
     * @var Factory
     */
    private $factory;

    /**
     * @param Factory $factory
     */
    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    public function run()
    {
        $application = new \Symfony\Component\Console\Application('Die Hard Quotes', '0.1.0-dev');
        $application->add($this->factory->getRandomQuoteCommand());
        $application->run();
    }
}