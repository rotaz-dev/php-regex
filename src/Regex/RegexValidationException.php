<?php

namespace Rotaz\Support\Regex;

/**
 * RegexValidationException
 *
 *
 *
 * @author Rodrigo Souza
 * @since 2023-03-20
 * @version 1.0
 */
class RegexValidationException extends \Exception
{

    /**
     * @throws RegexValidationException
     */
    public static function raise($pattern, $value, $message = '')
    {
        throw new self("Regex failure with pattern: $pattern, value: $value. $message");

    }

}