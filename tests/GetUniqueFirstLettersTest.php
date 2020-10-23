<?php

use PHPUnit\Framework\TestCase;

class GetUniqueFirstLettersTest extends TestCase
{
    /**
     * @dataProvider providerPositiveData
     */
    public function testPositive($input, $expected)
    {
        $this->assertEquals($expected, getUniqueFirstLetters($input));
    }

    public function providerPositiveData()
    {
        return [
            [
                [
                    ['name' => 'Frankfurt', 'code' => 'FRA'],
                    ['name' => 'Barselona', 'code' => 'BCN'],
                    ['name' => 'Paris', 'code' => 'CDG'],
                    ['name' => 'Berlin', 'code' => 'SXF']
                ]
            ]
        ];
    }
}   