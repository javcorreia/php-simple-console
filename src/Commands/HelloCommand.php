<?php

namespace AppConsole\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:hello',
    description: 'Hello world command',
    hidden: false
)]
class HelloCommand extends Command
{
    protected function configure(): void
    {
        $this->addArgument(
            name: 'name',
            mode: InputArgument::OPTIONAL,
            description: 'Who do you want to greet?',
            default: 'World',
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln([
            'Hello',
            '============',
            $input->getArgument('name'),
        ]);
        return Command::SUCCESS;
    }
}
