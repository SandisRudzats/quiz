<?php

use Quiz\Controllers\QuizController;
use Quiz\Controllers\AuthController;
use Quiz\Controllers\IndexController;
use Quiz\Route;

return [
    '/' => new Route(IndexController::class),
    '/about' => new Route(IndexController::class, 'about'),
    '/register' => new Route(AuthController::class, 'register'),
    '/registerPost' => new Route(AuthController::class, 'registerPost'),
    '/login' => new Route(AuthController::class, 'login'),
    '/loginPost' => new Route(AuthController::class, 'loginPost'),
    '/logout' => new Route(AuthController::class, 'logout'),
    '/quizzes/all' => new Route(QuizController::class,'all')

];