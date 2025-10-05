<?php

namespace Rotaz\Support\Regex;
use Rotaz\Support\Regex\RegexValidationException;

class Validator
{
    public static function validate($pattern, $value)
    {
        if (!preg_match($pattern, $value)) {
            RegexValidationException::raise($pattern, $value , 'Invalide pattern:');
        }
        return true;
    }

    public static function validateEmail($email)
    {
        return self::validate(RegexPatterns::EMAIL, $email);
    }

    public static function validateCpf($cpf)
    {
        return self::validate(RegexPatterns::CPF, $cpf);
    }

    public static function validateTelefone($telefone)
    {
        return self::validate(RegexPatterns::TELEFONE, $telefone);
    }

    public static function validateData($data)
    {
        return self::validate(RegexPatterns::DATA, $data);
    }

    public static function validateCep($cep)
    {
        return self::validate(RegexPatterns::CEP, $cep);
    }

    public static function validateEndereco($endereco)
    {
        return self::validate(RegexPatterns::ENDERECO, $endereco);
    }

    public static function validateNumeroEndereco($numero)
    {
        return self::validate(RegexPatterns::NUMERO_ENDERECO, $numero);
    }

    public static function validateBairro($bairro)
    {
        return self::validate(RegexPatterns::BAIRRO, $bairro);
    }

    public static function validateCidade($cidade)
    {
        return self::validate(RegexPatterns::CIDADE, $cidade);
    }

    public static function validateEstado($estado)
    {
        return self::validate(RegexPatterns::ESTADO, $estado);
    }

    public static function validateComplemento($complemento)
    {
        return self::validate(RegexPatterns::COMPLEMENTO, $complemento);
    }

    public static function validatePais($pais)
    {
        return self::validate(RegexPatterns::PAIS, $pais);
    }

    public static function validateNumeroCelular($numero)
    {
        return self::validate(RegexPatterns::NUMERO_CELULAR, $numero);
    }

    public static function validateNumeroFixo($numero)
    {
        return self::validate(RegexPatterns::NUMERO_FIXO, $numero);
    }

    public static function validateNumeroCpf($numero)
    {
        return self::validate(RegexPatterns::NUMERO_CPF, $numero);
    }


    public static function checkTerm($term, $value)
    {
        if (!preg_match($term, $value)) {
            RegexValidationException::raise($term, $value , 'Invalide term:');
        }
        return true;

    }


}