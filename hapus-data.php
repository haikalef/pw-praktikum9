<?php

require 'index.php';

$id = $_GET["id"];

if( hapusData($id) > 0) {
    echo "
        <script>
            alert('data telah dihapus!');
            document.location.href = 'table.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data tidak berhasil dihapus!');
            document.location.href = 'table.php';
        </script>
    ";
}
?>