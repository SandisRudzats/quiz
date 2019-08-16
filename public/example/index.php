<?php
require 'EmailsInterface.php';
require 'EmailLogService.php';
require 'UserRepositoryInterface.php';
require 'UserService.php';
require 'UserArrayRepository.php';
require 'UserFileRepository.php';
require 'UserModel.php';

echo "<pre/>";



    $repository = new UserFileRepository();

$emails = new EmailLogService();
$userService = new UserService($repository, $emails);

$userService->register('Gatis123', 'gatis@neko.lv');
$userService->register('Gaaaaaaaaaa3', 'gaaaaaaaaaaaaaaaaaaaaaaaatis@neko.lv');
$userService->register('GFLAAAAAAAAAAAAAAAA', 'gaaaaaaaaaaaaaaaaaaaaaaaatis@neko.lv');




//$user1 = $userService->register("Sandis");
//$user2 = $userService->register("adsdsd");
//$user3 = $userService->register("Saddd");
//$user4 = $userService->register("Sadddaaaaaaaaaaaaa");
$userService->register('Peteris', 'sandis@andis.lv');

var_dump($userService->getUsers());
//var_dump($user1,$user2,$user3);
echo "<pre/>";