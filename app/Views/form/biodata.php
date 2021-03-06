<?= form_open('Pendaftar/addBiodata', ['class' => 'form-group form-biodata']) ?>
<?= csrf_field(); ?>
<div class="row mt-4">
    <div class="col-lg-12">
        <h4 class="biodata-siswa">BIODATA SISWA</h4>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12 edit-data">

    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="no_regis">Nomor Pendaftaran</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" readonly name="no_regis" id="no_regis" value="<?= $noRegis ?>">
        <div class="invalid-feedback errorNoRegis">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nama">Nama Lengkap</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="nama" id="nama">
        <div class="invalid-feedback errorNama">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="jk">Jenis Kelamin</label>
    </div>
    <div class="col-lg-9">
        <select name="jk" id="jk" class="form-control">
            <option value="">Pilih :</option>
            <option value="L">Laki - laki</option>
            <option value="P">Perempuan</option>
        </select>
        <div class="invalid-feedback errorJK">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nisn">NISN</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="nisn" id="nisn">
        <div class="invalid-feedback errorNISN">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="asal_sekolah">Asal Sekolah (SMP/MTs/Paket B)</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah">
        <div class="invalid-feedback errorAsalSekolah">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nik">NIK (Nomor Induk Kependudukan)</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="nik" id="nik">
        <div class="invalid-feedback errorNIK">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="kk">Nomor KK (Kartu Keluarga)</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="kk" id="kk">
        <div class="invalid-feedback errorKK">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="anak_ke_berapa">Anak keberapa</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="anak_ke_berapa" id="anak_ke_berapa">
        <div class="invalid-feedback errorAnakKeBerapa">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="tempatlahir">Tempat Lahir</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="tempatlahir" id="tempatlahir">
        <div class="invalid-feedback errorTempatLahir">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="tgl_lahir">Tanggal Lahir</label>
    </div>
    <div class="col-lg-9">
        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
        <div class="invalid-feedback errortgl_lahir">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="no_akte">Nomor Akte Kelahiran</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="no_akte" id="akte">
        <div class="invalid-feedback errorAkte">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="agama">Agama</label>
    </div>
    <div class="col-lg-9">
        <select name="agama" id="agama" class="form-control">
            <option value="">Pilih :</option>
            <option value="1">Islam</option>
            <option value="2">Kristen</option>
            <option value="3">Protestan</option>
            <option value="4">Hindu</option>
            <option value="5">Budha</option>
            <option value="6">Khong Hucu</option>
            <option value="99">Lainnya</option>
        </select>
        <div class="invalid-feedback errorAgama">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="alamat">Alamat Jalan</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="alamat" id="alamat">
        <div class="invalid-feedback errorAlamat">

        </div>
    </div>

</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="dusun">Nama Dusun</label>
    </div>
    <div class="col-lg-3">
        <input type="text" class="form-control" name="dusun" id="dusun">
        <div class="invalid-feedback errorDusun">

        </div>
    </div>
    <div class="col-lg-1 d-flex align-items-center">
        <label for="rt">RT</label>
    </div>
    <div class="col-lg-2">
        <input type="text" class="form-control" name="rt" id="rt">
        <div class="invalid-feedback errorRT">

        </div>
    </div>
    <div class="col-lg-1 d-flex align-items-center">
        <label for="rw">RW</label>
    </div>
    <div class="col-lg-2">
        <input type="text" class="form-control" name="rw" id="rw">
        <div class="invalid-feedback errorRW">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="desa">Desa/Kelurahan</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="desa" id="desa">
        <div class="invalid-feedback errorDesa">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="kecamatan">Kecamatan</label>
    </div>
    <div class="col-lg-4">
        <input type="text" class="form-control" name="kecamatan" id="kecamatan">
        <div class="invalid-feedback errorKecamatan">

        </div>
    </div>
    <div class="col-lg-1 d-flex align-items-center">
        <label for="pos">Kode POS</label>
    </div>
    <div class="col-lg-4">
        <input type="text" class="form-control" name="pos" id="pos">
        <div class="invalid-feedback errorPOS">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="kota">Kabupaten/Kota</label>
    </div>
    <div class="col-lg-9">
        <input type="text" name="kota" class="form-control" id="kota">
        <div class="invalid-feedback errorKota">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="tinggal">Tempat Tinggal</label>
    </div>
    <div class="col-lg-9">
        <select name="tinggal" id="tinggal" class="form-control">
            <option value="">Pilih :</option>
            <option value="1">Bersama Orang Tua</option>
            <option value="2">Kos</option>
            <option value="3">Asrama</option>
            <option value="4">Pondok Pesantren</option>
            <option value="99">Lainnya</option>
        </select>
        <div class="invalid-feedback errorTinggal">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="transportasi">Mode Transportasi</label>
    </div>
    <div class="col-lg-9">
        <select name="transportasi" id="transportasi" class="form-control">
            <option value="">Pilih :</option>
            <option value="1">Jalan kaki</option>
            <option value="2">Kendaraan Pribadi</option>
            <option value="3">Angkutan Umum/Pete - pete</option>
            <option value="4">Bus Sekolah</option>
            <option value="99">Lainnya</option>
        </select>
        <div class="invalid-feedback errorTransportasi">

        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-lg-12 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary btn-simpan">Simpan</button>
    </div>
