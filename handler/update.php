<?php

    if (isset($_POST['submit']) && $_POST['submit'] == "izmeni" && isset($_POST['id_predmeta'])) {
        $id = $_POST['id_predmeta'];
        $predmet = $_POST['predmet'];
        $katedra = $_POST['katedra'];
        $sala = $_POST['sala'];
        $datum = $_POST['datum'];

        $status = Prijava::update($conn, $id, $predmet, $katedra, $sala, $datum);

        if ($status) {
            echo "uspešno ažurirano";
        } else {
            echo "neuspešno ažuriranje";
        }
    }
?>
