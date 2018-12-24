<?php

namespace app\cli\command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class BuildCommand extends Command
{
    protected function configure()
    {
       $this->setName('build')
        ->setDescription('Build File')
        ->setHelp('This command Run Web Server');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
	        'User Creator',
	        '============',
	        '',
    	]);
    	$output->writeln('<info>You are about to</info>');
    	$output->writeln('<comment>foo</comment>');
    	$output->writeln('<question>Build Success</question>');
    	$output->writeln('<error>error: somethings looks worng</error>');
    }
}