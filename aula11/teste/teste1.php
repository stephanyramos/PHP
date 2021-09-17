
    <?php
     
    //CRIANDO UMA SESSÃO
     
    session_start();
     
    //verificando o id da sessão
    echo session_id();
     
    //CRIANDO VARIÁVEIS DE SESSÃO
    $_SESSION["nome"] = "STEPHANY RAMOS";
     
    $nome = "STEPHANY RAMOS";
    echo$nome;
    
    