 <!-- Sidebar Menu -->
 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Menu Utama
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              {{-- cek jika user admin --}}
              @can('is_admin')
              <li class="nav-item">
                <a href="/User" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data User</p>
                </a>
              </li>
              @endcan
              {{-- end --}}
              <li class="nav-item">
                <a href="/Barang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Jenis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data Jenis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Supplier" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data Supplier</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/BarangMasuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/BarangKeluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Keluar</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
                <a class="nav-link" onclick="return confirmLogout(event)">
                  <i class="fas fa-sign-out-alt nav-icon"></i>
                  <p>Logout</p>
                </a>
            </li>
          </li>
        </ul>
      </nav>

      <script>
        function confirmLogout(event) {
            event.preventDefault();
            Swal.fire({
            title: "Yakin?",
            text: "Yakin Ingin Logout",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes!"
            }).then((result) => {
            if (result.isConfirmed) {
                window.location="/actionlogout";
            }
            });
        }
    </script>
      <!-- /.sidebar-menu -->