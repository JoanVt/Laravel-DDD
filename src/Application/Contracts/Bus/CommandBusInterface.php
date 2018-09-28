<?php

namespace Src\Application\Contracts\Bus;

/**
 * Interface CommandBusInterface
 * @package CustomerService\Application\Contracts\Bus
 */
interface CommandBusInterface
{

    /**
     * @param $command
     *
     * @return mixed
     */
    public function handle($command);
}