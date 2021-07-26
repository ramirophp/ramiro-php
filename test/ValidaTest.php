<?php

use PHPUnit\Framework\TestCase;
use Rmo\Valida;

class ValidaTest extends TestCase {

    public function test_email () {

        $email = Valida::email('ramiro_php@protonmail.com');
        $this->assertTrue($email);

    }

}