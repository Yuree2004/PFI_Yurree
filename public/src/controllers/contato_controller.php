<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["school"]) && !empty($_POST["QTD_alunos"]) && !empty($_POST["date"])) {
        $nome = $_POST["name"];
        $email = $_POST["email"];
        $escola = $_POST["school"];
        $qtd_alunos = $_POST["QTD_alunos"];
        $data = $_POST["date"];
        $messagem = $_POST["message"];


        try {
            require_once "../database/conexao.php";
            //require_once "./email.inc.controller.php";

            $query = "INSERT INTO contato (email, nome, escola, qtd_alunos, dia, mensagem) VALUES 
                (?, ?, ?, ?, ?, ?);";

            $stnt = $database->prepare($query);
            $stnt->execute([$email, $nome, $escola, $qtd_alunos, $data, $messagem]);

            $database = null;
            $stnt = null;

            header("location: ../../html/index.html");
            die();
        } catch (Exception $e) {
            if ($e->getCode() == 23000) {
                header("location: ../../html/contato.php?error=");
            }
            die("Query failed:" . $e->getCode());
        }
    } else {
        echo '' . $_POST["name"] . ';' . $_POST["email"] . ';' . $_POST["school"] . ';' . $_POST["QTD_alunos"] . ';' . $_POST["date"] . ';' . $_POST["message"] . '';
        header("location: ../../html/contato.html");
    }
} else {
    //echo 'DEU RUIM';
    header("location: ../../html/contato.html");
}
