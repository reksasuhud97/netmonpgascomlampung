
<script type="text/javascript">
    var detik = <?php echo date('s'); ?>;
    var menit = <?php echo date('i'); ?>;
    var jam   = <?php echo date('H'); ?>;
     
    function clock()
    {
        if (detik!=0 && detik%60==0) {
            menit++;
            detik=0;
        }
        second = detik;
         
        if (menit!=0 && menit%60==0) {
            jam++;
            menit=0;
        }
        minute = menit;
         
        if (jam!=0 && jam%24==0) {
            jam=0;
        }
        hour = jam;
         
        if (detik<10){
            second='0'+detik;
        }
        if (menit<10){
            minute='0'+menit;
        }
         
        if (jam<10){
            hour='0'+jam;
        }
        waktu = hour+':'+minute+':'+second;
         
        document.getElementById("clock").innerHTML = waktu;
        detik++;
    }
 
    setInterval(clock,1000);
</script>

<head>
<link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyC3C-vaRfkIOGy_a-lUy5ggMYTihG3u-PM" type="text/javascript"></script>
<script type="text/javascript">

//<![CDATA[
var map;

var universitas = [
  {
    'lintang': -5.3785386,
    'bujur': 105.2424233,
    'nama': 'Astaria Petshop'
  },
  {
    'lintang':  -5.4540171,
    'bujur': 105.2628981,
    'nama': 'Aneka Jaya Petshop'
  },
  {
    'lintang':  -5.3793504,
    'bujur': 105.2424662,
    'nama': 'Shalsa Petshop'
  }
  ];

function BuatMarker(lintang, bujur, keterangan) {
    var marker = new GMarker(new GLatLng(lintang, bujur));
    GEvent.addListener(marker, 'click',
                        function() {
                            marker.openInfoWindowHtml(keterangan);
                            document.querySelector('#namatempat').innerHTML=keterangan;
                        }
                       );
    map.addOverlay(marker);

}

function load() {
    if (GBrowserIsCompatible()) {
        map = new GMap2(document.getElementById("map"));
        map.addControl(new GSmallMapControl());
        var location = new GLatLng(-5.3785386,105.2424233);
        map.setCenter(location, 15);
        for(i=0;i<universitas.length;i++){
            BuatMarker(universitas[i].lintang,universitas[i].bujur,universitas[i].nama);    
        }
    }
}
//]]>
</script>
</head>
<?php
date_default_timezone_set("Asia/Jakarta");
    if (strcmp($page, "home")==0) { 
      ################
      # Halaman Home
      ################
        function showNotif() {
          if (isset($_GET['st'])) {
                    if ($_GET['st'] == 1) {
                          echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil disimpan.
                            </div><br />';
                    } elseif ($_GET['st'] == 2) {
                          echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal menyimpan.
                            </div><br />';
                    }
                  }
        }
        $d_blok=$conn->query("SELECT (name_blok) FROM blok WHERE pusat_client='1'")->fetch_assoc();
        $judul = $d_blok['name_blok'];
        $pantau = 1;
        $notif = 'true';
        $halaman = "./view/beranda.php";
      } elseif (strcmp($page, "add_client")==0) {
        ########################
        # SETTING TAMBAH CLIENT
        ########################
        function showNotif() {
          if (isset($_GET['st'])) {
            if ($_GET['st']==1) {
            echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil ditambahkan.
                            </div><br />';
          } elseif ($_GET['st']==2) {
            echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal menyimpan.
                            </div><br />';
          } elseif ($_GET['st']==3) {
            echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Data tidak boleh kosong.
                            </div><br />';
          }
          }
        }
        $notif = 'true';
        $pantau = 0;
        $judul = "Tambah Client";
        $halaman = "./view/add_client.php";
      } elseif (strcmp($page, "add_kantor")==0) {
        ########################
        # SETTING TAMBAH kantor
        ########################
        function showNotif() {
          if (isset($_GET['st'])) {
            if ($_GET['st']==1) {
            echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil ditambahkan.
                            </div><br />';
          } elseif ($_GET['st']==2) {
            echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal menyimpan.
                            </div><br />';
          } elseif ($_GET['st']==3) {
            echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Data tidak boleh kosong.
                            </div><br />';
          }
          }
        }
        $notif = 'true';
        $pantau = 0;
        $judul = "Tambah kantor";
        $halaman = "./view/add_kantor.php";
      } elseif (strcmp($page, "kantor")==0) {
        ########################
        # SETTING TAMPIL kantor
        ########################
        
        function showNotif() {
          if (isset($_GET['st'])) {
            if ($_GET['st']==1) {
                echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil disimpan.
                            </div><br />';
            } elseif ($_GET['st']==2) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal menyimpan.
                            </div><br />';
            } elseif ($_GET['st']==3) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Data tidak boleh kosong.
                            </div><br />';
            } elseif ($_GET['st']==4) {
                echo '<div class="callout callout-success" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil dihapus.
                            </div><br />';
            } elseif ($_GET['st']==5) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal dihapus.
                            </div><br />';
            }
        }
        }
        $notif = 'true';
        if (isset($_GET['id'])) {
          $getID = mysqli_real_escape_string($conn, $_GET['id']);
          $d_blok=$conn->query("SELECT (name_blok) FROM blok WHERE id_blok='$getID'")->fetch_assoc();
          $judul = $d_blok['name_blok'];
          $pantau = 1;
        } else {
          $pantau = 0;
          $judul = "Monitoring";
        }
        $halaman = "./view/kantor.php";
      } elseif (strcmp($page, "katasandi")==0) {
        ########################
        # SETTING TAMBAH kantor
        ########################
        function showNotif() {
          if (isset($_GET['st'])) {
            if ($_GET['st']==1) {
            echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil dirubah.
                            </div><br />';
          } elseif ($_GET['st']==2) {
            echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal dirubah.
                            </div><br />';
          } elseif ($_GET['st']==3) {
            echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Katasandi lama tidak cocok.
                            </div><br />';
          } elseif ($_GET['st']==4) {
            echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Konfirmasi katasandi tidak sama.
                            </div><br />';
          }  elseif ($_GET['st']==5) {
            echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Form tidak boleh kosong
                            </div><br />';
          }
          }
        }
        $notif = 'true';
        $pantau = 0;
        $judul = "Rubah katasandi";
        $halaman = "./view/ubah-katasandi.php";
      } elseif (strcmp($page, "log")==0) {
        ##########################
        # SETTING LOG LAPORAN EMAIL
        ##########################
        function showNotif() {
          if (isset($_GET['st'])) {
            if ($_GET['st']==1) {
                echo '<div class="callout callout-warning" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil disimpan.
                            </div><br />';
            } elseif ($_GET['st']==2) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal menyimpan.
                            </div><br />';
            } elseif ($_GET['st']==3) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Data tidak boleh kosong.
                            </div><br />';
            } elseif ($_GET['st']==4) {
                echo '<div class="callout callout-success" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Berhasil dihapus.
                            </div><br />';
            } elseif ($_GET['st']==5) {
                echo '<div class="callout callout-danger" style="margin-bottom: 0!important;">
                              <h4><i class="fa fa-info"></i> Note:</h4>
                              Gagal dihapus.
                              </div><br />';
              }
          }
          echo '<div class="callout callout-info" style="margin-bottom: 0!important;">
          <center><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></center>
          <h2>Mengambil Data Log Setiap Jam... </h2>
          Disarankan untuk rutin menghapus log yang tidak diperlukan untuk menghemat memory database.
          </div> <br />';
        }
        $notif = 'true';
        if (isset($_GET['id'])) {
          $pantau = 1;
        } else {
          $pantau = 0;
        }
        $judul = "Log Report Monitoring";
        $halaman = "./view/log-report.php";
      }  else {
        ########################
        # SETTING PAGE ERROR
        ########################
        $notif = 'false';
        $pantau = 0;
        $judul = "";
        $halaman = "./view/404.php";
      }
