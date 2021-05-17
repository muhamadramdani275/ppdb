<?= form_open('pendaftar/addOrangTua', ['class' => 'form-group form-data-orangtua']) ?>
<?= csrf_field(); ?>
<div class="row mt-4">
    <dic class="col-lg-12">
        <h4 class="data-ayah">DATA AYAH KANDUNG</h4>
    </dic>
</div>
<input type="hidden" name="no_regis" value="<?= $noRegis ?>">
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nama_ayah">Nama Lengkap Ayah</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="namaAyah" name="nama_ayah">
        <div class="invalid-feedback errorNamaAyah">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nik_ayah">NIK Ayah</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="nikAyah" name="nik_ayah">
        <div class="invalid-feedback errorNikAyah">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="tahun_lahir_ayah">Tahun Lahir Ayah</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="tahunLahirAyah" name="tahun_lahir_ayah">
        <div class="invalid-feedback errorTahunLahirAyah">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="pendidikan_ayah">Pendidikan Terakhir Ayah</label>
    </div>
    <div class="col-lg-9">
        <select name="pendidikan_ayah" id="pendidikanAyah" class="form-control">
            <option value="">Pilih :</option>
            <option value="1">Tidak bersekolah</option>
            <option value="2">SD Sederajat</option>
            <option value="3">SMP Sederajat</option>
            <option value="4">SMA Sederajat</option>
            <option value="5">Diploma 1 (D1)</option>
            <option value="6">Diploma 2 (D2)</option>
            <option value="7">Diploma 3 (D3)</option>
            <option value="8">Sarjana (S1)</option>
            <option value="9">Magister (S2)</option>
            <option value="10">Doktor (S3)</option>
        </select>
        <div class="invalid-feedback errorPendidikanAyah">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
    </div>
    <div class="col-lg-9">
        <select name="pekerjaan_ayah" id="pekerjaanAyah" class="form-control">
            <option value="">Pilih :</option>
            <option value="1">Buruh</option>
        </select>
        <div class="invalid-feedback errorPekerjaanAyah">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="penghasilan_ayah">Penghasilan Bulanan Ayah</label>
    </div>
    <div class="col-lg-9">
        <select name="penghasilan_ayah" id="penghasilanAyah" class="form-control">
            <option value="">Pilih :</option>
            <option value="1">500.000</option>
        </select>
        <div class="invalid-feedback errorPenghasilanAyah">
        </div>
    </div>
</div>

<!-- Form Ibu -->
<div class="row mt-4">
    <dic class="col-lg-12">
        <h4 class="data-ayah">DATA IBU KANDUNG</h4>
    </dic>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nama_ibu">Nama Lengkap Ibu</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="namaIbu" name="nama_ibu">
        <div class="invalid-feedback errorNamaIbu">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nik_ibu">NIK Ibu</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="nikIbu" name="nik_ibu">
        <div class="invalid-feedback errorNikIbu">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="tahun_lahir_ibu">Tahun Lahir Ibu</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="tahunLahirIbu" name="tahun_lahir_ibu">
        <div class="invalid-feedback errorTahunLahirIbu">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="pendidikan_ibu">Pendidikan Terakhir Ibu</label>
    </div>
    <div class="col-lg-9">
        <select name="pendidikan_ibu" id="pendidikanIbu" class="form-control">
            <option value="">Pilih :</option>
            <option value="1">Tidak bersekolah</option>
            <option value="2">SD Sederajat</option>
            <option value="3">SMP Sederajat</option>
            <option value="4">SMA Sederajat</option>
            <option value="5">Diploma 1 (D1)</option>
            <option value="6">Diploma 2 (D2)</option>
            <option value="7">Diploma 3 (D3)</option>
            <option value="8">Sarjana (S1)</option>
            <option value="9">Magister (S2)</option>
            <option value="10">Doktor (S3)</option>
        </select>
        <div class="invalid-feedback errorPendidikanIbu">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
    </div>
    <div class="col-lg-9">
        <select name="pekerjaan_ibu" id="pekerjaanIbu" class="form-control">
            <option value="">Pilih :</option>
            <option value="1">Ibu Rumah Tangga</option>
        </select>
        <div class="invalid-feedback errorPekerjaanIbu">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="penghasilan_ibu">Penghasilan Bulanan Ibu</label>
    </div>
    <div class="col-lg-9">
        <select name="penghasilan_ibu" id="penghasilanIbu" class="form-control">
            <option value="">Pilih :</option>
            <option value="1">Tidak ada</option>
        </select>
        <div class="invalid-feedback errorPenghasilanIbu">
        </div>
    </div>
</div>

