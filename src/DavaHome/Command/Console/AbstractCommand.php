<?php

namespace DavaHome\Command\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\QuestionHelper;

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
}
