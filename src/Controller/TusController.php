<?php

declare(strict_types=1);
/**
 * @copyright 2020
 * @author Stefan "eFrane" Graupner <efrane@meanderingsoul.com>
 */

namespace EFrane\TusBundle\Controller;


use TusPhp\Tus\Server;

class TusController
{
    public function tusAction(Server $server)
    {
        return $server->serve();
    }
}
