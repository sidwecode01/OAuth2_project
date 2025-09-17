<?php

namespace App\Enums;

enum Provider: string {
    case Github = "github";
    case Twitter = "twitter";
    case Google = "google";

    public static function values(){
        return array_map(
            fn(self $provider) => $provider->value,
            self::cases()
        );
    }
}