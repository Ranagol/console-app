<?php
namespace Console\App\Commands;
 
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
 
class RandomTextCommand extends Command
{
    //The configure method allows you to configure your command so that you can set up the command name, a short description of the command, help text...
    protected function configure()
    {
        $this->setName('random-text')->setDescription('Prints some random text.')->setHelp('Demonstration of custom commands created by Symfony Console component.');
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)//the execute method contains the application logic of the command.
    {
        $output->writeln(sprintf('This is a really random text.'));
        return Command::SUCCESS;
    }
}