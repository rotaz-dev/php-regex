# php-regex

Coleção de expressões regulares e validadores PHP para tarefas do cotidiano (CPF, telefone, e-mail, data, endereço, etc).

## Instalação

```bash
composer require rotaz-dev/php-regex
```

## Exemplos de Uso

```php
use PhpRegex\Regex\Validator;

try {
    Validator::validateCpf('123.456.789-00');
    Validator::validateEmail('exemplo@email.com');
} catch (\PhpRegex\Exception\ValidationException $e) {
    echo $e->getMessage();
}
```

## Contribuições

Contribuições são bem-vindas! Sinta-se livre para abrir issues ou enviar pull requests.