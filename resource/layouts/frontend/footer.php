</div>
<!-- /.card -->
</section>
<!-- /.Left col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright © 2014 - <?= date("Y") ?></strong>
  <!-- | Template View By<strong><a target="_blank" href="https://adminlte.io"> AdminLTE.io</a></strong> -->
<strong>E-PERPUS</strong>

  <!-- <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> PHOENIX - 2
  </div> -->
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="<?= asset('plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= asset('plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= asset('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?= asset('plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= asset('dist/js/adminlte.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= asset('dist/js/demo.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= asset('dist/js/pages/dashboard.js') ?>"></script>
<!-- Datatable -->
<script src="<?= asset('plugins/jquery.dataTables.min.js') ?>"></script>
<script src="<?= asset('plugins/dataTables.bootstrap4.min.js') ?>"></script>

<script src="<?= asset('dist/js/select2.min.js') ?>"></script>
<script src="<?= asset('dist/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= asset('dist/js/jszip.min.js') ?>"></script>
<script src="<?= asset('dist/js/buttons.html5.min.js') ?>"></script>
<script src="<?= asset('plugins/sweetalert2@11') ?>"></script>
<script src="<?= asset('js/summernote.min.js') ?>"></script>



<script>
  $(document).ready(function(){
    $('#buku').select2({
      width: '100%'
    });
  })
</script>

<script>
  function selectRefresh() {
    $('.script-select-2').select2({
      width: '100%'
    });
  }
  $('.tambah_buku').click(function () {

    // selectRefresh();

    var data = `<tr>`;
    data += `<td><input name="kode_buku[]" type="text" readonly class="form-control kode_buku"></td>`;
    data += `<td>
                <select name="buku_id[]" class="form-control script-select-2 pilih-buku">
                  <?php foreach (query()->table('buku')->get() as $pilihbuku) { ?>
                    <option data-stock="<?= $pilihbuku['stok'] ?>" data-kode="<?= $pilihbuku['kode_buku'] ?>" value="<?= $pilihbuku['id'] ?>"><?= $pilihbuku['judul'] ?></option>
                  <?php } ?>
                </select>
              </td>`;
    data += `<td><input name="qty[]" type="text" class="form-control qty_buku"></td>`;
    data += `<td><input name="stok[]" type="text" readonly class="form-control stock_buku"></td>`;
    data += `<td> <button type="button" class="btn btn-danger hapus-data"><i class="fa fa-trash"></i></button></td>`;
    data += `</tr>`;
    
    $('tbody').append(data);

    selectRefresh();
  });

    $('body').on('keyup', '.qty_buku', function(){

  var stock_buku = parseInt($(this).closest('tr').find('td').find('.stock_buku').val());
  var qty_buku = parseInt($(this).val());

  if(qty_buku > stock_buku){
  alert('STOCK TIDAK MENCUKUPI!');
    
    $(this).val(stock_buku);
  }

  if(qty_buku <= 0 ){
    alert('MASUKKAN DATA YANG BENAR!');
    $(this).val(1);

  }


  });

  $('body').on('click', '.hapus-data', function(){

      $(this).closest('tr').remove();

  })

  $('body').on('change', '.pilih-buku', function () {


    var row = $(this).closest('tr');

    var kode = row.find('td').find('.pilih-buku').find(":selected").data('kode');
    var stock  = row.find('td').find('.pilih-buku').find(":selected").data('stock');

    var fieldkode = row.find('td').eq(0).find('.kode_buku').val(kode);
    var fieldkode = row.find('td').eq(3).find('.stock_buku').val(stock);


  });

  $('.summernote').summernote({
    height: 300, // set editor height
    minHeight: null, // set minimum height of editor
    maxHeight: null,
  });

  $(".summernote").on("summernote.enter", function (we, e) {
    $(this).summernote("pasteHTML", "<br><br>");
    e.preventDefault();
  });

  $("#check-all").click(function () { // Ketika user men-cek checkbox all      

    if ($(this).is(":checked")) // Jika checkbox all diceklis        
      $(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"      
    else // Jika checkbox all tidak diceklis        
      $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"    

  });

  var name = $('.name-file').html();

  if (name != "undefined") {
    name = name;
  } else {
    name = $('.card-title').html();
  }

  var date = new Date;
  var format_name = name + date.getDate() + "-" + date.getMonth() + "-" + date.getFullYear();

  $('.data-table').DataTable({
    // dom: 'Bfrtip',
    // "lengthChange": true,
    // buttons: {
    //   dom: {
    //     button: {
    //       tag: 'button',
    //       className: ''
    //     }
    //   },
    //   buttons: [{
    //     extend: 'excel',
    //     className: 'btn btn-sm btn-success',
    //     messageTop: null,
    //     title: null,
    //     filename: format_name,
    //     text: '<i class="fas fa-file-excel"></i> Export Excel',
    //     exportOptions: {
    //       columns: 'th:not(:last-child)'
    //     }
    //   }]
    // },
    "language": {
      "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
      "sEmptyTable": "Tidak ada data di database"
    }

  });

  $('.data-table2').DataTable({
    "language": {
      "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
      "sEmptyTable": "Tidak ada data di database"
    }

  });

  $('.js-example-basic-single').select2();

  $("#check-all").click(function () { // Ketika user men-cek checkbox all      

    if ($(this).is(":checked")) // Jika checkbox all diceklis        
      $(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"      
    else // Jika checkbox all tidak diceklis        
      $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"    

  });

  $("#btn-delete").click(function () { // Ketika user mengklik tombol delete      

    Swal.fire({
      title: 'Apakah Anda Yakin?',
      text: "Data akan terhapus",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Batal',
      confirmButtonText: 'Ya'
    }).then((result) => {
      if (result.isConfirmed) {
        $("#form-delete").submit();
      }
    })

  });
</script>

<?php
  if (isset($_SESSION["alert"] )) {
    $msg = $_SESSION["alert"];
  ?>
<script>
  Swal.fire(
    'Berhasil!',
    '<?= $msg ?>',
    'success'
  );
</script>
<?php
    unset($_SESSION["alert"]);
  }
?>

<?php
if (isset($_SESSION["title_alert"])) {

    $title      = $_SESSION["title_alert"];
    $alert      = $_SESSION["message_alert"];
    $type_alert = $_SESSION["type_alert"];

    ?>
<script>
  Swal.fire(
    '<?= $title ?>',
    '<?= $alert ?>',
    '<?= $type_alert ?>'
  );
</script>

<?php
        if ($type_alert == "error") {
            ?>
<script>
  var x = document.getElementById("myAudioError");
  x.play();
</script>
<?php
        } else {
            ?>
<script>
  var x = document.getElementById("myAudioSuccess");
  x.play();
</script>
<?php
        }
        ?>

<?php
}
unset($_SESSION["title_alert"]);
unset($_SESSION["message_alert"]);
unset($_SESSION["type_alert"]);

if(!empty($_SESSION["data"])){
  $nama_array = array_keys($_SESSION["data"]);
  if(!empty($_SESSION["data"][$nama_array[0]]["url"])){
      if($_SESSION["data"][$nama_array[0]]["url"] != this_url()){
        ?>
<script>
  location.reload();
</script>
<?php
          unset($_SESSION["data"]);
      }
  }
}
?>

       

</body>

</html>