<!-- Form Wali -->
<div class="row mt-4">
    <dic class="col-lg-12">
        <h4 class="data-ayah">DATA WALI</h4>
    </dic>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nama_wali">Nama Lengkap Wali</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="nama_wali">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nik_wali">NIK Wali</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="nik_wali">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="tahun_lahir_wali">Tahun Lahir Wali</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="tahun_lahir_wali">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="pendidikan_wali">Pendidikan Terakhir Wali</label>
    </div>
    <div class="col-lg-9">
        <select name="pendidikan_wali" id="pendidikan_wali" class="form-control">
            <option value="">Pilih :</option>
            <option value="1">Tidak bersekolah</option>
            <option value="2">SD Sederajat</option>
            <option value="3">SMP Sederajat</option>
            <option value="4">SMA Sederajat</option>
            <option value="5">Diploma 1 (D1)</option>
            <option value="6">Diploma 2 (D2)</option>
            <option value="7">Diploma 3 (D3)</option>
            <option value="8">Sarjana (S1)</option>
            <option value="9">Magister (S2)</option>
            <option value="10">Doktor (S3)</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="pekerjaan_wali">Pekerjaan Wali</label>
    </div>
    <div class="col-lg-9">
        <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control">
            <option value="">Pilih :</option>
            <option value="1">Petani</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="penghasilan_wali">Penghasilan Bulanan Wali</label>
    </div>
    <div class="col-lg-9">
        <select name="penghasilan_wali" id="penghasilan_wali" class="form-control">
            <option value="">Pilih :</option>
            <option value="1">1.000.000</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-lg-12 d-flex justify-content-end">
        <button class="btn btn-primary btn-simpan" type="submit">Submit</button>
    </div>
</div>

<?= form_close() ?>

<script>
    $(document).ready(function() {
        $('form.form-data-orangtua').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.error) {

                        if (response.error.namaAyah) {
                            $('input#namaAyah').addClass('is-invalid');
                            $('.errorNamaAyah').html(response.error.namaAyah);
                        } else {
                            $('input#namaAyah').removeClass('is-invalid');
                            $('.errorNamaAyah').html('');
                        }

                        if (response.error.nikAyah) {
                            $('input#nikAyah').addClass('is-invalid');
                            $('.errorNikAyah').html(response.error.nikAyah);
                        } else {
                            $('input#nikAyah').removeClass('is-invalid');
                            $('.errorNikAyah').html('');
                        }

                        if (response.error.tahunLahirAyah) {
                            $('input#tahunLahirAyah').addClass('is-invalid');
                            $('.errorTahunLahirAyah').html(response.error.tahunLahirAyah);
                        } else {
                            $('input#tahunLahirAyah').removeClass('is-invalid');
                            $('.errorTahunLahirAyah').html('');
                        }

                        if (response.error.pendidikanAyah) {
                            $('select#pendidikanAyah').addClass('is-invalid');
                            $('.errorPendidikanAyah').html(response.error.pendidikanAyah);
                        } else {
                            $('select#pendidikanAyah').removeClass('is-invalid');
                            $('.errorPendidikanAyah').html('');
                        }

                        if (response.error.pekerjaanAyah) {
                            $('select#pekerjaanAyah').addClass('is-invalid');
                            $('.errorPekerjaanAyah').html(response.error.pekerjaanAyah);
                        } else {
                            $('select#pekerjaanAyah').removeClass('is-invalid');
                            $('.errorPekerjaanAyah').html('');
                        }

                        if (response.error.penghasilanAyah) {
                            $('select#penghasilanAyah').addClass('is-invalid');
                            $('.errorPenghasilanAyah').html(response.error.penghasilanAyah);
                        } else {
                            $('select#penghasilanAyah').removeClass('is-invalid');
                            $('.errorPenghasilanAyah').html('');
                        }

                        if (response.error.namaIbu) {
                            $('input#namaIbu').addClass('is-invalid');
                            $('.errorNamaIbu').html(response.error.namaIbu);
                        } else {
                            $('input#namaIbu').addClass('is-invalid');
                            $('.errorNamaIbu').html('');
                        }

                        if (response.error.nikIbu) {
                            $('input#nikIbu').addClass('is-invalid');
                            $('.errorNikIbu').html(response.error.nikIbu);
                        } else {
                            $('input#nikIbu').addClass('is-invalid');
                            $('.errorNikIbu').html('');
                        }

                        if (response.error.tahunLahirIbu) {
                            $('input#tahunLahirIbu').addClass('is-invalid');
                            $('.errorTahunLahirIbu').html(response.error.tahunLahirIbu);
                        } else {
                            $('input#tahunLahirIbu').removeClass('is-invalid');
                            $('.errorTahunLahirIbu').html('');
                        }

                        if (response.error.pendidikanIbu) {
                            $('select#pendidikanIbu').addClass('is-invalid');
                            $('.errorPendidikanIbu').html(response.error.pendidikanIbu);
                        } else {
                            $('select#pendidikanIbu').removeClass('is-invalid');
                            $('.errorPendidikanIbu').html('');
                        }

                        if (response.error.pekerjaanIbu) {
                            $('select#pekerjaanIbu').addClass('is-invalid');
                            $('.errorPekerjaanIbu').html(response.error.pekerjaanIbu);
                        } else {
                            $('select#pekerjaanIbu').removeClass('is-invalid');
                            $('.errorPekerjaanIbu').html('');
                        }

                        if (response.error.penghasilanIbu) {
                            $('select#penghasilanIbu').addClass('is-invalid');
                            $('.errorPenghasilanIbu').html(response.error.penghasilanIbu);
                        } else {
                            $('select#penghasilanIbu').removeClass('is-invalid');
                            $('.errorPenghasilanIbu').html('');
                        }

                    } else {
                        Swal.fire({
                            title: 'Sedang menyimpan data',
                            timer: 1000,
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                            onOpen: function() {
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
                                        progressBarNext(2);
                                        formPeriodik();
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