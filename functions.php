<?php
    // Funzione che genera la password
    function generatePassword($pass){
        $password = [];
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHILMNOPQRSTUVWXYZ0123456789!,;.:-_';

        $characters_length = strlen($characters) - 1;

        for($i = 0; $i < $pass; $i++){
            $index = rand(0, $characters_length);
            $password[] = $characters[$index];
        }
        
        return implode($password);
    }
?>