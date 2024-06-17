<?php
namespace MVC;

use PHPUnit\Framework\InvalidArgumentExeption;
use PHPUnit\Framework\TestCase;
use MVC\Models\UserManager;
use MVC\Models\User;

include 'src/config/config.php';

//run the tests with phpunit
//vendor\bin\phpunit ./tests

final class UserTest extends TestCase
{
    protected $UserManager;

    protected function setUp(): void
    {
        $this->UserManager = new UserManager();
    }
    public function testGetUserById()
    {
        $this->assertInstanceOf(
            User::class,
            $this->UserManager->get_one("svdfsbdvw")
        );
    }
}
