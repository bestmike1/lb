<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Smaž zákazníka</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Seznam zákazníkú</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
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
                <tbody>
                    <?php
                        Databaze::smazZakaznika();
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>