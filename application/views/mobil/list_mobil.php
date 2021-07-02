<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>Daftar Mobil</h4><br>
                <a href="#" class="btn btn-primary" onclick="loadMenu('<?= base_url('mobil/form_create') ?>')">Tambah Data Mobil</a><br><br>
                <table id="tabel_mobil" class="table">

                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function loadKonten(url) {
        $.ajax(url, {
            type: 'GET',
            success: function(data, status, xhr) {
                var objData = JSON.parse(data);

                $('#tabel_mobil').html(objData.konten);
            },
            error: function(jqXHR, textStatus, errorMsg) {
                alert('error :' + errorMsg);
            }
        })
    }

    loadKonten('http://localhost:8080/backend_rental/mobil/list_mobil');
</script>