<?php
namespace Rotaz\Support\Regex;

class RegexPatterns
{
    public const TELEFONE = '/^\(\d{2}\) \d{4,5}-\d{4}$/';
    public const CPF = '/^\d{3}\.\d{3}\.\d{3}-\d{2}$/';
    public const DATA = '/^\d{2}\/\d{2}\/\d{4}$/';
    public const DATA_NASCIMENTO = '/aniversário|nascimento/i';
    public const ENDERECO_TERMO = '/endereço|endereco/i';
    public const EMAIL = '/^[\w\-\.]+@[\w\-\.]+\.[\w\-]{2,4}$/';
    public const TELEFONE_CEL = '/^\(\d{2}\) \d{5,6}-\d{4}$/';
    public const CEP = '/(?<!\) |\d-|\d\s)(\d{5}-\d{3})/';
    public const ENDERECO = '/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/';
    public const NUMERO_ENDERECO = '/^\d{1,5}$/';
    public const BAIRRO = '/^[a-zA-Z\s]+$/';
    public const CIDADE = '/^[a-zA-Z\s]+$/';
    public const ESTADO = '/^[a-zA-Z\s]+$/';
    public const COMPLEMENTO = '/^[a-zA-Z\s]+$/';
    public const PAIS = '/^[a-zA-Z\s]+$/';
    public const NUMERO_CELULAR = '/^\d{10}$/';
    public const NUMERO_FIXO = '/^\d{8}$/';
    public const NUMERO_CPF = '/^\d{11}$/';
}