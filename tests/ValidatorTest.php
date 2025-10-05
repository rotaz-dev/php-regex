<?php

namespace Rotaz\Support\Tests;

use PHPUnit\Framework\TestCase;
use Rotaz\Support\Regex\RegexValidationException;
use Rotaz\Support\Regex\Validator;

class ValidatorTest extends TestCase
{
    public function testValidateEmailSuccess()
    {
        $this->assertTrue(
            Validator::validateEmail('exemplo@email.com')
        );
    }

    public function testValidateEmailFailure()
    {
        $this->expectException(RegexValidationException::class);
        Validator::validateEmail('email-invalido');
    }

    public function testValidateCpfSuccess()
    {
        $this->assertTrue(
            Validator::validateCpf('123.456.789-00')
        );
    }

    public function testValidateCpfFailure()
    {
        $this->expectException(RegexValidationException::class);
        Validator::validateCpf('12345678900');
    }

    public function testValidateTelefoneSuccess()
    {
        $this->assertTrue(
            Validator::validateTelefone('(11) 91234-5678')
        );
    }

    public function testValidateTelefoneFailure()
    {
        $this->expectException(RegexValidationException::class);
        Validator::validateTelefone('11912345678');
    }
}