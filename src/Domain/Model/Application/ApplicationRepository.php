<?php

namespace Src\Domain\Model\Application;

use Faker\Factory;

class ApplicationRepository{

    const COMPATIBILITIES =
        [
            "Windows 2000",
            "Windows XP",
            "Windows Vista",
            "Windows 7",
            "Windows 8"
        ],

        LICENCES = [
            'MIT',
            'BSD',
            'GNU'
        ];
    public function findOrFail(int $id) : Application
    {

        $fake = Factory::create();
        // Fake Repository.
        return new Application(
            $id,
            $fake->randomNumber(),
            $fake->title,
            $fake->randomFloat(),
            $fake->url,
            $fake->text(100),
            array_rand(self::LICENCES,1),
            $fake->imageUrl(),
            $fake->randomDigit,
            $fake->randomNumber(),
            $this->getRandomCompatibilities()

        );

    }

    private function getRandomCompatibilities(){

        $data = [];

        $array_rands = array_rand(
            self::COMPATIBILITIES,
            rand(
                1, count(self::COMPATIBILITIES)
            )
        );

        if(is_array($array_rands) && count($array_rands) > 0){
            $data = array_intersect_key(
                self::COMPATIBILITIES,
                $array_rands
            );
        }

        return $data;
    }

}