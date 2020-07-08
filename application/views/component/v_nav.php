 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?=site_url('/dashboard')?>" class="brand-link">
      <img src="<?=base_url('assets/img/logo.png');?>" alt="logo-img" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?=$title;?></span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url('assets/lte/dist/img/avatar5.png');?>" class="img-circle elevation-2" alt="usr-img">
        </div>
        <div class="info nav-link disabled">
          <a href="#" class="d-block">Hi, <?=$this->session->userdata('nama');?></a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="<?=site_url('/dashboard');?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Katalog<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/katalog/entry_katalog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entry Katalog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/katalog/entry_katalog_rdl" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entry Katalog(RDL)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/katalog/salin_katalog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salin Katalog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/katalog/daftar_katalog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Katalog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/katalog/daftar_konten_digital" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Konten Digital</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/katalog/keranjang_katalog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Keranjang Katalog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/katalog/karantina_katalog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Karantina Katalog</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Keanggotaan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/keanggotaan/entry_anggota" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entry Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/keanggotaan/daftar_anggota" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/keanggotaan/import_data_dari_excel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Import Data Dari Excel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/keanggotaan/daftar_sumbangan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Sumbangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/keanggotaan/daftar_perpanjangan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Perpanjangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/keanggotaan/keranjang_anggota" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Keranjang Anggota</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Sirkulasi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/sirkulasi/entry_peminjaman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entry Peminjaman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/sirkulasi/entry_peminjaman_susulan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entry Peminjaman Susulan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/sirkulasi/daftar_koleksi_dipesan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Koleksi Dipesan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/sirkulasi/daftar_peminjaman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Peminjaman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/sirkulasi/entry_perpanjangan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entry Perpanjangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Perpanjangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entry Pengembalian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entry Pengembalian Susulan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entry Pengembalian Gabungan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Pengembalian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stok Opname</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pelanggaran</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Buku Tamu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Non Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rombongan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Baca Ditempat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Non Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengembalian Koleksi Baca Ditempat</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Katalog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Koleksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sirkulasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku Tamu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Baca Ditempat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loker</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>OPAC</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Artikel</p>
                </a>
              </li>
            </ul>
          </li>
          <hr style="	border-top: 1px solid #5a5a5a; width: 100%;">
          <li class="nav-item has-treeview">
            <a href="<?=site_url('login/logout');?>" class="nav-link">
              <i class="nav-icon fas fa-angle-left left"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
