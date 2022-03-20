  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link  bg-dark">
      <img src="<?= base_url() ?>assets/iconhead-pth.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;margin-top: 5px">

      <span class="brand-text font-weight text-primary text-bold" style="font-size: 25px">SMAN3BJN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/avatar.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin SMAGA</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url() ?>admin" class="nav-link <?php if ($this->session->flashdata('menu') == "dashboard") {
                                                                echo "active";
                                                              } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php if ($this->session->flashdata('menu') == "page") {
                                          echo "active";
                                        } ?>">
              <i class="nav-icon far fa-newspaper"></i>
              <p>
                Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/page') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/tambah_page') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Baru</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php if ($this->session->flashdata('menu') == "berita") {
                                          echo "active";
                                        } ?>">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Post
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/berita') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/tambah_berita') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/tipe_post') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipe Post</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php if ($this->session->flashdata('menu') == "category") {
                                          echo "active";
                                        } ?>">
              <i class="nav-icon far fa-file-alt"></i>
              <p>
                Categories & Tags
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/categories') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/tags') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tags</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php if ($this->session->flashdata('menu') == "product") {
                                          echo "active";
                                        } ?>">
              <i class="fab fa-product-hunt  nav-icon"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/product') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/product/add') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/product/category') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category Product</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item has-treeview">
            <a href="<?= base_url('admin/aspirasi_publik') ?>" class="nav-link <?php if ($this->session->flashdata('menu') == "aspirasi") {
                                                                                  echo "active";
                                                                                } ?>">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Aspirasi Publik                
              </p>
            </a>
            
          </li> -->
          <li class="nav-item has-treeview">
            <a href="<?= base_url('admin/users') ?>" class="nav-link <?php if ($this->session->flashdata('menu') == "users") {
                                                                        echo "active";
                                                                      } ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>

          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('admin/change_password') ?>" class="nav-link <?php if ($this->session->flashdata('menu') == "password") {
                                                                                  echo "active";
                                                                                } ?>">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Change Password
              </p>
            </a>

          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('auth/logout') ?>" class="nav-link" onclick="return confirm('Anda yakin ingin logout ?')">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                logout
              </p>
            </a>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>