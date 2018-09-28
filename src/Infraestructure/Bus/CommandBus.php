<?php

namespace Src\Infraestructure\Bus;

use Src\Application\Contracts\Bus\CommandBusInterface;
use League\Tactician\CommandBus as TacticianCommandBus;

/**
 * Class CommandBus
 * @package CustomerService\Application\Common\Bus
 */
class CommandBus extends TacticianCommandBus implements CommandBusInterface
{

}
