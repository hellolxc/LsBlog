<?php
/**
 * Created by PhpStorm.
 * User: jiumeng
 * Date: 18-12-4
 * Time: 下午8:10
 */

namespace app\cli\command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use app\service\NewService;

class NewCommand extends Command
{
    protected function configure()
    {
        $this->setName('new')
            ->addArgument('fileName')
            ->setDescription('New File')
            ->setHelp('This command Run Web Server');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $newService = new NewService();
        $fileName = $input->getArgument('fileName');
        if (empty($fileName)) {
            $output->writeln('<error>error: 请输入文件名字</error>');
            exit();
        }

        $fileName = DOCUMENT_ROOT.'article/'.$fileName.'.md';
        $result = $newService->create($fileName);

        if ($result) {
            $output->writeln('<info>创建成功</info>');
        } else {
            $output->writeln('<error>error: 创建失败</error>');
        }
//
//        $output->writeln('<comment>foo</comment>');
//        $output->writeln('<question>Build Success</question>');
//        $output->writeln('<error>error: somethings looks worng</error>');
    }
}
