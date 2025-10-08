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

    public const URL = '/^(https?:\/\/)?([\w\-]+\.)+[\w\-]+(\/[\w\-._~:\/?#[\]@!$&\'()*+,;=]*)?$/';

    public const CPF_CNPJ = '/^(\d{2}\.?\d{3}\.?\d{3}\/?\d{4}-?\d{2})|(\d{3}\.?\d{3}\.?\d{3}\-?\d{2})$/';
    public const CNPJ = '/^(\d{2}\.?\d{3}\.?\d{3}\/?\d{4}-?\d{2})$/';

    public const CEP_BRASIL = '/^\d{5}-?\d{3}$/';
    public const CEP_INTERNACIONAL = '/^\d{5,10}$/';
    public const CEP_BRASIL_COMPLETO = '/^\d{5}-?\d{3}\s?\d{3}$/';
    public const CEP_INTERNACIONAL_COMPLETO = '/^\d{5,10}\s?\d{3}$/';
    public const CEP_BRASIL_COMPLETO_COM_BAIRRO = '/^\d{5}-?\d{3}\s?\d{3}\s?\w{1,20}$/';
    public const CEP_INTERNACIONAL_COMPLETO_COM_BAIRRO = '/^\d{5,10}\s?\d{3}\s?\w{1,20}$/';
    public const CEP_BRASIL_COMPLETO_COM_BAIRRO_COM_CIDADE = '/^\d{5}-?\d{3}\s?\d{3}\s?\w{1,20}\s?\w{1,20}$/';
    public const CEP_INTERNACIONAL_COMPLETO_COM_BAIRRO_COM_CIDADE = '/^\d{5,10}\s?\d{3}\s?\w{1,20}\s?\w{1,20}$/';

    public const BASIC_CREDENTIAL = '/^[a-zA-Z0-9]+$/';
    public const PASSWORD = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    public const PASSWORD_CONFIRMATION = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    public const PASSWORD_CONFIRMATION_WITH_NUMBER = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}\d{1,}$/';
    public const PASSWORD_CONFIRMATION_WITH_SPECIAL_CHARACTERS = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}\W{1,}$/';
    public const PASSWORD_CONFIRMATION_WITH_NUMBER_AND_SPECIAL_CHARACTERS = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}\W{1,}\d{1,}$/';
    public const PASSWORD_CONFIRMATION_WITH_NUMBER_AND_SPECIAL_CHARACTERS_AND_CAPITAL_LETTERS = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}\W{1,}\d{1,}[A-Z]{1,}$/';
    public const BEARER_TOKEN = '/^[A-Za-z0-9\-_]+\.[A-Za-z0-9\-_]+\.[A-Za-z0-9\-_]+$/';
    public const USER_NAME = '/^[a-zA-Z0-9_]+$/';
    public const USER_NAME_WITH_SPACE = '/^[a-zA-Z0-9_ ]+$/';
    public const USER_NAME_WITH_SPACE_AND_DOT = '/^[a-zA-Z0-9_ .]+$/';
    public const USER_NAME_WITH_SPACE_AND_DOT_AND_HYPHEN = '/^[a-zA-Z0-9_ .-]+$/';
    public const USER_NAME_WITH_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE = '/^[a-zA-Z0-9_ .-]+$/';
    public const USER_NAME_WITH_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE_AND_SLASH = '/^[a-zA-Z0-9_ .-\/]+$/';
    public const USER_NAME_WITH_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE_AND_SLASH_AND_COLON = '/^[a-zA-Z0-9_ .-\/:]+$/';
    public const USER_PASSWORD = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    public const USER_PASSWORD_CONFIRMATION = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    public const USER_PASSWORD_CONFIRMATION_WITH_NUMBER = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}\d{1,}$/';
    public const USER_PASSWORD_CONFIRMATION_WITH_SPECIAL_CHARACTERS = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}\W{1,}$/';
    public const USER_PASSWORD_CONFIRMATION_WITH_NUMBER_AND_SPECIAL_CHARACTERS = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}\W{1,}\d{1,}$/';
    public const OTP_CODE = '/^\d{6}$/';
    public const OTP_CODE_WITH_SPACE = '/^\d{6}$/';
    public const OTP_CODE_WITH_SPACE_AND_DOT = '/^\d{6}$/';
    public const OTP_CODE_WITH_SPACE_AND_DOT_AND_HYPHEN = '/^\d{6}$/';
    public const OTP_CODE_WITH_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE = '/^\d{6}$/';
    public const OTP_CODE_WITH_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE_AND_SLASH = '/^\d{6}$/';
    public const OTP_CODE_WITH_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE_AND_SLASH_AND_COLON = '/^\d{6}$/';
    public const OTP_CODE_WITH_NUMBER = '/^\d{6}$/';
    public const OTP_CODE_WITH_NUMBER_WITH_SPACE = '/^\d{6}$/';
    public const STR_LENGTH = '/^.{1,}$/';
    public const STR_LENGTH_WITH_SPACE = '/^.{1,}$/';
    public const STR_LENGTH_WITH_SPACE_AND_DOT = '/^.{1,}$/';
    public const STR_LENGTH_WITH_SPACE_AND_DOT_AND_HYPHEN = '/^.{1,}$/';
    public const STR_LENGTH_WITH_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE = '/^.{1,}$/';
    public const STR_LENGTH_WITH_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE_AND_SLASH = '/^.{1,}$/';
    public const STR_LENGTH_WITH_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE_AND_SLASH_AND_COLON = '/^.{1,}$/';
    public const STR_LENGTH_WITH_NUMBER = '/^.{1,}$/';
    public const STR_LENGTH_WITH_NUMBER_WITH_SPACE = '/^.{1,}$/';
    public const NUMBER = '/^[0-90]+$/';
    public const NUMBER_WITH_SPACE = '/^[0-90 ]+$/';
    public const NUMBER_WITH_SPACE_AND_DOT = '/^[0-90 .]+$/';
    public const NUMBER_WITH_SPACE_AND_DOT_AND_HYPHEN = '/^[0-90 .-]+$/';
    public const NUMBER_WITH_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE = '/^[0-90 .-]+$/';
    public const NUMBER_WITH_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE_AND_SLASH = '/^[0-90 .-\/]+$/';
    public const NUMBER_WITH_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE_AND_SLASH_AND_COLON = '/^[0-90 .-\/:]+$/';
    public const NUMBER_WITH_NUMBER = '/^[0-90]+$/';
    public const NUMBER_WITH_NUMBER_WITH_SPACE = '/^[0-90 ]+$/';

    public const STR_LENGTH_WITHOUT_SPACE = '/^\S{1,}$/';
    public const STR_LENGTH_WITHOUT_SPACE_AND_DOT = '/^\S{1,}$/';
    public const STR_LENGTH_WITHOUT_SPACE_AND_DOT_AND_HYPHEN = '/^\S{1,}$/';
    public const STR_LENGTH_WITHOUT_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE = '/^\S{1,}$/';
    public const STR_LENGTH_WITHOUT_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE_AND_SLASH   = '/^\S{1,}$/';
    public const STR_LENGTH_WITHOUT_SPACE_AND_DOT_AND_HYPHEN_AND_UNDERSCORE_AND_SLASH_AND_COLON = '/^\S{1,}$/';

    public const HTTP_CODE = '/^2\d{2}$/';
    public const HTTP_CODE_WITH_SPACE = '/^2\d{2}$/';
    public const HTTP_CODE_WITH_SPACE_AND_DOT = '/^2\d{2}$/';
    public const HTTP_CODE_BETWEEN_200_AND_299 = '/^2\d{2}$/';
    public const HTTP_CODE_BETWEEN_200_AND_299_WITH_SPACE = '/^2\d{2}$/';
    public const HTTP_CODE_BETWEEN_200_AND_299_WITH_SPACE_AND_DOT = '/^2\d{2}$/';
    public const HTTP_CODE_BETWEEN_300_AND_399 = '/^3\d{2}$/';
    public const HTTP_CODE_BETWEEN_300_AND_399_WITH_SPACE = '/^3\d{2}$/';
    public const HTTP_CODE_BETWEEN_300_AND_399_WITH_SPACE_AND_DOT = '/^3\d{2}$/';
    public const HTTP_CODE_BETWEEN_400_AND_499 = '/^4\d{2}$/';
    public const HTTP_CODE_BETWEEN_400_AND_499_WITH_SPACE = '/^4\d{2}$/';
    public const HTTP_CODE_BETWEEN_400_AND_499_WITH_SPACE_AND_DOT = '/^4\d{2}$/';
    public const HTTP_CODE_BETWEEN_500_AND_599 = '/^5\d{2}$/';
    public const HTTP_CODE_BETWEEN_500_AND_599_WITH_SPACE = '/^5\d{2}$/';
    public const HTTP_CODE_BETWEEN_500_AND_599_WITH_SPACE_AND_DOT = '/^5\d{2}$/';


}