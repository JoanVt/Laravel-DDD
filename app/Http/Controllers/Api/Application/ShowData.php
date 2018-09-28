<?php

namespace App\Http\Controllers\Api\Application;

use Illuminate\Http\JsonResponse;
use Src\Application\Contracts\Bus\CommandBusInterface;
use Src\Application\Service\Application\Command\ShowApplicationDataCommand;
use Src\Application\Service\Application\Transformer\ShowApplicationDataTransformer;

class ShowData{

    private $bus;

    public function __construct ( CommandBusInterface $bus )
    {
        $this->bus = $bus;
    }

    public function __invoke (int $id): JsonResponse
    {

        $response = (new ShowApplicationDataTransformer)->transform($this->bus->handle(new ShowApplicationDataCommand($id)));
        return JsonResponse::create($response,JsonResponse::HTTP_OK);
    }

}