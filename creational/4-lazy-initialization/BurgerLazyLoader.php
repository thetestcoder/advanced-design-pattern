<?php


class BurgerLazyLoader
{
    private static array $instances = [];

    public static function getBurger(bool $cheese, bool $chips): Burger
    {
        if (!isset(self::$instances[$cheese.$chips])){
            self::$instances[$cheese.$chips] = new Burger($cheese, $chips);
        }

        return self::$instances[$cheese.$chips];
    }

    public static function getBurgerCount(): int
    {
        return count(self::$instances);
    }
}