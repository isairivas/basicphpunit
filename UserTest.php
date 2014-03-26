<?php


require_once 'User.php';

class UserTest extends PHPUnit_Framework_TestCase {
    
    public function testTalk(){
        $user = new User();
        $expected = 'Bienvenido al mundo';
        $actual = $user->saludo();
        $this->assertEquals($expected,$actual);
    }
    
}


