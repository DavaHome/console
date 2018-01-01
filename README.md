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

// Display progressBars
public function execute()
{
  $progressBar = $this->createProgressBar($output);
}

// Display tables
public function execute()
{
  $table = $this->createTable($output);
}
```


```php
use DavaHome\Console\Helper\ProgressBarOptions;

// Use constants for defining the format
$progressBar->setFormat(ProgressBarOptions::FORMAT_DEBUG_NOMAX);
```


```php
use DavaHome\Console\Helper\TableOptions;

// Use constants for defining the style
$progressBar->setFormat(TableOptions::STYLE_COMPACT);
```
