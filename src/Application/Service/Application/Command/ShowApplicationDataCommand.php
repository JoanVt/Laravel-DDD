<?php

namespace Src\Application\Service\Application\Command;


class ShowApplicationDataCommand{

    /**
     * @var int
     */
    private $id;


    /**
     * ShowUserCommand constructor.
     *
     * @param int $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }


    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }
}