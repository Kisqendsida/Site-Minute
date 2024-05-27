<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('user')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Utilisateur</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('user')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span> Tableau de bord</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Informations sur le champ
        </div>
    <!--Orders -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('user.pages.eau')}}">
            <i class="fas fa-tint"></i>
            <span>Etat du réservoir d'eau</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('user.pages.temperature')}}">
            <i class="fas fa-thermometer-full"></i>
            <span>La température du champ </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('user.pages.humide')}}">
            <i class="fas fa-cloud-rain"></i>
            <span>L'humidité du champ </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('user.pages.historique')}}">
            <i class="fas fa-clock"></i>
            <span>L'historique d'arrosage </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('user.pages.maintenance')}}">
            <i class="fas fa-wrench"></i>
            <span>Planning de maintenance</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('user.pages.jour')}}">
            <i class="fas fa-sync"></i>
            <span>Les mises à jour </span>
        </a>
    </li>

    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Postes
    </div>
    <!-- Comments -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('user.post-comment.index')}}">
          <i class="fas fa-comments fa-chart-area"></i>
          <span>Commentaires</span>
      </a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>