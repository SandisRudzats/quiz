<?php

namespace Quiz\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
/**
 * @property int $id
 * @property int $user_id
 * @property int $quiz_id
 * @property int $question_id
 * @property int $answer_id
 *
 * @property Usermodel $user
 * @property QuizModel $quiz
 * @property QuestionModel $question
 * @property AnswerModel $answer
 */

use Illuminate\Database\Eloquent\Model;

class UserAnswerModel extends BaseModel
{
    public $table = 'user_answers';

    /**
     * @return HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(UserModel::class, 'id', 'user_id');
    }

    /**
     * @return HasOne
     */
    public function quiz(): HasOne
    {
        return $this->hasOne(QuizModel::class, 'id', 'quiz_id');
    }

    /**
     * @return HasOne
     */
    public function question(): HasOne
    {
        return $this->hasOne(QuestionModel::class, 'id', 'question_id');
    }

    /**
     * @return HasOne
     */
    public function answer(): HasOne
    {
      return $this->hasOne(AnswerModel::class,'id','answer_id');
    }
}