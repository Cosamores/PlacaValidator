class PlacaValidator {
    public function validaPlaca($placa) {
        // Verifica se a placa tem exatamente 7 caracteres
        if (strlen($placa) != 7) {
            return false;
        }

        // Verifica se os três primeiros caracteres são letras
        if (!ctype_alpha(substr($placa, 0, 3))) {
            return false;
        }

        // Verifica se o quarto caractere é um número
        if (!ctype_digit($placa[3])) {
            return false;
        }

        // Verifica se o quinto caractere é uma letra
        if (!ctype_alpha($placa[4])) {
            return false;
        }

        // Verifica se os dois últimos caracteres são números
        if (!ctype_digit(substr($placa, 5, 2))) {
            return false;
        }

        // Verifica se a placa não contém caracteres especiais
        if (!ctype_alnum($placa)) {
            return false;
        }

        // Se passou por todas as verificações, a placa é válida
        return true;
    }
}

$validator = new PlacaValidator();
if ($validator->validaPlaca('ABC1D23')) {
    echo "A placa é válida.";
} else {
    echo "A placa é inválida.";
}
