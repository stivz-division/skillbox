<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Command1 extends Command
{
    protected function configure()
    {
        $this
            ->setName('say_hello')
            ->addArgument('text', InputArgument::REQUIRED, 'text');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Привет ' . $input->getArgument('text'));
        return Command::SUCCESS;
    }
}
