<?php
/**
 * Author: Mycha de Vrees
 */
namespace Mdevrees\AddCustomerCli\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Mdevrees\AddCustomerCli\Helper\Customer;

class CustomerUserLockCommand extends Command
{
    protected $customerHelper;

    public function __construct(Customer $customerHelper)
    {
        $this->customerHelper = $customerHelper;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('customer:user:lock')
            ->setDescription('Lock existing customer by setting a lock date')
            ->setDefinition($this->getOptionsList());
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Locking user...</info>');
        $this->customerHelper->setData($input);
        $this->customerHelper->executeLock();

        $output->writeln('');
        $output->writeln('<info>User locked with the following data:</info>');
        $output->writeln('<comment>Customer ID: ' . $this->customerHelper->getCustomerId());
        $output->writeln('<comment>Lock expires: ' . $this->customerHelper->getLockExpires());
    }

    protected function getOptionsList()
    {
        return [
            new InputOption(Customer::KEY_ID, null, InputOption::VALUE_REQUIRED, '(Required) Customer ID'),
            new InputOption(Customer::KEY_DATE, null, InputOption::VALUE_REQUIRED, '(Required) Date'),
        ];
    }
}
