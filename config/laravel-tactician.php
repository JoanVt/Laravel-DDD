<?php


return [
    // The locator to bind
    'locator' => \Joselfonseca\LaravelTactician\Locator\LaravelLocator::class,
    // The inflector to bind
    'inflector' => \League\Tactician\Handler\MethodNameInflector\HandleInflector::class,
    // The extractor to bind
    'extractor' => League\Tactician\Handler\CommandNameExtractor\ClassNameExtractor::class,
    // The bus to bind
    'bus' => Joselfonseca\LaravelTactician\Bus::class,
    // Map of Commands => Handlers
    'map' => [
        \Src\Application\Service\Application\Command\ShowApplicationDataCommand::class => \Src\Application\Service\Application\Handler\ShowApplicationDataHandler::class
    ],
];
