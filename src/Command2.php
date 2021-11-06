<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Command2 extends Command
{
// the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-user';

    protected function configure(): void
    {
        $this->setName('command2')
            ->addArgument('text', InputArgument::OPTIONAL, 'Text')
            ->addOption('times', null, InputOption::VALUE_REQUIRED, 'Count', 2);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // ... put here the code to create the user

        // this method must return an integer number with the "exit status code"
        // of the command. You can also use these constants to make code more readable

        // return this if there was no problem running the command
        // (it's equivalent to returning int(0))
        for ($i = 0; $i < $input->getOption('times'); $i++) {
            $output->writeln($input->getArgument('text'));
        }

        return Command::SUCCESS;

        // or return this if some error happened during the execution
        // (it's equivalent to returning int(1))
        // return Command::FAILURE;

        // or return this to indicate incorrect command usage; e.g. invalid options
        // or missing arguments (it's equivalent to returning int(2))
        // return Command::INVALID
    }
}
