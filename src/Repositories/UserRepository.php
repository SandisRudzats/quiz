<?php

namespace Quiz\Repositories;


namespace Quiz\Repositories;


use http\Client\Curl\User;
use phpDocumentor\Reflection\Types\Boolean;
use Quiz\Models\UserModel;


/**
 * Class UserRepository
 * @package Quiz\Repositories
 */

class UserRepository
{

    public function userExists(array $data): bool
    {
        return UserModel::query()->where(['email' => $data['email']])->exists();


    }

    /**
     * @param array $data
     * @return UserModel
     */
    public function createUser(array $data): UserModel
    {
        $user = new UserModel();
        $user->fill($data);
        $user->save();
        return $user;

    }
    public function one(array $conditions = []): ?UserModel
    {
        $user = UserModel::query()->where($conditions)->first();

     return $user;
    }
}






//    public static function insertUserRecord(string $name, string $email, string $password): void
//    {
//        $user = new UserModel();
//        $user->name = $name;
//        $user->email = $email;
//        $user->password = md5($password);
//        $user->save();
//    }
//    public static function existsUserWithName(string $name): bool
//    {
//        return UserModel::query()->where(['name' => $name])->exists();
//    }
//    public static function existsUserWithEmail(string $email): bool
//    {
//        return UserModel::query()->where(['email' => $email])->exists();
//    }
