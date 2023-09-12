<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Seznam zákazníkú</h6>
    </div>
    <div class="card-body">
<?php
    echo '<div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Příjmení</th>
                    <th>Jméno</th>
                    <th>Email</th>
                    <th>Telefon</th>

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Příjmení</th>
                    <th>Jméno</th>
                    <th>Email</th>
                    <th>Telefon</th>

                </tr>
            </tfoot>
            <tbody>';
        Databaze::seznamZakazniku();
    echo '</tbody>
        </table>
        </div>';
?>
    </div>
</div>