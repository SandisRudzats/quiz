<?php

namespace Quiz\Services;

use Exception;
use http\Client\Curl\User;
use Quiz\Models\UserModel;
use Quiz\Repositories\UserRepository;
use Quiz\Session;

/**
 * Class UserService
 * @package Quiz\Services
 */
class UserService
{

    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(?UserRepository $repository = null)
    {
        $this->repository = $repository ?? new UserRepository();
    }

    /**
     * @param array $data
     * @return UserModel
     * @throws Exception
     */
    public function registerUser(array $data): UserModel
    {

        if ($this->repository->userExists($data)) {
            throw new \Exception('User Already registred');

        }
        return $this->repository->createUser($data);
    }

    /**
     * @param array $data
     * @throws Exception
     */
    public function attemptLogin(array $data)
    {
        if (!$this->repository->userExists($data)) {
            throw new \Exception('Could not log you in');

        }
        $user = $this->repository->one(['email' => $data['email']]);
        if (!password_verify($data['password'], $user->password)) {
            throw new Exception('Could not log you in');

        }
        $this->login($user);
    }
    protected function login(UserModel $user)
    {
        Session::getInstance()->setLoggedInUser($user);
    }
}