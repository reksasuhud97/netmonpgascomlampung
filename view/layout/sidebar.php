<ul class="sidebar-menu">
<?php 
    $d_blokx=$conn->query("SELECT (name_blok) FROM blok WHERE pusat_client='1'")->fetch_assoc();
    $nama_blok = $d_blokx['name_blok']; // Kantor Pusat
    $link = array("home", "kantor", "#", "#");
    $nama = array("$nama_blok", "List Kantor", "Monitoring", "Setting");
    $icon = array("glyphicon glyphicon-briefcase", "fa fa-list","glyphicon glyphicon-scale", "fa fa-wrench");
    for ($i=0; $i <= count($link)-1 ; $i++) { 
      // Logika di bawah berfungsi menentukan link yg aktif
      if (strcmp($page, "$link[$i]")==0) { // Menentukan link aktif
            $status_l = " class='active'";
          } else {
            $status_l = "";
          }

      // Logikan menampilkan item khusus pada menu drop down versi simple ada di file sidebar-backup.php
      if ($nama[$i] === "Monitoring") { // Isi link dropdown
        $right_icon = "<i class='fa fa-angle-left pull-right'></i>"; // Icon right untuk dropdown
        $menu_d = "<ul class='treeview-menu'>"; // Pembuka tag Ul
      } elseif ($nama[$i] === "Setting") {
        $right_icon = "<i class='fa fa-angle-left pull-right'></i>";
        $menu_d = "<ul class='treeview-menu'>
        <li>
            <a class='active' href='./log'><i class='glyphicon glyphicon-book'></i> Log Laporan</a>
        </li>
        <li>
            <a class='active' href='./add_client'><i class='glyphicon glyphicon-plus'></i>Tambah Perangkat</a>
        </li>
        <li>
            <a class='active' href='./add_kantor'><i class='glyphicon glyphicon-plus'></i>Tambah Kantor</a>
        </li>
        <li>
            <a href='./asset/proses.php?logout'><i class='glyphicon glyphicon-log-out'></i> Keluar</a>
        </li>
        
        </ul>";
      } else {
        $right_icon = ""; // Item kosong jika bukan menu dropdown
        $menu_d = "";
      }
      // Disini output utama nya
      echo "<li $status_l>
              <a href='$link[$i]'>
              <i class='$icon[$i]'></i> <span>$nama[$i]</span> $right_icon
              </a> $menu_d";

              if ($nama[$i]==="Monitoring") { // Khusus untuk monitoring karena terdapad looping While jadi tidak bisa dimasuan kevariable = kita bikin manual.
                if ($conn->query("SELECT*FROM client")->num_rows!==0) {
                  $query_blok=$conn->query("SELECT*FROM blok ORDER BY id_blok ASC");
                  while ($blok=$query_blok->fetch_assoc()) {
                    extract($blok);
                    $q_client=$conn->query("SELECT*FROM client NATURAL LEFT JOIN blok WHERE id_blok='$id_blok'");
                    $cek = $q_client->num_rows;
                    if ($cek!==0) {
                      // jika terdapat data di database
                      echo "<li>
                              <a class='active' href='./kantor&id=$id_blok'><span class='glyphicon glyphicon-briefcase'></span> $name_blok</a>
                              </li>";
                              //tidak terpakais
                        }
                      }
                  } else {
                    // jika data kosong
                      echo "<li><a href='#'>Belum ada data</a></li>";
                  }
              echo "</ul>"; // Penutup Tag UL
              }

      echo "
            </li>";
    }
 ?>
 </ul>
