<?php include('connect.php') ?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../admin/index.php">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-solid fa-business-time"></i>
    </div>
    <div class="sidebar-brand-text mx-3"> G-TMS <sup> v?? </sup> </div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="dashboard.php">
      <i class="fas fa-fw fa-tachometer-alt"> </i>
      <span> Dashboard </span>
    </a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Heading -->
  <div class="sidebar-heading"> Interface </div>
  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="charts.php">
      <i class="fas fa-fw fa-list"> </i>
      <span> Assigned Tasks </span>
    </a>
  </li>
  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="tables.php">
      <i class="fas fa-fw fa-sticky-note"> </i>
      <span> To-Do </span>
    </a>
  </li>
  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="tables.php">
      <i class="fas fa-fw fa-circle-notch"> </i>
      <span> In-Progress </span>
    </a>
  </li>
  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="tables.php">
      <i class="fas fa-fw fa-check"> </i>
      <span> Finished </span>
    </a>
  </li>
  <!-- Utilities -->
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-archive"> </i>
      <span> Records </span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header"> Components: </h6>
        <a class="collapse-item" href="buttons.php"> Assigned Tasks </a>
        <a class="collapse-item" href="cards.php"> Performance </a>
      </div>
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"> </button>
  </div>
</ul>