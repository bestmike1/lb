<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
       <!-- <i class="fas fa-laugh-wink"></i> -->
    </div>
    <div class="sidebar-brand-text mx-3">LB  Studio</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="index.php">
        <i class="fas fa-home"></i>
        <span>Home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Menu
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-address-book"></i>
        <span>Zákazník</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Zákaznické menu:</h6>
            <a class="collapse-item" href="index.php?zobraz=seznam_zakazniku">Seznam zákazníků</a>
            <a class="collapse-item" href="index.php?zobraz=pridej_zakaznika">Přidat zákazníka</a>
            <a class="collapse-item" href="index.php?zobraz=edituj_zakaznika">Editovat zákazníka</a>
            <a class="collapse-item" href="index.php?zobraz=smaz_zakaznika">Smazat zákazníka</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="	fas fa-book"></i>
        <span>Účto</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Účetní menu:</h6>
            <a class="collapse-item" href="#">Colors</a>
            <a class="collapse-item" href="#">Borders</a>
            <a class="collapse-item" href="#">Animations</a>
            <a class="collapse-item" href="#">Other</a>
        </div>
    </div>
</li> -->

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetings"
        aria-expanded="true" aria-controls="collapseSetings">
        <i class="	fas fa-book"></i>
        <span>Nastavení, nakup / prodej</span>
    </a>
    <div id="collapseSetings" class="collapse" aria-labelledby="headingSetings"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Nastavení, nakup / prodej:</h6>
            <a class="collapse-item" href="#">Nákup materiálu</a>
            <a class="collapse-item" href="#">Prodej materiálu</a>
            <a class="collapse-item" href="#">Přidání služby</a>
            <a class="collapse-item" href="#">Přidání materiálu</a>
        </div>
    </div>
</li>            

<!-- Divider -->


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>