<?php

namespace app\cli\command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ServerCommand extends Command
{
    protected function configure()
    {
        $this->setName('server')
        	 ->setDescription('Run Web Server')
        	 ->setHelp('This command Run Web Server');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $port = config('port');
    	/*此方法的可以利用clear可以清除输出的内容  @wiki https://github.com/symfony/symfony/issues/26603*/
    	$output = $output->section();
		
		/**提前输出系统正常的信息, 因为执行到exec会阻塞住,等待返回信息,除非server启动失败,否则会一直阻塞*/
		$output->writeln([
			'<info>Document root is <comment>'.DOCUMENT_ROOT.'</comment></info>',
			"<info>Listening on <comment>http://localhost:$port</comment></info>",
	        '<info>Press Ctrl-C to quit</info>',
    	]);

    	exec("php -S localhost:$port index.php -t ./ 2>&1", $bashOutput);
    	
    	$output->clear(); //清除打印的正常信息,输出异常信息
    	
    	$bashOutput =  is_array($bashOutput) ? implode("\n", $bashOutput) : $bashOutput;

        $output->write("\n<error>$bashOutput</error>\n");
    }
}