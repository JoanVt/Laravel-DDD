<?php

namespace Src\Application\Service\Application\Transformer;

use Src\Domain\Model\Application\Application;
use Src\Infraestructure\Transformer\Transformer;

class ShowApplicationDataTransformer extends Transformer {

    public function transform(Application $application)
    {
        return [
            'id'                => (int) $application->id(),
            'developer_id'      => (string) $application->developerId(),
            'title'             => (string) $application->title(),
            'version'           => (string) $application->version(),
            'url'               => (string) $application->url(),
            'short_description' => (string) $application->short_description(),
            'license'           => (string) $application->license(),
            'thumbnail'         => (string) $application->thumbnail(),
            'rating'            => (string) $application->rating(),
            'total_downloads'   => (string) $application->total_downloads(),
            'compatible'        => (string) implode('|',$application->compatible()),
        ];
    }

}