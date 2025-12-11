<?php

class Validator_Encapsulation {

    // property internal yang harus dilindungi
    protected array $_inputType = [];
    private array $errors = [];

    public function setInput(array $input): void {
        $this->_inputType = $input;
    }

    public function addError(string $field, string $msg): void {
        $this->errors[$field] = $msg;
    }

    public function getErrors(): array {
        return $this->errors;
    }
}
