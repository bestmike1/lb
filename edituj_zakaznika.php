<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Seznam zákazníkú</h6>
    </div>
    <div class="card-body">
<?php

    if (isset($_POST['firstName']))
    {
        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        Databaze::editujZakaznika($id, $firstName, $lastName, $email, $phone);
        echo "
        <h1>Úspěšně editováno</h1>
        <script>
            setTimeout(function(){window.location = 'index.php?zobraz=edituj_zakaznika';}, 2500);
        </script>";
    }
    else if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $uzivatel = Databaze::vratZakaznika($id);
        $firstName = $uzivatel['jmeno'];
        $lastName = $uzivatel['prijmeni'];
        $email = $uzivatel['email'];
        $phone = $uzivatel['telefon'];
        echo Form::printUpdate("index.php?zobraz=edituj_zakaznika", $id, $firstName, $lastName, $email, $phone);
    } else {
        echo '<div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Příjmení</th>
                    <th>Jméno</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Akce</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Příjmení</th>
                    <th>Jméno</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Akce</th>
                </tr>
            </tfoot>
            <tbody>';
        Databaze::vypisZakazniky("index.php?zobraz=edituj_zakaznika", "Edituj");
        echo '</tbody>
        </table>
        </div>';
    }
?>
    </div>
</div>