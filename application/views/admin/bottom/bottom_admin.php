<!-- jQuery 3 -->
<script src="<?= base_url('template/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('template/bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('template/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- Morris.js charts -->
<script src="<?= base_url('template/bower_components/raphael/raphael.min.js') ?>"></script>
<script src="<?= base_url('template/bower_components/morris.js/morris.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') ?>"></script>
<!-- jvectormap -->
<script src="<?= base_url('template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
<script src="<?= base_url('template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('template/bower_components/jquery-knob/dist/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('template/bower_components/moment/min/moment.min.js') ?>"></script>
<script src="<?= base_url('bower_components/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
<!-- datepicker -->
<script src="<?= base_url('template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url('template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
<!-- Slimscroll -->
<script src="<?= base_url('template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
<!-- FastClick -->
<script src="<?= base_url('template/bower_components/fastclick/lib/fastclick.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('template/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('template/dist/js/pages/dashboard.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('template/dist/js/demo.js') ?>"></script>
<!-- DataTables -->
<script src="<?= base_url('template/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
<!-- Sweetalert2 js -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);

  $('#tgl_peng').datepicker({
    autoclose: true
  });

  $(function () {
  $('#table_pemesanan').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  });
  
</script>
<script>
  const showSukses = function() {
    Swal.fire(
      'Berhasil!',
      '',
      'success'
    )
  };
  const showGagal = function() {
    Swal.fire(
      'Gagal!',
      '',
      'error'
    )
  };

  function addPemesanan()
  {
      var nama       = $('#nama').val();
      var metode      = $('#metode').val();
      var alamat    = $('#alamat').val();
      var notelp = $('#notelp').val();
      var tgl_peng  = $('#tgl_peng').val();
      var roti1     = $('#roti1').val();
      var roti2   = $('#roti2').val();
      var roti3  = $('#roti3').val();
      var roti4  = $('#roti4').val();
      var roti5  = $('#roti5').val();

      if(nama == '' || notelp == '')
      {
        Swal.fire(
          "Terjadi Kesalahan!",
          "Informasi Pemesanan tidak boleh kosong.",
          'warning'
        );
      }
      else
      {
          var fd = new FormData();

          fd.append('nama', nama);
          fd.append('metode', metode);
          fd.append('alamat', alamat);
          fd.append('notelp', notelp);
          fd.append('tgl_peng', tgl_peng);
          fd.append('roti1', roti1);
          fd.append('roti2', roti2);
          fd.append('roti3', roti3);
          fd.append('roti4', roti4);
          fd.append('roti5', roti5);
          
          $.ajax({
            url: base_url + 'CPemesanan/insert_pemesanan_ajax',
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false, 
            error: function(err){
                alert(err);
            },
            success: function(response){
            
              if(response == 1)
              {
                showSukses();
                $('#table_pemesanan').ajax.reload();
                
              }
              else
              {
                showGagal();
              }
            }
          });
      }
  }
  /*
      function edit(nama){
        var fd = new FormData();
        fd.append('nama',nama);
        $.ajax({
          url : base_url+"CPemesanan/edit_ajax",
          type: "POST",
          data: fd,
          contentType: false,
          processData: false,
          error: function(error_clear_last)
          {
            showGagal();

          },
          success: function (response){
            if(response == 0){
              showGagal();
            }
            else{
              var mhs = $.parseJSON(response);

              $('#nama').val(mhs.nama);
              $('#metode[value="'+mhs.metode+'"]').prop('checked',true);
              $('#alamat').val(mhs.alamat);
              $('#notelp').val(mhs.notelp);
              $('#tgl_peng').val(mhs.tgl_peng);
              $('#roti1 [value="'+mhs.roti1+'"]').prop('selected', true);
              $('#roti2 [value="'+mhs.roti2+'"]').prop('selected', true);
              $('#roti3 [value="'+mhs.roti3+'"]').prop('selected', true);
              $('#roti4 [value="'+mhs.roti4+'"]').prop('selected', true);
              $('#roti5 [value="'+mhs.roti5+'"]').prop('selected', true);
  
              $('#table_pemesanan').ajax.reload();
                
            }
          }
        });
      }
      */
      /*
      function hapus(nama){
        Swal.fire({
    title: 'Apakah anda yakin ingin menghapus pemesanan Anda '+nama+'?',
    text: "Pemesanan akan dihapus secara permanen dari database!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya'
      }).then((result) => {
        if (result.isConfirmed) {
          var fd = new FormData();
          fd.append('nama', nama);
      
       Swal.fire()
        $.ajax({
          url : base_url+'CPemesanan/hapus_ajax',
          type: 'POST',
          data : fd,
          contentType: false,
          processData: false,
          error: function(err){
            alert(err);
          },
        succes: function(response){
          if (response == 1){
           showSukses();
               $('#table_pemesanan').ajax.reload();
          }
          else{
           showGagal();
          }
        }
        });
      }
      }
      }
      */
</script>