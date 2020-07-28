<?php

use PHPUnit\Framework\TestCase;

class CountArgumentsWrapperTest extends TestCase
{
    /**
     * @dataProvider positiveDataProvider
     */
    public function testPositive(...$input)
    {
        $this->expectException(InvalidArgumentException::class);

        countArgumentsWrapper($input);
    }

    public function positiveDataProvider()
    {
        return [
            [1, 2, 3,],
            ['string', 1, 23],
            ['The', 'and', 'only', 1]
        ];
    }
}