</div>
<?= form_close(); ?>

<script>
    function biodataPendaftar() {
        $.ajax({
            url: "<?= base_url('DaftarUlang/getBiodata'); ?>",
            dataType: "json",
            success: function(response) {
                if (response.data) {

                    let elemenTombol = document.querySelector('div.edit-data');

                    //Tombol Update Data
                    let tombolUpdate = document.createElement('button');
                    tombolUpdate.setAttribute('class', 'btn btn-primary update-data');
                    tombolUpdate.setAttribute('type', 'button');
                    tombolUpdate.setAttribute('onclick', 'updateData()');
                    let iconTombolUpdate = document.createElement('i');
                    iconTombolUpdate.setAttribute('class', 'fas fa-save');
                    let textUpdate = document.createTextNode(' Update Data');
                    tombolUpdate.appendChild(iconTombolUpdate);
                    tombolUpdate.appendChild(textUpdate)

                    //Tombol Edit Data
                    let tombolEdit = document.createElement('button');
                    tombolEdit.setAttribute('class', 'btn btn-success edit-data')
                    tombolEdit.setAttribute('type', 'button');
                    tombolEdit.setAttribute('onclick', 'editData()');
                    let iconTombolEdit = document.createElement('i')
                    iconTombolEdit.setAttribute('class', 'fas fa-edit');
                    let textEdit = document.createTextNode(' Edit Data');
                    tombolEdit.appendChild(iconTombolEdit);
                    tombolEdit.appendChild(textEdit);

                    elemenTombol.append(tombolUpdate, tombolEdit);


                    document.querySelector('button.btn-simpan').remove();

                    $('input').attr('readonly', true);
                    $('select').attr('readonly', true);

                    document.querySelector('input#nama').setAttribute('value', '')
                    $('input#nama').val(response.data.nama)

                    document.querySelector('select#jk').value = response.data.jenis_kelamin;

                    document.querySelector('input#nisn').setAttribute('value', '')
                    $('input#nisn').val(response.data.nisn)

                    document.querySelector('input#asal_sekolah').setAttribute('value', '')
                    $('input#asal_sekolah').val(response.data.asal_sekolah)

                    document.querySelector('input#nik').setAttribute('value', '')
                    $('input#nik').val(response.data.nik)

                    document.querySelector('input#kk').setAttribute('value', '')
                    $('input#kk').val(response.data.no_kk)

                    document.querySelector('input#anak_ke_berapa').setAttribute('value', '')
                    $('input#anak_ke_berapa').val(response.data.anak_ke_berapa)

                    document.querySelector('input#tempatlahir').setAttribute('value', '')
                    $('input#tempatlahir').val(response.data.tempat_lahir)

                    document.querySelector('input#tgl_lahir').setAttribute('value', '')
                    $('input#tgl_lahir').val(response.data.tanggal_lahir)

                    document.querySelector('input#akte').setAttribute('value', '')
                    $('input#akte').val(response.data.no_akte)

                    document.querySelector('select#agama').value = response.data.agama;

                    document.querySelector('input#alamat').setAttribute('value', '')
                    $('input#alamat').val(response.data.alamat)

                    document.querySelector('input#dusun').setAttribute('value', '')
                    $('input#dusun').val(response.data.dusun)

                    document.querySelector('input#rt').setAttribute('value', '')
                    $('input#rt').val(response.data.rt)

                    document.querySelector('input#rw').setAttribute('value', '')
                    $('input#rw').val(response.data.rw)

                    document.querySelector('input#desa').setAttribute('value', '')
                    $('input#desa').val(response.data.desa)

                    document.querySelector('input#kecamatan').setAttribute('value', '')
                    $('input#kecamatan').val(response.data.kecamatan)

                    document.querySelector('input#pos').setAttribute('value', '')
                    $('input#pos').val(response.data.pos)

                    document.querySelector('input#kota').setAttribute('value', '')
                    $('input#kota').val(response.data.kota)

                    document.querySelector('select#tinggal').value = response.data.tempat_tinggal;

                    document.querySelector('select#transportasi').value = response.data.transportasi;

                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }

    $(document).ready(function() {

        biodataPendaftar();

        $('.form-biodata').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.error) {

                        if (response.error.nama) {
                            $('input#nama').addClass('is-invalid');
                            $('.errorNama').html(response.error.nama);
                        } else {
                            $('input#nama').removeClass('is-invalid');
                            $('.errorNama').html('');
                        }

                        if (response.error.nisn) {
                            $('input#nisn').addClass('is-invalid');
                            $('.errorNISN').html(response.error.nisn);
                        } else {
                            $('input#nisn').removeClass('is-invalid');
                            $('.errorNISN').html('');
                        }

                        if (response.error.nik) {
                            $('input#nik').addClass('is-invalid');
                            $('.errorNIK').html(response.error.nik);
                        } else {
                            $('input#nik').removeClass('is-invalid');
                            $('.errorNIK').html('');
                        }

                        if (response.error.noKK) {
                            $('input#kk').addClass('is-invalid');
                            $('.errorKK').html(response.error.noKK);
                        } else {
                            $('input#kk').removeClass('is-invalid');
                            $('.errorKK').html('');
                        }

                        if (response.error.anakKeBerapa) {
                            $('input#anak_ke_berapa').addClass('is-invalid');
                            $('.errorAnakKeBerapa').html(response.error.anakKeBerapa);
                        } else {
                            $('input#anak_ke_berapa').removeClass('is-invalid');
                            $('.errorAnakKeBerapa').html('');
                        }

                        if (response.error.tempatlahir) {
                            $('input#tempatlahir').addClass('is-invalid');
                            $('.errorTempatLahir').html(response.error.tempatlahir);
                        } else {
                            $('input#tempatlahir').removeClass('is-invalid');
                            $('.errorTempatLahir').html('');
                        }

                        if (response.error.tgl_lahir) {
                            $('input#tgl_lahir').addClass('is-invalid');
                            $('.errortgl_lahir').html(response.error.tgl_lahir);
                        } else {
                            $('input#tgl_lahir').removeClass('is-invalid');
                            $('.errortgl_lahir').html('');
                        }

                        if (response.error.akte) {
                            $('input#akte').addClass('is-invalid');
                            $('.errorAkte').html(response.error.akte);
                        } else {
                            $('input#akte').removeClass('is-invalid');
                            $('.errorAkte').html('');
                        }

                        if (response.error.alamat) {
                            $('input#alamat').addClass('is-invalid');
                            $('.errorAlamat').html(response.error.alamat);
                        } else {
                            $('input#alamat').removeClass('is-invalid');
                            $('.errorAlamat').html('');
                        }

                        if (response.error.dusun) {
                            $('input#dusun').addClass('is-invalid');
                            $('.errorDusun').html(response.error.dusun);
                        } else {
                            $('input#dusun').removeClass('is-invalid');
                            $('.errorDusun').html('');
                        }

                        if (response.error.rt) {
                            $('input#rt').addClass('is-invalid');
                            $('.errorRT').html(response.error.rt);
                        } else {
                            $('input#rt').removeClass('is-invalid');
                            $('.errorRT').html('');
                        }

                        if (response.error.rw) {
                            $('input#rw').addClass('is-invalid');
                            $('.errorRW').html(response.error.rw);
                        } else {
                            $('input#rw').removeClass('is-invalid');
                            $('.errorRW').html('');
                        }

                        if (response.error.desa) {
                            $('input#desa').addClass('is-invalid');
                            $('.errorDesa').html(response.error.desa);
                        } else {
                            $('input#desa').removeClass('is-invalid');
                            $('.errorDesa').html('');
                        }

                        if (response.error.kecamatan) {
                            $('input#kecamatan').addClass('is-invalid');
                            $('.errorKecamatan').html(response.error.kecamatan);
                        } else {
                            $('input#kecamatan').removeClass('is-invalid');
                            $('.errorKecamatan').html('');
                        }

                        if (response.error.kota) {
                            $('input#kota').addClass('is-invalid');
                            $('.errorKota').html(response.error.kota);
                        } else {
                            $('input#kota').removeClass('is-invalid');
                            $('.errorKota').html('');
                        }

                        if (response.error.pos) {
                            $('input#pos').addClass('is-invalid');
                            $('.errorPOS').html(response.error.pos);
                        } else {
                            $('input#pos').removeClass('is-invalid');
                            $('.errorPOS').html();
                        }
                    } else {
                        Swal.fire({
                            title: 'Sedang menyimpan data',
                            timer: 1000,
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                            didOpen: function() {
                                Swal.showLoading()
                            }
                        }).then(
                            (dismiss) => {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Yeay!',
                                    text: 'Data berhasil disimpan',
                                    timer: 1000,
                                    showConfirmButton: false
                                }).then(
                                    (dismiss) => {
                                        formOrangtua();
                                    }
                                )
                            }
                        );
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });


        });
    });
</script>