<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>Tambah Data Mobil</h4><br>

                <form class="form-horizontal form-material" id="formMobil">
                    <!-- <div class="form-group">
                        <label class="col-md-12">Kode Type</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Inputkan Kode Type" class="form-control form-control-line form-user-input" name="kode_type" id="kode_type">
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="col-md-12">Merek</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Inputkan merek Mobil" class="form-control form-control-line form-user-input" name="merk" id="merk">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">No Plat</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Inputkan nomor plat" class="form-control form-control-line form-user-input" name="no_plat" id="no_plat">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Warna</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Hitam" class="form-control form-control-line form-user-input" name="warna" id="warna">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Tahun</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-line form-user-input" name="tahun" id="tahun">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Status</label>
                        <div class="col-md-12">
                            <select name="status" id="status" class=" form-control-line form-user-input">
                                <option value="1">Tersedia</option>
                                <option value="2">Tidak Tersedia</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input class="form-user-input" type="hidden" name="id_mobil" id="id_mobil" value="">
                            <button class="btn btn-success" type="submit">Simpan Data Mobil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <script>
    $('#kode_ty')
</script> -->

<script type="text/javascript">
    $('#formMobil').on('submit', function(e) {
        e.preventDefault();
        sendDataPost();
    })

    function sendDataPost() {
        var link = 'http://localhost:8080/backend_rental/mobil/create_action';
        var dataForm = {};
        var allInput = $('.form-user-input');

        $.each(allInput, function(i, val) {
            dataForm[val['name']] = val['value'];
        });

        // var dataForm = new FormData();
        // var allInput = $('.form-user-input');
        // $.each(allInput, function(i, val) {
        //     dataForm.append(val['name'], val['value']);
        // });
        $.ajax(link, {
            type: 'POST',
            data: dataForm,
            // contentType: false,
            // processData: false,
            // dataType: 'json',

            success: function(data, status, xhr) {
                var data_str = JSON.parse(data);
                alert(data_str['pesan']);
                loadMenu('<?= base_url('mobil') ?>');
                // alert(data['pesan']);
                // loadMenu('<?= base_url('mobil') ?>');
            },
            error: function(jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
            }
        });
    }

    // function loadKonten(url) {
    //     $.ajax(url, {
    //         type: 'POST',
    //         data: dataForm,
    //         success: function(data, status, xhr) {
    //             var data_str = JSON.parse(data);
    //             alert(data_str['pesan']);
    //             loadMenu('<?= base_url('mobil') ?>');

    //             $('#tabel_mobil').html(data_str.konten);
    //         },
    //         error: function(jqXHR, textStatus, errorMsg) {
    //             alert('error :' + errorMsg);
    //         }
    //     })
    // }
</script>