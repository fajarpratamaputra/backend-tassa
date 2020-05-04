
<style>
li.nav-item {
		display: inline-block;
	}

	.nav-item:hover .isi-dropdown {
		display: block;
	}

	.isi-dropdown a:hover {
		color: #fff !important;
	}

	.isi-dropdown {
		position: absolute;
		display: none;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		background-color: #f9f9f9;
	}

	.isi-dropdown a {
		color: #3c3c3c !important;
	}

	.isi-dropdown a:hover {
		color: #232323 !important;
		background: #f3f3f3 !important;
	}
</style>
<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="<?=base_url('assets/backend/') ?>images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1">Dashboard Tassa.id</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="<?=base_url("dashboard/")?>">
                  <i class="material-icons">edit</i>
                  <span>Blog Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?=base_url("products/")?>">
                  <i class="material-icons">vertical_split</i>
                  <span>Products</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?=base_url("categories/")?>">
                  <i class="material-icons">vertical_split</i>
                  <span>Category</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="material-icons">vertical_split</i>  
                  <span>Information</span>
                
                </a>
                <ul class="isi-dropdown">
                  <li><a class="nav-link" href="<?=base_url("setting/")?>">Web Setting</a></li>
                  <li><a class="nav-link" href="<?=base_url("faq/")?>">FAQ</a></li>
                  <li><a class="nav-link" href="<?=base_url("information/about")?>">About Us</a></li>
                  <li><a class="nav-link" href="<?=base_url("information/how")?>">How To Shop</a></li>
                  <li><a class="nav-link" href="<?=base_url("information/shipping")?>">Shipping</a></li>
                  <li><a class="nav-link" href="<?=base_url("information/payment")?>">Payment</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="material-icons">vertical_split</i>  
                  <span>Picture</span>
                
                </a>
                <ul class="isi-dropdown">
                  <li><a class="nav-link" href="<?=base_url("banner/")?>">Banner</a></li>
                  <li><a class="nav-link" href="<?=base_url("quote/")?>">Quote</a></li>
                  <li><a class="nav-link" href="<?=base_url("footpicture/")?>">Footer Picture</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="material-icons">vertical_split</i>  
                  <span>Transaction</span>
                
                </a>
                <ul class="isi-dropdown">
                  <li><a class="nav-link" href="<?=base_url("cart/")?>">Cart</a></li>
                  <li><a class="nav-link" href="<?=base_url("order/")?>">Order</a></li>
                  <li><a class="nav-link" href="<?=base_url("customer/")?>">Customer</a></li>
                </ul>
              </li>
              
              <li class="nav-item">
                <a class="nav-link " href="<?=base_url("users/profile")?>">
                  <i class="material-icons">person</i>
                  <span>User Profile</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="<?=base_url("login/logout")?>">
                <i class="fas fa-sign-out-alt"></i>
                  <span>Logout</span>
                </a>
              </li>
              
            </ul>
          </div>
        </aside>