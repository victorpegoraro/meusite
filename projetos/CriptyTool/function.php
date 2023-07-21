<?php


//Criptografia
function encrypt_msg($mensagem,$usuario){

  $ciphering = "AES-128-CTR";
  $iv_length = openssl_cipher_iv_length($ciphering); 
  $options = 0;
  $encryption_iv = "3375492483567401";
  $prekey =  md5($usuario) . sha1($usuario);
  $encryption_key = $prekey;
  $encryption = openssl_encrypt($mensagem, $ciphering, 
          $encryption_key, $options, $encryption_iv);

  return($encryption);
}

function  decrypy_msg($mensagem,$usuario){

  $ciphering = "AES-128-CTR";
  $iv_length = openssl_cipher_iv_length($ciphering); 
  $options = 0;
  $decryption_iv = "3375492483567401";
  $prekey =  md5($usuario) . sha1($usuario);
  $decryption_key = $prekey;
  $decryption=openssl_decrypt ($mensagem, $ciphering,  
      $decryption_key, $options, $decryption_iv);

  return($decryption);
}


function gerar_senha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
  $senha = '';
  $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
  $mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
  $nu = "0123456789"; // $nu contem os números
  $si = "!@#$%¨&*()_+="; // $si contem os símbolos

  if ($maiusculas){
        // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($ma);
  }

    if ($minusculas){
        // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($mi);
    }

    if ($numeros){
        // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($nu);
    }

    if ($simbolos){
        // se $simbolos for "true", a variável $si é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($si);
    }

    // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
    return substr(str_shuffle($senha),0,$tamanho);
}


?>