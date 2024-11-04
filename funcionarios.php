<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    include "conexao.php";

    $sql = "SELECT * FROM funcionarios
            WHERE email = '$email'
            AND senha = '$senha' ";

    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "Liberado!";
        header('location: home.html');
    } else {
        echo "Usuário ou senha invalidos!";
        echo "<a href= 'index.html'>Voltar</a>";
    }
}