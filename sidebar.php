<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <!-- sidebar Name -->
        <div class="sidebar-brand-text mx-3">Farishta's Store</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      
      <li class="nav-item"> <!-- start store product -->
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Product</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">product</h6>
            <a class="collapse-item" href="add_product.php">Add Product</a>
            <a class="collapse-item" href="list_of_product.php">Product List</a>
          </div>
        </div>
      </li> <!-- end add product -->
      <!-- start store product  -->
      <!-- <li class="nav-item"> 
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Store Product</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Store Product</h6>
            <a class="collapse-item" href="add_store_product.php">Add Store Product</a>
            <a class="collapse-item" href="list_of_store_product.php">Store Product List</a>
          </div>
        </div> -->
      </li> <!-- end store product -->
      <li class="nav-item"> <!-- start Sell Product -->
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSpend" aria-expanded="true"
          aria-controls="collapseSpend">
          <i class="fas fa-fw fa-table"></i>
          <span>Sell Product</span>
        </a>
        <div id="collapseSpend" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sell Product</h6>
            <a class="collapse-item" href="add_spend_product.php">Sell Product</a>
            <a class="collapse-item" href="list_of_spend_product.php">Sell Product List</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Category</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Category</h6>
            <a class="collapse-item" href="add_category.php">Add Category</a>
            <a class="collapse-item" href="list_of_category.php">Category List</a>
          </div>
        </div>
      </li>
      <!-- end Sell Product -->
      
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Report Part
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Report</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Report</h6>
            <a class="collapse-item" href="report.php">Product Report</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Users Part
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseuser" aria-expanded="true"
          aria-controls="collapseuser">
          <i class="fas fa-fw fa-columns"></i>
          <span>Users</span>
        </a>
        <div id="collapseuser" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Users</h6>
            <a class="collapse-item" href="add_users.php">Add User</a>
            <a class="collapse-item" href="list_of_users.php">User List</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>