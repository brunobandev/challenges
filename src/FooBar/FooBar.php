<?php

namespace Challenge\FooBar;

class FooBar
{
    public string $result;
    public bool $isMultipleOf;

    public function __construct()
    {
        $this->result = '';
        $this->isMultipleOf = false;
    }

    public function check(int $number, array $multiply): string
    {
        ksort($multiply);
        foreach ($multiply as $key => $value) {
            if (0 == $number % $key) {
                $this->isMultipleOf = true;
                $this->result = $this->result.$value;
            }
        }

        return ($this->isMultipleOf) ? $this->result : $number;
    }
}

// $array = [
//     3 => 'Foo',
//     5 => 'Bar',
// ];

// $numbers = range(1, 100);

// for ($i = 1; $i < count($numbers); ++$i) {
//     echo (new FooBar())->check($i, $array).PHP_EOL;
// }
