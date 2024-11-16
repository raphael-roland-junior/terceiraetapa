<?php
    include "conexao.php";

    if(isset($_POST['loginusuario'])){
        //entrada
        $loginusuario = trim($_POST['loginusuario']);
        $senha = trim($_POST['senha']);
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $endereco = trim($_POST['endereco']);
        $cpf = trim($_POST['cpf']);
        $telefone = trim($_POST['telefone']);

        //criptografia hash
        $senha_hash = password_hash($senha,PASSWORD_DEFAULT);

        //verificar se o login exite
        $sql = "select * from usuario where loginusuario = '$loginusuario'";
        $teste_loginusuario = mysqli_query($conexao,$sql);
        $existe = mysqli_num_rows($teste_loginusuario);

        if($existe){
            echo "
                <script> 
                    alert('Login já cadastrado. Tente outro Login');
                    history.back();
                </script>
            ";
        }
        else{
            //processamento - inserindo dados no banco de dados
            $sql = "insert into usuario(loginusuario,senha,nome,email,endereco,cpf,telefone) values('$loginusuario','$senha_hash','$nome','$email','$endereco','$cpf','$telefone')";
            $cadastrar = mysqli_query($conexao,$sql);

            //saida feedback ao usuário
            if($cadastrar){
                echo "
                    <script> 
                        alert('Usuario Cadastrado com Sucesso!');
                        window.location = 'crud.php';
                    </script>
                ";
            }
            else{
                echo "
                    <p> Banco de dados Temporariamente fora do ar. Tente novamente mais tarde. Entre em contato com o adminitrador do site para reportar o problema.  </p>

                    <p> Clique <a href='formulario.php'> aqui </a> para retornar ao formulário de cadastro </p>
                ";
                echo mysqli_error($conexao);
            }
        }
    }
    else{//tratamento de erro e redirecionamento
        echo "
            <p> Esta é uma página de tratamento de dados </p>
            <p> Clique <a href='formulario.php'> aqui </a> para a acessar o formulário de cadastro </p>
        ";
    }

?>