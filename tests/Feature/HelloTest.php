<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\Databasemigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelloTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHello()
    {
        $this->assertTrue(true);

        $arr=[];
        $this->assertEmpty($arr);

        $msg="Hello";
        $this->assertEquals('Hello',$msg);

        $n= random_int(0,100);
        $this->assertLessThan(100,$n);

    }
}
