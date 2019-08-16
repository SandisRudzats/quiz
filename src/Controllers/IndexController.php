<?php

namespace Quiz\Controllers;

use Quiz\ActiveUser;
use Quiz\Models\QuizModel;

class IndexController extends BaseController
{
    public function index()
    {
        if(ActiveUser::isLoggedIn()) {
            $quizzes = QuizModel::all();
        }
        return $this->view('home',['quizzes' => $quizzes ??[]]);


    }
    public function about()
    {
        return $this->view('about');
    }

}