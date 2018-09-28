<?php namespace Src\Application\Service\Application\Handler;


use Src\Application\Service\Application\Command\showApplicationDataCommand;
use Src\Domain\Model\Application\Application;
use Src\Domain\Model\Application\ApplicationRepository;

/**
 * Class getApplicationDataHandler
 * @package Src\Application\Service\Application\Handler
 */
class ShowApplicationDataHandler{

    /**
     * @var ApplicationRepository
     */
    private $applicationRepository;

    /**
     * getApplicationDataHandler constructor.
     * @param ApplicationRepository $applicationRepository
     */
    public function __construct (ApplicationRepository $applicationRepository)
    {
        $this->applicationRepository = $applicationRepository;
    }

    /**
     * @param showApplicationDataCommand $command
     * @return Application
     */
    public function handle (showApplicationDataCommand $command) : Application
    {
        return $this->applicationRepository->findOrFail($command->id());
    }

}