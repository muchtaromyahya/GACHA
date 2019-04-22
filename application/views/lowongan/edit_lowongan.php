<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Lowongan</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
  
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                       <h1>Edit Lowongan Magang Perusahaan <?= $_SESSION['nama'] ?><!--panggil nama perusahaan  --></h1>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('Mitra/Tambah') ?>" method="post">
                                <div class="form-group">
                                        <label for="text">perusahaan</label> <!--menampilan nama perusahaan-->
                                        <input type="text" class="form-control" id="perusahaan" name="perusahaan" readonly value="<?= $_SESSION['nama'] ?>"> <!--menampilkan nama perusahaan-->
                                        <small class="form-text text-danger"><?= form_error('perusahaan') ?>.</small>
                                    </div>
                            <div class="form-group">
                                <label for="Semester">Kategori</label> <!--mengubah kategori lowongan dari database-->
                                 <select class="form-control" id="kategori" name="kategori" required>
                                        <option value="Panggil kategori yg dipilih dari database">*Panggil kategori yg dipilih dari database</option>
                                    <option value="Administrasi&Koordinasi">Administrasi & Koordinasi</option>
                                    <option value="MediaKreatif">Media Kreatif</option>
                                    <option value="Akuntansi&Finansial">Akuntansi & Finansial</option>
                                    <option value="GeneralService">General Service</option>
                                    <option value="SumberDayaManusia">Sumber Daya Manusia</option>
                                    <option value="IT&Software">IT & Software</option>
                                    <option value="Manajemen&Konsultan">Manajemen & Konsultan</option>
                                    <option value="Sales&Marketing">Sales & Marketing</option>
                                </select>
                        </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label><br> <!--mengubah jurusan dari database-->
                                <input type="checkbox" name="jurusan[]" value="S1informatika">S1 informatika<br><br>
                                <input type="checkbox" name="jurusan[]" value="S1tekniktelekomunikasi">S1 teknik telekomunikasi<br><br>
                                <input type="checkbox" name="jurusan[]" value="S1teknikindustri" checked>S1 teknik Industri<br><br>
                                <input type="checkbox" name="jurusan[]" value="S1ilmukomunikasi" checked>S1 ilmu komunikasi<br><br>
                                <input type="checkbox" name="jurusan[]" value="S1Akuntansi" checked>S1 Akuntansi<br><br>
                                <input type="checkbox" name="jurusan[]" value="S1MBTI" checked>S1 MBTI<br><br>
                                <small class="form-text text-danger"><?= form_error('jurusan') ?>.</small>
                            </div>
                            <div class="form-group">
                                <label for="text">durasi</label> <!--mengubah durasi dari database-->
                                <input type="text" class="form-control" id="durasi" name="durasi" value="*Panggil durasi dari database" required>
                                <small class="form-text text-danger"><?= form_error('durasi') ?>.</small>
                            </div>
                            <div class="form-group">
                                <label for="until">Valid until</label> <!--mengubah valid until dari database-->
                                <input type="date" name="until" placeholder="until" value="*panggil until dari database" required>
                                <small class="form-text text-danger"><?= form_error('until') ?>.</small>
                            </div>
                            
                            <div class="form-group">
                                    <label for="Semester"> minimal Semester</label> <!--mengubah minimal semester dari database-->
                                     <select class="form-control" id="semester" name="semester" required>
                                            <option value="panggil minimal semester dari data base">*panggil nilai minimal semester yang ada di data base</option>
                                        <option value="3">3 </option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                            </div><br>
                            <div class="form-group">
                                    <label for="sks">Jumlah minimal SKS yang sudah di ambil</label> <!--mengubah minimal sks yang sudah diambil dari database-->
                                    <input type="text" class="form-control" id="sks" name="sks" value="*panggil sks dari database" required>
                                    <small class="form-text text-danger"><?= form_error('sks') ?>.</small>
                            </div>
                            <div class="form-group">
                                    <label for="ipk"> Minimal IPK Terakhir</label> <!--mengubah nilai ipk terakhir dari database-->
                                    <input type="text" class="form-control" id="ipk" name="ipk" value="*panggil ipk minimal dari database" required>
                                    <small class="form-text text-danger"><?= form_error('ipk') ?>.</small>
                            </div>
                            <div class="form-group">
                                    <label for="persyaratan umum">persyaratan Umum</label> <!--mengubah persyaratan umum dari database-->
                                    <textarea rows="10" cols="60%" class="form-control" id="persyaratanumum" name="persyaratanumum"  required>*panggil persyaratan umum yang ada di database</textarea>
                            </div>
                            <div class="form-group">
                                <label for="persyaratan khusus">persyaratan khusus</label> <!--mengubah persyaratan khusus dari database-->
                                <textarea rows="10" cols="60%" class="form-control" id="persyaratankhusus" name="persyaratankhusus"  >*panggil persyaratan umum yang ada di database</textarea>
                            </div>
                            <div class="alert alert-primary" role="alert">
                                    <a href="#" class="alert-link"></a> Dengan mengisi data diatas berarti anda menyetujui semua syarat dan ketentuan yang berlaku.
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Edit Lowongan</button>
                            <!-- setelah klik tambah redirect ke halaman home atau header1 -->
                        </form>
                    </div>
                </div>
    
            </div>
        </div>
    </div> 
</body>
</html>