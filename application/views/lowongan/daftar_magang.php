<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    
</head>
<style>
h1{
    font-size: 25px;
}
</style>
<body>
        <div class="container">
                <div class="row mt-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-header text-center">
                               <h1>From Pendaftaran Magang <!--panggil nama perusahaan--></h1>
                            </div>
                            <div class="card-body">
                            <?php echo form_open_multipart('upload/do_upload');?>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="id" name="id" value="<?= $user ?>" hidden>
                                        <label for="nim">NIM</label>
                                        <input type="text" class="form-control" id="nim" name="nim" required> 
                                        <small class="form-text text-danger"><?= form_error('nim') ?>.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                        <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" required>
                                        <small class="form-text text-danger"><?= form_error('email') ?>.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="jurusan">Jurusan</label>
                                        <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                                        <small class="form-text text-danger"><?= form_error('jurusan') ?>.</small>
                                    </div>
                                    <div class="form-group">
                                            <label for="jurusan">Perguruan Tinggi</label>
                                            <input type="text" class="form-control" id="kampus" name="kampus" required>
                                            <small class="form-text text-danger"><?= form_error('kampus') ?>.</small>
                                    </div>
                                    <div class="form-group">
                                            <label for="Semester">Semester</label>
                                             <select class="form-control" id="semester" name="semester" required>
                                                    <option value="none">semester</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label for="sks">Jumlah SKS yang sudah di ambil</label>
                                            <input type="text" class="form-control" id="sks" name="sks" required>
                                            <small class="form-text text-danger"><?= form_error('sks') ?>.</small>
                                    </div>
                                    <div class="form-group">
                                            <label for="ipk">IPK Terakhir</label>
                                            <input type="text" class="form-control" id="ipk" name="ipk" required>
                                            <small class="form-text text-danger"><?= form_error('ipk') ?>.</small>
                                    </div>
                                    
                                            <div class="form-group">
                                              <label for="berkas">Silakan upload berkas yang dibutuhkan</label>
                                              <input type="file" size="20" class="form-control-file" name="userfile" id="berkas">
                                            </div>
                                          
                                    <div class="alert alert-primary" role="alert">
                                            <a href="#" class="alert-link"></a> Dengan mengisi data diatas berarti anda menyetujui semua syarat dan ketentuan yang berlaku.
                                    </div>
                                    <button type="submit" name="submit" value="upload" class="btn btn-primary float-right">Daftar</button>
                                    <!-- setelah klik tambah redirect ke halaman lowongan -->
                                </form>
                            </div>
                        </div>
            
                    </div>
                </div>
            </div> 
</body>
</html>