<h1>listar usuarioss</h1>

<?php

$sql = 'SELECT * FROM usuarios;';

$resultado = $conn->query($sql);

$quantidade = $resultado->num_rows;



if ($quantidade > 0) {
    echo '<table class="table table-hover table-striped table-bordered">';

    echo "<tr>
    <th>id</th>
    <th>nome</td>
    <th>email</td>
    <th>data de nascimento</td>
    </tr>";

    while($row = $resultado->fetch_object()) {

        echo "<tr>
        <td>{$row->id}</td>
        <td>{$row->nome}</td>
        <td>{$row->email}</td>
        <td>{$row->data_nasc}</td>
        <td><button onclick='location.href=?page=editar&id='.$row->id'' class='btn btn-success'>editar</button>
        <button class='btn btn-danger'>excluir</button>
        </td>
        </tr>";
        
    }
    echo "</table>";
}else {

    echo "Nenhum usuario cadastrado";

}