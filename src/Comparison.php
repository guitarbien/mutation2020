<?php

namespace App;

/**
 * Class Comparison
 * @package App
 */
final class Comparison
{
    /**
     * @param  int  $intA
     * @param  int  $intB
     * @return bool
     */
    public function isEquals(int $intA, int $intB): bool
    {
        return $intA === $intB;
    }

    /**
     * @param  int  $intA
     * @param  int  $intB
     * @return bool
     */
    public function isGreaterThan(int $intA, int $intB): bool
    {
        return $intA > $intB;
    }

    /**
     * @param  int  $intA
     * @param  int  $intB
     * @return bool
     */
    public function isSmallerThan(int $intA, int $intB): bool
    {
        return $intA < $intB;
    }
}
