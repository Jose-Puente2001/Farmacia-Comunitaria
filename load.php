<?php

require_once 'farmacia.php';

$columns = ['id_personas', 'nom', 'ape', 'cedula', 'medicamento', 'entrega'];
$table = "personas";

$buscar = isset($_POST['buscar']) ? $conn->real_escape_string($_POST['buscar']) : null;

$where = '';

if($buscar != null){
    $where = "WHERE (";

    $cont = count($columns);
    for($i = 0; $i < $cont; $i++){
        $where .= $columns[$i] . "  LIKE '%". $buscar . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

$sql = "SELECT " . implode(", ", $columns) . "
FROM $table
$where ";
$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;

$html = '';

if($num_rows) {
    while ($row = $resultado->fetch_assoc()){
        $html .= '<tr>';
        $html .= '<td>' . $row['id_personas'] . '</td>';
        $html .= '<td>' . $row['nom'] . '</td>';
        $html .= '<td>' . $row['ape'] . '</td>';
        $html .= '<td>' . $row['cedula'] . '</td>';
        $html .= '<td>' . $row['medicamento'] . '</td>';
        $html .= '<td>' . $row['entrega'] . '</td>';
        $html .= '<td><a href="">Editar</a></td>';
        $html .= '<td><a href="">Eliminar</a></td>';
        $html .= '</tr>';
    }
}else{
    $html .= '<tr>';
    $html .= '<td colspan="9">Sin Resultados</td>';
    $html .= '</tr>'; 
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
