<nav class="navbar navbar-expand-lg">
    <div class="container-fluid bg-white fixed-top py-2">
<img src="Images/BrandLogoTXT.png" class="mx-md-auto">

<button 
class="navbar-toggler bg-secondary navbar-light border" 
type="button"
data-bs-toggle="collapse" 
data-bs-target="#navmenu"
aria-label="Toggle navigation"
aria-expanded="false">


<span class="navbar-toggler-icon"></span>
</button>

<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<div class="collapse navbar-collapse solo-nav" id="navmenu">
    <ul class="navbar-nav ms-md-auto">
        <li class="nav-item mr-md-5">
            <a href="index" class="nav-link <?= ($activePage == 'index') ? 'active': ''; ?>"> Home<span class="text-piped"></span></a>

        </li>
        <li class="nav-item mr-md-2">
            <a href="OverOns" class="nav-link <?= ($activePage == 'OverOns') ? 'active': ''; ?>"> Over ons<span class="text-piped"></span></a>
        </li>
        <li class="nav-item mr-md-2">
            <a href="inlogpagina" class="nav-link <?= ($activePage == 'Documenten') ? 'active': ''; ?>"> Documenten<span class="text-piped"></span></a>
        </li>
        <li class="nav-item mr-md-2">
            <a href="Contact" class="nav-link <?= ($activePage == 'Contact') ? 'active': ''; ?>"> Contact</a>
        </li>
    </ul>
</div>
</div>
</nav>
