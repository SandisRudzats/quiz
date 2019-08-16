<?php
namespace Quiz\Controllers;

use Quiz\Controllers\BaseController;
use Quiz\Repositories\QuizRepository;

class QuizController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
      $this->repository = $repository ?? new QuizRepository();
    }

    public function all()
    {

    return $quizzes = $this->repository->all();
    }
}