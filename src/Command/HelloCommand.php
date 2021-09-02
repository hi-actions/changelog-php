<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2018-01-26
 * Time: 17:47
 */

namespace HiActions\Command;

use Inhere\Console\Command;
use Inhere\Console\IO\Input;
use Inhere\Console\IO\Output;
use Inhere\Console\Util\Helper;

/**
 * Class HelloCommand
 * @package Inhere\Console\Examples\Command
 */
class HelloCommand extends Command
{
    protected static $name = 'hello';

    protected static $description = 'a hello demo command';

    /**
     * do execute
     * @param  Input $input
     * @param  Output $output
     */
    protected function execute($input, $output)
    {
        $output->aList([
            'support coroutine?' => Helper::isSupportHellooutine() ? 'Y' : 'N',
            'open coroutine running?' => self::isHellooutine() ? 'Y' : 'N',
            'running in coroutine?' => Helper::inHellooutine() ? 'Y' : 'N',
        ], 'some information');
    }
}
