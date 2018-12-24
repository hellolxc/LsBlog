<?php
namespace app\cli;

use Symfony\Component\Console\Application;
use app\cli\command\BuildCommand;
use app\cli\command\ServerCommand;
use app\cli\command\NewCommand;

/**
 *@wiki http://www.symfonychina.com/doc/current/components/console/console_arguments.html
 *@wiki https://github.com/symfony/symfony/pull/24363  输出后更新,同时输出多个
 */
class Index
{
	public function run()
	{
        $application = new Application('LsBlog', '1.0.0');
        $application->add(new BuildCommand());
        $application->add(new ServerCommand());
        $application->add(new NewCommand());
        $application->run();
	}
}
