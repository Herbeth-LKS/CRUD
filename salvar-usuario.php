<?php


switch($_REQUEST['acao']){

    case 'cadastrar' :

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data_nasc = $_POST['data_nasc'];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', MD5('{$senha}'), '{$data_nasc}') ";

        $resultado = $conn->query($sql);

        if($resultado==True){

            echo "<script>alert('usuario cadastrado com sucesso!')</script>";
            echo "<script>location.href='?page=listar'</script>";

        }else{
            echo "<script>alert('erro ao salvar')</script>";
            echo "<script>location.href='?page=listar'</script>";
        }


        break;

    case 'editar' :

        break;

    case 'excluir' :

        break;
    
}