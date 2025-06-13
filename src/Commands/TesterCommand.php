<?php

namespace AppConsole\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:tester',
    description: 'For testing purposes',
    hidden: false
)]
class TesterCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln([
            'just for testing',
            '============',
            '',
        ]);
        return Command::SUCCESS;
    }
}
