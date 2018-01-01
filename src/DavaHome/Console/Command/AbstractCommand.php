<?php

namespace DavaHome\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Output\ConsoleOutputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AbstractCommand extends Command
{
    /** @var bool */
    protected $enabled;

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function __construct($name = null)
    {
        $this->enabled = parent::isEnabled();
        parent::__construct($name);
    }

    /**
     * @return mixed|QuestionHelper
     */
    protected function getQuestionHelper()
    {
        return $this->getHelper('question');
    }

    /**
     * @param OutputInterface $output
     *
     * @return OutputInterface
     */
    protected function getErrorOutput(OutputInterface $output)
    {
        if ($output instanceof ConsoleOutputInterface) {
            return $output->getErrorOutput();
        }

        return $output;
    }

    /**
     * @param OutputInterface $output
     * @param int             $max
     *
     * @return ProgressBar
     */
    protected function createProgressBar(OutputInterface $output, $max = 0)
    {
        return new ProgressBar($output, $max);
    }

    /**
     * @param OutputInterface $output
     *
     * @return Table
     */
    protected function createTable(OutputInterface $output)
    {
        return new Table($output);
    }
}
