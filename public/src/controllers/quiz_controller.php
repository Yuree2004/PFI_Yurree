<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["escola"]) && !empty($_POST["pergunta1"]) && !empty($_POST["pergunta2"]) && !empty($_POST["pergunta3"]) && !empty($_POST["pergunta4"]) && !empty($_POST["pergunta5"]) && !empty($_POST["pergunta6"]) && !empty($_POST["pergunta7"]) && !empty($_POST["pergunta8"]) && !empty($_POST["pergunta9"]) && !empty($_POST["pergunta10"]) && !empty($_POST["pergunta11"]) && !empty($_POST["pergunta12"]) && !empty($_POST["pergunta13"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $escola = $_POST["escola"];
        $pergunta_1 = $_POST["pergunta1"];
        $pergunta_2 = $_POST["pergunta2"];
        $pergunta_3 = $_POST["pergunta3"];
        $pergunta_4 = $_POST["pergunta4"];
        $pergunta_5 = $_POST["pergunta5"];
        $pergunta_6 = $_POST["pergunta6"];
        $pergunta_7 = $_POST["pergunta7"];
        $pergunta_8 = $_POST["pergunta8"];
        $pergunta_9 = $_POST["pergunta9"];
        $pergunta_10 = $_POST["pergunta10"];
        $pergunta_11 = $_POST["pergunta11"];
        $pergunta_12 = $_POST["pergunta12"];
        $pergunta_13 = $_POST["pergunta13"];

        try {
            require_once("../database/conexao.php");

            $query = "INSERT INTO quiz (nome, email, escola, pergunta1, pergunta2, pergunta3, pergunta4, pergunta5, pergunta6, pergunta7, pergunta8, pergunta9, pergunta10, pergunta11, pergunta12, pergunta13) VALUES 
                (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

            $stnt = $database->prepare($query);

            $stnt->execute([$nome, $email, $escola, $pergunta_1, $pergunta_2, $pergunta_3, $pergunta_4, $pergunta_5, $pergunta_6, $pergunta_7, $pergunta_8, $pergunta_9, $pergunta_10, $pergunta_11, $pergunta_12, $pergunta_13]);

            $database = null;
            $stnt = null;

            header("location: ../../html/index.html");

            die();
        } catch (PDOException $e) {
            die("Query failed:" . $e->getMessage());
        }
    } else {
        //echo 'Va';
        //echo ''.$_POST["name"].';'.$_POST["email"].';'.$_POST["school"].';'. $_POST["QTD_alunos"]. ';'. $_POST["date"]. ';'.$_POST["message"].'';
        header("location: ../../html/quiz.html");
    }
} else {
    //echo 'DEU RUIM';
    header("location: ../../html/quiz.html");
}
?>