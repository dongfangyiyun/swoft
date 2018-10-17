<?php

namespace Swoft\Bootstrap\Listeners\Interfaces;

use Swoole\Server;

/**
 *
 *
 * @uses      BufferFullInterface
 * @version   2018年01月10日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
interface BufferFullInterface
{
    function onBufferFull(Server $server, int $fd);
}