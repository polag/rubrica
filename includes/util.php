<?php
function get_table_head($assoc_array)
{

    $keys = array_keys($assoc_array);
    $html = '';

    foreach ($keys as $key) {
        $html .= "<th>" . ucfirst($key) . "</th>";
    }

    return $html;
}

function get_table_body($items)
{

    $html = '';

    foreach ($items as $row) {
        $html .= '<tr>';
        foreach ($row as $key => $value) {
            if ($key === "Nome") {
                if (isset($_GET['id'])) {
                    $html .= "<td>$value</td>";
                } else {
                    $html .= "<td><a href='/rubrica-paula/dettaglio-contatto.php?id={$row['ID']}'>$value</a></td>";
                }
            } elseif ($key === "Telefono") {
                $html .= "<td><a href='tel:$value'>$value</a></td>";
            } else {
                $html .= "<td>$value</td>";
            }
        }
        // if (!isset($_GET['id'])) {
        $html .= '<td><a href="/rubrica-paula/includes/cancella-contatto.php?id=' . $row['ID'] . '"><i class="fas 
        fa-times"></i></a></td>';
        $html .= '<td><a href="/rubrica-paula/modifica-contatto.php?id=' . $row['ID'] . '"><i class="fas fa-pen">
        </i></a></td>';
        // }
        $html .= '</tr>';
    }

    return $html;
}

function show_alert($action_type, $state)
{

    if ($state === 'ko') {
        echo '<div class="alert alert-danger" role="alert">Ops! C\'è stato un problema, riprova più tardi.</div>';
        return false;
    }

    if ($action_type === 'cancellazione') {
        if ($state === 'ok') {
            echo '<div class="alert alert-success" role="alert">Contatto eliminato con successo.</div>';
        }
    } elseif ($action_type === 'modifica') {
        if ($state === 'ok') {
            echo '<div class="alert alert-success" role="alert">Contatto aggiornato con successo.</div>';
        }
    } elseif ($action_type === 'inserimento') {
        if ($state === 'ok') {
            echo '<div class="alert alert-success" role="alert">Contatto inserito con successo.</div>';
        } elseif ($state === 'errore') {
            echo '<div class="alert alert-danger" role="alert"><ul>';
            $error_messages = explode("|", $_GET['messages']);
            foreach ($error_messages as $error) {
                echo "<li>$error</li>";
            }
            echo '</ul></div>';
        }
    }
}
