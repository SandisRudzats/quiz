<?php
namespace Quiz\Repositories;

use Quiz\Models\QuizModel;

class QuizRepository
{
public function all()
{
    return QuizModel::all();
}
}