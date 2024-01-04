<?php
require_once('config/database.php');

$connection = getConnection();
if ($connection) {
    echo 'Conexão bem-sucedida!'; 
} else {
    echo 'Falha ao conectar ao banco de dados!'; 
}
?>
