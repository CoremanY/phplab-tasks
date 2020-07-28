<?php

use PHPUnit\Framework\TestCase;

class SayHelloArgumentTest extends TestCase
{
    /**
     * @dataProvider positiveDataProvider
     */

    public function testPositive($input,$expected)
    {
        $this->assertEquals($expected,sayHelloArgument($input));
    }

    public function positiveDataProvider()
    {
        
        return [
            [1,'Hello 1'],
            ['1','Hello 1'],
            ['world','Hello world'],
            [true,'Hello 1'],
        ];
    }
}