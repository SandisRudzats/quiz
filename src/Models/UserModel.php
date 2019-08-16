<?php

namespace Quiz\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property string $name
 * @property UserAnswerModel
 */
use Illuminate\Database\Eloquent\Model;

class UserModel extends BaseModel
{
    protected $fillable = ['name','password','email'];
    public $table = 'users';
    /**
     * @var string
     */
    private $name;

    protected $rules = [


    ];
    /**
     * @property int $id
     */

    /**
     * @return HasMany
     */
    public function userAnswers()
    {
        return $this->hasMany(UserAnswerModel::class, 'user_id', 'id');
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = password_hash($value, PASSWORD_DEFAULT);
    }

}
