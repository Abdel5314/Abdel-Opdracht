<?php

// Author: Abdel


namespace Opdracht6b\classes;


use PHPUnit\Framework\TestCase;


class UserTest extends TestCase {
    private $username;
    private $db;

    public function testRegisterUser(): void {
        // Testing a registrated user.
        $this -> assertTrue($this -> user -> registerUser('Abdel', 'Al Abdalaoui'));

        // Testing a registrated user that isn't in the system.
        $this -> assertFalse($this -> user -> registerUser('Abdel', 'Abdalaoui'));
    }

    public function testLoginUser(): void {
        $this -> assertTrue($this -> user -> loginUser('Thomas', 'Van der Vlught'));
        $this -> assertFalse($this -> user -> loginUser('Mohamed', 'Zakaria'));
        $this -> assertFalse($this -> user -> loginUser('Bas', 'Jansen'));
    }

    public function testIsLoggedin(): void {
        $this -> assertFalse($this -> user -> isLoggedin());
        $this -> user -> loginUser('Bas', 'Jansen');
        $this -> assertTrue($this -> user -> isLoggedin());
    }

    public function testLogoutUser() {
        $this -> username -> Logout();

        $isDeleted = (session_status() == PHP_SESSION_NONE && empty(session_id()));
        $this -> assertTrue($isDeleted);
    }  
}

?>