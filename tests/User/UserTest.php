<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    private $user;

    protected function setUp(): void
    {
        $this->user = new \App\Models\User();
        $this->user->setAge(33);
    }

    protected function tearDown(): void
    {

    }

    public function testAge()
    {
        $this->assertEquals(33, $this->user->getAge() );
        return 23;
    }

    /**
     * @depends testAge
     */
    public function testAge2($age)
    {
        $this->assertEquals($age, $this->user->getAge() );
    }
    public function userProvider()
    {
        return [
            'one' => [1, 2],
            'two' => [2, 2],
            'correct' => [33, 35],
        ];
    }
}