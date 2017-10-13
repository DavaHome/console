<?php

namespace DavaHome\Console\Helper;

class ProgressBar extends \Symfony\Component\Console\Helper\ProgressBar
{
    const FORMAT_NORMAL = 'normal';
    const FORMAT_NORMAL_NOMAX = 'normal_nomax';

    const FORMAT_VERBOSE = 'verbose';
    const FORMAT_VERBOSE_NOMAX = 'verbose_nomax';

    const FORMAT_VERY_VERBOSE = 'very_verbose';
    const FORMAT_VERY_VERBOSE_NOMAX = 'very_verbose_nomax';

    const FORMAT_DEBUG = 'debug';
    const FORMAT_DEBUG_NOMAX = 'debug_nomax';
}
