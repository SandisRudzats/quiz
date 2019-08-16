<?php
namespace Quiz\Models;

/**
 * @property int $id
 * @property string $text
 * @property bool $is_correct
 * @property int $question_id
 *@@property AnswerModel[] $answers
 */
use Illuminate\Database\Eloquent\Model;

class AnswerModel extends BaseModel
{

    public $table = 'answers';

    public function question()
    {
        $this->hasOne(QuestionModel::class,'id','question_id');
    }
    public function userAnswers()
    {
        return $this->hasMany(UserAnswerModel::class,'', '');
    }

}