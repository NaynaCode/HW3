<?php

    if (isset($_POST['submit']) && $_POST['submit'] == "Prikazi" && isset($_POST['id_predmeta'])) {
        $prijava = Prijava::getById($conn, $_POST['id_predmeta']);
        
        if ($prijava) {
            echo json_encode($prijava); 
        } else {
            echo "neuspešno dobijanje podataka";
        }
    }
?>
