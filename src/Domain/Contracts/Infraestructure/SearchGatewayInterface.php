<?php

namespace Src\Domain\Contracts\Infraestructure;

/**
 * Interface SearchGatewayInterface
 * @package Src\Domain\Contracts\Infrastructure
 */
interface SearchGatewayInterface
{

    /**
     * @param $id
     *
     * @return null|mixed
     */
    public function find($id);

}
