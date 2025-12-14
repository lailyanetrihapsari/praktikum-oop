<?php

class BaseController {
    public static function route(): void {
        echo "Routing di BaseController\n";
    }

    // pakai static::
    public static function handleStatic(): void {
        static::route();
    }

    // pakai self::
    public static function handleSelf(): void {
        self::route();
    }
}

class UserController extends BaseController {
    public static function route(): void {
        echo "Routing di UserController\n";
    }
}

class AdminController extends UserController {
    public static function route(): void {
        echo "Routing di AdminController\n";
    }
}

// ===== TEST =====
echo "== static:: ==\n";
UserController::handleStatic();   // UserController
AdminController::handleStatic();  // AdminController

echo "\n== self:: ==\n";
UserController::handleSelf();     // BaseController
AdminController::handleSelf();    // BaseController
