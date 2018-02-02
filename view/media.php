<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
	<meta http-equiv=”refresh” content=”60″>
    <meta charset="UTF-8">
    <title>PGASCOM Net Monitoring</title>
	
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="asset/plugins/select2/select2.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="asset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="asset/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="sidebar-mini skin-black layout-boxed">

    <div class="wrapper">
        <!-- header -->
        <header class="main-header">
            <?php include './view/layout/header.php'; ?>
        </header>
        <!--/ header -->
        <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <?php include './view/layout/sidebar.php'; ?>          
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <?php include './view/layout/content.php'; ?>
      </div>
        <!-- /#page-wrapper -->
    <footer class="main-footer">
        
        <marquee behavior="alternate" scrolldelay="200"><strong>Dibuat pada tahun 2018 untuk <a href="http://www.pgascom.co.id/">PT. PGAS TELEKOMUNIKASI NUSANTARA Regional Lampung</a> dari <a href="https://github.com/reksasuhud97/">Reksa Suhud Tri Atmojo</a>. </strong></marquee>
      </footer>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery 2.1.4 -->
    <script src="asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="asset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="asset/dist/js/app.min.js"></script>
     <!-- Select2 -->
    <script src="asset/plugins/select2/select2.full.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="asset/dist/js/demo.js"></script>
    <script src="asset/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="asset/plugins/datatables/dataTables.bootstrap.min.js"></script>
     <!-- InputMask -->
    <script src="asset/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="asset/plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <script>
      $(function () {
      $("#log-report").DataTable();
    });
    $(".master-noreg").change(function () {
      var boolIsChecked = false;
      if ($(this).is(":checked"))
      {
          boolIsChecked = true;
      }
      $(".noreg").prop("checked", boolIsChecked);
  });
  $(".noreg").change(function () {
      if ($(this).is(":checked"))
      {
          if ($(".noreg").length == $(".noreg:checked").length)
          {
              $(".master-noreg").prop("checked", true);
          }
      } 
      else
      {
          $(".master-noreg").prop("checked", false);
      }
  });
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
        //Money Euro
        $("[data-mask]").inputmask();

        /*//Date range picker

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });*/
      });
    </script>
    <body>
	 <center><div class="box box-danger" style="width: 92.7%; height: 475px; align:center">
            <div class="box-header with-border">
            <center><strong><i class="glyphicon glyphicon-map-marker"></i> LOKASI JARINGAN PERUSAHAAN KAMI</strong></center>
            </div><!-- /.box-header -->
            <div class="box-body">
            <center><div id="map" style="width: 91%; height: 400px; align:center"></div></center>
            
            </div>
            </div></center>              
            
    
	
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: new google.maps.LatLng(-5.3881358, 105.4903301),
          mapTypeId: 'roadmap'
        });

        
        var icons = {
          PGAS: {
            icon: 'http://maps.google.com/mapfiles/kml/pal3/icon21.png'
			
          },
          CUSTOMER: {
            icon: 'http://maps.google.com/mapfiles/kml/pal3/icon31.png'
          },
		  STASIUN: {
            icon: 'http://maps.google.com/mapfiles/kml/shapes/campfire.png'
          }
          
        };

        var features = [
          {
            position: new google.maps.LatLng(-5.3648237, 105.2410523),
            type: 'CUSTOMER'
          }, {
            position: new google.maps.LatLng(-5.4003206, 105.2563854),
            type: 'PGAS'
          },  {
            position: new google.maps.LatLng(-5.290651, 105.8250389),
            type: 'STASIUN'
          },  {
            position: new google.maps.LatLng(-5.3603812, 105.2275741),
            type: 'CUSTOMER'
          }
        ];

        // Create markers.
        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map

          });
        });
      }
    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3C-vaRfkIOGy_a-lUy5ggMYTihG3u-PM&callback=initMap">
    </script>

  </body>
</html>
