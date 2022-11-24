<!-- Sidebar -->
<div class="row">
  <div class="col-1 vh-100 d-flex flex-column flex-shrink-0 p-3 text-white bg-blue" style="width: 280px;">
    <a href="/" class="d-flex align-items-center justify-content-sm-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4 fw-bold">Webkuy</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="#" class="nav-link text-white">
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          Management Users
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="mx-2 d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <!-- <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2"> -->
        <strong>Admin</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Sign out</a></li>
      </ul>
    </div>
  </div>
  <div class="col">
    
  </div>
</div>

<!-- Main Section -->