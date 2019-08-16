<?php


use Illuminate\Support\Arr;
use Quiz\Controllers\NotFoundController;
use Quiz\Route;
use Illuminate\Database\Capsule\Manager as Capsule;


include_once '../vendor/autoload.php';
require_once '../src/bootstrap.php';


/**
 * @var Route[] $routes
 */
$routes = require_once '../src/routes.php';

$parsed = parse_url($_SERVER['REQUEST_URI']);
$path = $parsed['path'];
/** @var Route $route */
$route = Arr::get($routes, $path, new Route(NotFoundController::class));

$route->handle();

























//$answer = AnswerModel::query()->first();
//$quiz = QuizModel::query()->where(['id' => 1])->first();
//echo $quiz->title . '<br/>';
//
//foreach ($quiz->questions as $question) {
//    echo $question->text . '<br/>';
//}


//$something = AnswerModel::query()->where(['id' => 23])->first();
//echo $something->id . '<br/>';
//
//$something = UserModel::query()->where(['id' => 2])->first();
//echo $something->name . '<br/>';
//
//$something = QuestionModel::query()->where(['id' => 2])->first();
//echo $something->text . '<br/>';
//
//$something = QuestionModel::query()->where(['id' => 1])->first();
//echo $something->text . '<br/>';
////foreach ($something->answers as $answer) {
////    echo $something->id . '<br/>';
////}
//$something = new QuestionModel();
//$something->answers;
