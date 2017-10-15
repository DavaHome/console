# console

Provides functionality for symfony console commands

# Installation

```bash
php composer.phar require davahome/console
```


# Usage

```php
use DavaHome\Console\Command\AbstractCommand;

// Enable/Disable commands dynamically
public function configure()
{
  $this->setName('example')
    ->setEnabled(true);
}

// Ask questions
public function interact()
{
  $this->getQuestionHelper()->ask(new Question('What? '));
}

// Write to the error output
public function execute()
{
    $this->getErrorOutput($output)->writeln('This will be sent directly to STDERR (if supported)');
}

// Display progressBars (using DavaHome\Console\Helper\ProgressBar)
public function execute()
{
  $progressBar = $this->createProgressBar($output);
}
```


```php
use DavaHome\Console\Helper\ProgressBar;

// Use constants for defining the format
$progressBar->setFormat(ProgressBar::FORMAT_DEBUG_NOMAX);
```
