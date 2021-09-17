<?php

function lerArquivo($nomeArquivo){

    $arquivo = file_get_contents($nomeArquivo);

    $arquivoArr = json_decode($arquivo);

    return $arquivoArr;

}

function realizarLogin($usuario, $senha, $dados){

    foreach ($dados as $dado) {
     
        if ($dado->$usuario == $usuario && $dado->$senha == $senha) {

            //variavel
            $_SESSION["usuario"] = $dado->usuario;
            $_SESSION["ID"] = session_id();
            $_SESSION["data_hora"] = date('d/m/Y - h:i:s');

            header('localtion: area_retrita.php');
            exit;



        }else{
            header('localtion: indexss.php');
            exit;

        }
    }

}