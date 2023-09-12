<!-- Page Heading -->
<?php
    if (isset($_POST['submit']))
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        Databaze::pridejZakaznika($firstName, $lastName, $email, $phone);
        echo "
        <h1>Zákazník přidán</h1>
        <script>
            setTimeout(function(){window.location = 'index.php?zobraz=seznam_zakazniku';}, 2500);
        </script>";
    }
    else{
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Přidání zákazníka</h1>
</div>
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Přidej zákazníka</h1>
                            </div>
                            <?php
                                echo Form::printInsert("index.php?zobraz=pridej_zakaznika");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    }
?>