<?php

namespace Rotaz\Support\Tests;

use PHPUnit\Framework\TestCase;
use Rotaz\Support\Regex\RegexPatterns;

class RegexTest extends TestCase
{
    public function testEmailValidation()
    {
        $pattern = '/^[\w\.-]+@[\w\.-]+\.\w{2,}$/';
        $this->assertMatchesRegularExpression($pattern, 'user@example.com');
        $this->assertDoesNotMatchRegularExpression($pattern, 'user@com');
    }

    public function testPhoneValidation()
    {
        $pattern = '/^\(\d{2}\)\s?\d{4,5}-\d{4}$/';
        $this->assertMatchesRegularExpression($pattern, '(11) 91234-5678');
        $this->assertDoesNotMatchRegularExpression($pattern, '11912345678');
    }

    public function testCpfValidation()
    {
        $pattern = '/^\d{3}\.\d{3}\.\d{3}-\d{2}$/';
        $this->assertMatchesRegularExpression($pattern, '123.456.789-00');
        $this->assertDoesNotMatchRegularExpression($pattern, '12345678900');
    }

    public function testDateValidation()
    {
        $pattern = '/^\d{2}\/\d{2}\/\d{4}$/';
        $this->assertMatchesRegularExpression($pattern, '31/12/2024');
        $this->assertDoesNotMatchRegularExpression($pattern, '2024-12-31');
    }

    public function testUserNamenValidation()
    {


        $this->assertMatchesRegularExpression(RegexPatterns::USER_NAME, 'user123');
        $this->assertMatchesRegularExpression(RegexPatterns::STR_LENGTH, 'user123');
        $this->assertDoesNotMatchRegularExpression($pattern, 'user123@');

    }
}
