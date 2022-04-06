<style>
    .form-group {
        margin-bottom: 0px !important;
    }
    select.form-control {
        color: inherit !important;
    }
</style>
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Formulir Pendaftaran Pasien Berobat</h4>
                        <hr>
                        
                        <form class="form-sample" id="form_pendaftaran" action="<?= current_url() ?>" method="POST">
                            <p class="card-description">
                                Biodata Pasien
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-4">
                                            <label for="id_pasien" class="col-form-label">Pilih Pasien</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" id="id_pasien" name="nama_pasien" class="form- pilih_pasien" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-4">
                                            <label for="nik" class="col-form-label">NIK</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" id="nik" name="nik" class="form-control" required>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <!-- <div class="row g-3 align-items-center">
                                        <div class="col-sm-4">
                                            <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                    </div> -->

                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-4">
                                            <label for="tgl_lahir" class="col-form-label">Tgl.Lahir</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" required>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <br>
                            <p class="card-description">
                                Detail Pendaftaran
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-4">
                                            <label for="tgl_berobat" class="col-form-label">Tgl.Berobat</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="date" id="tgl_berobat" name="tgl_berobat" class="form-control" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-4">
                                            <label for="id_asuransi" class="col-form-label">Pilih Asuransi</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select name="id_asuransi" id="id_asuransi" class="form-control" required>
                                                <option value="">Pilih Asuransi</option>
                                                <?php foreach($asuransi as $asr): ?>
                                                    <option value="<?= $asr->id_asuransi ?>"><?= $asr->nama_asuransi ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-4">
                                            <label for="id_poliklinik" class="col-form-label">Pilih Poliklinik</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select name="id_poliklinik" id="id_poliklinik" class="form-control" required>
                                                <option value="">Pilih Poliklinik</option>
                                                <?php foreach($poliklinik as $poli): ?>
                                                    <option value="<?= $poli->id_poliklinik ?>"><?= $poli->nama_poliklinik ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-4">
                                            <label for="id_dokter" class="col-form-label">Pilih Dokter</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select name="id_dokter" id="id_dokter" class="form-control" required>
                                                <option value="">Pilih Dokter</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-4">
                                            <label for="" class="col-form-label"></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <button id="btn-save" disabled type="submit" class="btn btn-success"> SIMPAN DATA</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Pasien</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>Tgl.Lahir</th>
                    <th>No.Identitas</th>
                    <th></th>
                    </tr>
                    </thead>
                <tbody id="data_pasien">
                
                </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    document.onreadystatechange = () => {
        if (document.readyState === "complete") {
            
            $('.pilih_pasien').click(function(){
                // $.get('?>= site_url('admision/pendaftaran/fetch_pasien') ?>')
                $.get(site_url+'admision/pendaftaran/fetch_pasien', function(response){

                    var data_pasien = '';
                    $.each(response, function(index, item){
                        data_pasien += `
                                    <tr>
                                        <td>`+item.nama_user+`</td>
                                        <td>`+item.jenis_kelamin+`</td>
                                        <td>`+item.tgl_lahir+`</td>
                                        <td>`+item.no_identitas+`</td>
                                        <td>
                                        <button class="btn btn-xs btn-primary">Pilih</button>
                                        </td>
                                    </tr>
                                    `;
                    });
                //tugas :  buat pagination per 10 data  menggunakan datatable-server-side
                $('#data_pasien').html(data_pasien);
                $('#exampleModal').modal('show');

                }, 'JSON');                
            });

            $('#btn-save').removeAttr('disabled');

            $('#id_poliklinik').change(function(){
                var id_poliklinik = $(this).val();
                
                $('#id_dokter').html('<option value="">Mohon tunggu...</option>');

                $.post(site_url + 'admision/pendaftaran/fetch_dokter', {id_poliklinik}, function(response){
                    $('#id_dokter').html(response);
                });
            });

            $('#form_pendaftaran').submit(function(e){
                e.preventDefault(); 

                $.ajax({
                    url :"<?php echo base_url('admision/pendaftaran') ?>",
                    type: "POST",
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response){
                        alert(response.message);
                        if (response.status == true) {
                            $('input, select').val('').trigger('change');
                        }
                    },
                    error: function(error){
                        alert('Internal server error');
                    }
                });
            });
        }
    }
</script>