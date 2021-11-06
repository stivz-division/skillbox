<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;


class Command3 extends Command
{
    protected function configure(): void
    {
        $this->setName('app:guest');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // ... put here the code to create the user

        // this method must return an integer number with the "exit status code"
        // of the command. You can also use these constants to make code more readable

        // return this if there was no problem running the command
        // (it's equivalent to returning int(0))

        $help = $this->getHelper('question');

        $question = new Question('Введите Ваше имя: ', 'Гость');
        $name = $help->ask($input, $output, $question);

        $question = new Question('Введите Ваш возраст: ', 10);
        $age = $help->ask($input, $output, $question);



        $question = new ChoiceQuestion('Ваш пол (м):', [
            'м', 'ж'
        ], 0);


        $sex = $help->ask($input, $output, $question);

        $output->write($name);
        $output->write($age);
        $output->write($sex);

        $output->writeln('Здравствуйте, ' . $name . ' Ваш возраст: ' . $age . ' Ваш пол: ' . $sex);

        return Command::SUCCESS;

        // or return this if some error happened during the execution
        // (it's equivalent to returning int(1))
        // return Command::FAILURE;

        // or return this to indicate incorrect command usage; e.g. invalid options
        // or missing arguments (it's equivalent to returning int(2))
        // return Command::INVALID
    }
}
