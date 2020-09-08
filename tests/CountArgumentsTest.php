<?php

use PHPUnit\Framework\TestCase;

class CountArgumentsTest extends TestCase
{
    /**
     * @dataProvider positiveDataProvider
     */
    public function testPositive($input,$expected)
    {
        $this->assertEquals($expected, countArguments(...$input));
    }

    public function positiveDataProvider()
    {
        return [
            [[], ['argument_count' => 0, 'argument_values' => []]],
            [['1'], ['argument_count' => 1, 'argument_values' => ['1']]],
            [['Word','is an option'], ['argument_count' => 2, 'argument_values' => ['Word','is an option']]],
            [['The','1','and','only'], ['argument_count' => 4, 'argument_values' => ['The','1','and','only']]],
        ];
    }
}