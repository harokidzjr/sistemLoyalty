<ul class="navigation">

  <li class="">
    <a href=""><i class="menu-icon fa fa-dashboard"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Dasbor</span></a>
  </li>
  <li class="mm-dropdown mm-dropdown-root">
    <a href="http://localhost/elybin/elybin-admin/admin.php?mod=home#"><i class="menu-icon fa fa-pencil"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Tulisan</span></a>
    <ul class="mmc-dropdown-delay animated fadeInLeft" style="">
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=post"><span class="mm-text">Semua Tulisan</span><span class="label label-info">7</span></a>
      </li>
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=post&act=add"><span class="mm-text">Tambah Baru</span></a>
      </li>
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=category"><i class="menu-icon fa fa-star"></i><span class="mm-text">Kategori</span><span class="label label-info">5</span></a>
      </li>
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=tag"><i class="menu-icon fa fa-tags"></i><span class="mm-text">Tag</span><span class="label label-info">24</span></a>
      </li>
    </ul>
  </li>
  <li class="mm-dropdown mm-dropdown-root">
    <a href="http://localhost/elybin/elybin-admin/admin.php?mod=home#"><i class="menu-icon fa fa-cloud"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Media</span></a>
    <?php
    $this->widget('zii.widgets.CMenu', array(
//                    'type' => 'list',
        'linkLabelWrapper' => 'span',
        'linkLabelWrapperHtmlOptions' => array(
            'class' => 'mm-text'
        ),
//                    'stacked' => false,
        'htmlOptions' => array(
            'class' => 'mmc-dropdown-delay animated fadeInLeft',
        ),
        'items' => array(
            array('label' => 'Slideshow', 'icon' => 'fa fa-film', 'url' => array('/slideshow/admin'), 'htmlOptions' => array('class' => 'xn-text')),
            array('label' => 'Artikel (Bussiness Directory)', 'icon' => 'fa fa-file', 'url' => array('/artikel/admin')),
            array('label' => 'News', 'icon' => 'fa fa-globe', 'url' => array('/news/admin')),
            array('label' => 'Event', 'icon' => 'fa fa-calendar', 'url' => array('/event/admin')),
            array('label' => 'Menu', 'icon' => 'fa fa-cog', 'url' => array('/mahasiswa/pilihBeasiswa')),
//                    '---',
            array('label' => 'Ubah Password', 'icon' => 'fa fa-cog', 'url' => array('/user/ubahPassword')),
        ),
    ));
    ?>
  </li>
  <li class="mm-dropdown mm-dropdown-root">
    <a href="http://localhost/elybin/elybin-admin/admin.php?mod=home#"><i class="menu-icon fa fa-file"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Halaman</span></a>
    <ul class="mmc-dropdown-delay animated fadeInLeft">
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=page"><span class="mm-text">Semua Halaman</span><span class="label label-info">2</span></a>
      </li>
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=page&act=add"><span class="mm-text">Tambah Baru</span></a>
      </li>
    </ul>
  </li>
  <li class="mm-dropdown mm-dropdown-root">
    <a href="http://localhost/elybin/elybin-admin/admin.php?mod=home#"><i class="menu-icon fa fa-comments"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Interaksi</span></a>
    <ul class="mmc-dropdown-delay animated fadeInLeft">
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=comment"><span class="mm-text"><i class="menu-icon fa fa-comment"></i>Komentar</span><span class="label label-info">2</span></a>
      </li>
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=contact"><span class="mm-text"><i class="menu-icon fa fa-envelope"></i>Pesan</span><span class="label label-info">0</span></a>
      </li>
    </ul>
  </li>
  <li class="mm-dropdown mm-dropdown-root">
    <a href="http://localhost/elybin/elybin-admin/admin.php?mod=home#"><i class="menu-icon fa fa-users"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Pengguna</span></a>
    <ul class="mmc-dropdown-delay animated fadeInLeft">
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=user"><span class="mm-text">Semua Pengguna</span><span class="label label-info">3</span></a>
      </li>
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=user&act=add"><span class="mm-text">Tambah Baru</span></a>
      </li>
    </ul>
  </li>
  <li class="mm-dropdown mm-dropdown-root">
    <a href="http://localhost/elybin/elybin-admin/admin.php?mod=home#"><i class="menu-icon fa fa-puzzle-piece"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Aplikasi</span></a>
    <ul class="mmc-dropdown-delay animated fadeInLeft">
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=com.subscribe"><span class="mm-text"><i class="menu-icon fa fa-rss"></i>Subscribe</span><span class="label label-info"></span></a>
      </li>
    </ul>
  </li>

  <li class="mm-dropdown mm-dropdown-root">
    <a href="http://localhost/elybin/elybin-admin/admin.php?mod=home#"><i class="menu-icon fa fa-wrench"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Pengaturan</span></a>
    <ul class="mmc-dropdown-delay animated fadeInLeft">
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=option"><span class="mm-text"><i class="menu-icon fa fa-gear"></i>Umum</span></a>
      </li>
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=theme"><span class="mm-text"><i class="menu-icon fa fa-tint"></i>Tema</span></a>
      </li>
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=plugin"><span class="mm-text"><i class="menu-icon fa fa-puzzle-piece"></i>Komponen</span></a>
      </li>
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=usergroup"><span class="mm-text"><i class="menu-icon fa fa-users"></i>Kelompok Pengguna</span></a>
      </li>
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=menumanager"><span class="mm-text"><i class="menu-icon fa fa-bars"></i>Aturan Menu</span></a>
      </li>
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=notification"><span class="mm-text"><i class="menu-icon fa fa-bell"></i>Notifikasi</span></a>
      </li>
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=widget"><span class="mm-text"><i class="menu-icon fa fa-th-large"></i>Widget</span></a>
      </li>
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=tools"><span class="mm-text"><i class="menu-icon fa fa-magic"></i>Perkakas</span></a>
      </li>
      <li>
        <a tabindex="-1" href="http://localhost/elybin/elybin-admin/admin.php?mod=about"><span class="mm-text"><i class="menu-icon fa fa-info-circle"></i>Tentang</span></a>
      </li>
    </ul>
  </li>
</ul> <!-- / .navigation -->