?>
 
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $judul; ?>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $judul; ?></li>
          </ol>
        </section>

        <section class="content">
  
          <div class="row">
            
            <div class="col-md-9">
            <?php 
              if ($notif == "true") {
                showNotif();
              }
             ?> 
              <div class="nav-tabs-custom">
                <?php include $halaman; ?>
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
            <div class="col-md-3">

            
           

                  <?php 
                      if ($pantau!=0) {
                        echo '
                              <div class="box box-warning">
                              <div class="box-header with-border">
                                <center><strong><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i> Ringkasan Status Koneksi (Pada Saat Halaman ini di Load)<br><input type="button" value="Refresh Halaman" onClick="window.location.reload()" /></strong></center>
                              </div><!-- /.box-header -->
                              <div class="box-body"> <ul>';
                        $ar_status = array("Connected", "Disconnected", "Destination net unreachable", "Destination host unreachable", "Request timed out");
                        $count_ar = count($ar_status) - 1; // array di mulai dari nol jadi hasil count di kurangi 1
                        for ($i=0; $i <= $count_ar ; $i++) { 
                            $status_cl = $ar_status[$i];
                            $sql = "SELECT * FROM client WHERE id_blok='$id_st' AND status_client='$status_cl' ORDER BY id_client ASC";
                            $hitung = $conn->query($sql)->num_rows;
                           
                            
                            echo "<li>$status_cl ( $hitung )</li>";
                        }
                        echo '</ul>
                            </div><!-- /.box-body -->
                          
                          </div><!-- /.box -->';
                      }

                  
                  ?> 

           <div class="box box-primary">
            <div class="box-header with-border">
            <center><strong><i class="glyphicon glyphicon-time"></i> JAM SEKARANG</strong></center>
            </div><!-- /.box-header -->
            <div class="box-body">
            <center><h1><div id="clock" style="font-family: 'Orbitron', sans-serif;"></h1></center>
            
            </div>
            </div>              
            


            </div><!-- /.col -->
          </div><!-- /.row -->

        </section>
       
