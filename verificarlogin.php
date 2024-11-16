<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginusuario = $_POST['loginusuario'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM usuario WHERE loginusuario = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $loginusuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($senha, $user['senha'])) {
            // Salva os dados do usuário na sessão
            $_SESSION['usuario_id'] = $user['id'];
            $_SESSION['loginusuario'] = $user['loginusuario'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['telefone'] = $user['telefone'];
            $_SESSION['endereco'] = $user['endereco'];
            $_SESSION['cpf'] = $user['cpf'];

            header("Location: dashboard.php");
            exit;
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}
?>
