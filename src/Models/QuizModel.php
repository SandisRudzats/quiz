<?php
namespace Quiz\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $title
 * @property QuestionModel[] $questions
 * @property UserAnswerModel[] $userAnswers
 */
use Illuminate\Database\Eloquent\Model;

class QuizModel extends BaseModel

{
    /**
     * @var string $table
     */
    public $table = 'quizzes';

    /**
     * @return HasMany
     */
    public function questions()
    {
        return $this->hasMany(QuestionModel::class,'quiz_id', 'id');
    }
    public function userAnswers()
    {
        return $this->hasMany(UserAnswerModel::class,'quiz_id','id');
    }
}






//    /** @var int $id */
//    public $id;
//    /** @var string $title */
//    public $title;
//    /**
//     * @param array $data
//     * @return QuizModel
//     */
//    public static function fromArray(array $data = [])
//    {
//        $quiz = new self;
//        foreach ($data as $property => $value) {
//            if (property_exists($quiz, $property)) {
//                $quiz->$property = $value;
//            }
//        }
//        return $quiz;
//    }