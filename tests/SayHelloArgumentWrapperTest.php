<?php

use PHPUnit\Framework\TestCase;

class SayHelloArgumentWrapperTest extends TestCase
{
    /**
     * @dataProvider positiveDataProvider
     */
    public function testPositive($input)
    {
        $this->expectException(InvalidArgumentException::class);

        sayHelloArgumentWrapper($input);
    }

    public function positiveDataProvider()
    {
        return [
            [null],
            [[3, 2, 1]],
            [['Hello', 'darkness','myoldfriend']]
        ];
    }
}
