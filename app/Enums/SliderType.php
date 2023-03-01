<?php

namespace App\Enums;

class SliderType {
    const MENU = 1;
    const SLIDER = 2;

    public static function getSliderOptions() {
        return [
            self::MENU => 'menu',
            self::SLIDER => 'slider'
        ];
    }
}
