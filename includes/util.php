<?php
function get_table_head($assoc_array)
{

    $keys = array_keys($assoc_array);
    $html = '';

    foreach ($keys as $key) {
        $html .= "<th>".ucfirst($key)."</th>";
    }

    return $html;
}

function get_table_body($items)
{

    $html = '';

    foreach ($items as $row) {
        $html .= '<tr>';
        foreach ($row as $key => $value) {
           
            if ($key === "nome") {
                if (isset($_GET['id'])) {
                    $html .= "<td>$value</td>";
                } else {
                    $html .= "<td><a href='/rubrica/dettaglio-contatto.php?id={$row['id']}'>$value</a></td>";
                }
            }else if ($key === "telefono") {
                $html .= "<td><a href='tel:$value'>$value</a></td>";
            } else {
                $html .= "<td>$value</td>";
            }
        }
       // if (!isset($_GET['id'])) {
            $html .= '<td><a href="/rubrica/includes/cancella-contatto.php?id=' . $row['id'] . '"><i class="fas fa-times"></i></a></td>';
            $html .= '<td><a href="/rubrica/modifica-contatto.php?id=' . $row['id'] . '"><i class="fas fa-pen"></i></a></td>';
       // }
        $html .= '</tr>';
    }

    return $html;
}

