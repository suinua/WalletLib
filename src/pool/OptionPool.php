<?php

namespace oiran\walletlib\pool;

use oiran\walletlib\model\Option;

class OptionPool
{
    private static Option $option;

    static function init(Option $option) {
        if (self::$option !== null) {
            throw new \Exception("PotionPool has already been initialized");
        }

        self::$option = $option;
    }

    static function getOption(): Option {
        return self::$option;
    }
}