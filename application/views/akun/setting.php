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
  <style>
  input[type=password], [type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=text-field], [type=date]{
    width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin-right: 20px;
}
  </style>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                       <h1>Setting</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('UserController/edit') ?>" method="post">
                                <div class="form-group">
                                        <label for="text"> Nama <?php if ($_SESSION['status']=='Mitra') {echo "Perusahaan";} ?></label>
                                        <input type="text" class="form-control" id="perusahaan" name="perusahaan" value="<?= $data['nama'] ?>" > <!--menampilkan nama perusahaan-->
                                        <small class="form-text text-danger"><?= form_error('perusahaan') ?>.</small>
                                    </div>
                            <div class="form-group">
                                <label for="text">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?= $data['username'] ?>" required readonly>
                                <small class="form-text text-danger"><?= form_error('username') ?>.</small>
                            </div>
                            <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= $data['email'] ?> " required>
                                    <small class="form-text text-danger"><?= form_error('email') ?>.</small>
                            </div>
                            <div class="form-group">
                                    <label for="tanggallahir">Tempat dan Tanggal Lahir</label><br>
                                    <input type="text-field" name="Tempat" id="tempat" value="<?= $data['tempat'] ?>" required>
                                    <input type="date" name="tanggal" id="tanggal" value="<?= $data['tanggalLahir'] ?>" required>   
                            </div>
                            <div class="form-group">
                                <label for="password">Password Lama</label><br>
                                <input type="password" name="password" value="" required>
                                <small class="form-text text-danger"><?= form_error('password') ?>.</small>
                            </div>
                            <div class="form-group">
                                    <label for="password">Password Baru</label><br>
                                    <input type="password" name="passwordbaru"  >
                                    <small class="form-text text-danger"><?= form_error('password') ?>.</small>
                                </div>
                            
                            <!-- <div class="form-group">
                                    <label for="ipk"> Minimal IPK Terakhir</label>
                                    <input type="text" class="form-control" id="ipk" name="ipk" required>>
                                    <small class="form-text text-danger"><?= form_error('ipk') ?>.</small>
                            </div>
                            <div class="form-group">
                                    <label for="persyaratan umum">persyaratan Umum</label>
                                    <textarea rows="10" cols="60%" class="form-control" id="persyaratanumum" name="persyaratanumum" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="persyaratan khusus">persyaratan khusus</label>
                                <textarea rows="10" cols="60%" class="form-control" id="persyaratankhusus" name="persyaratankhusus" ></textarea>
                            </div> -->
                            <!-- <div class="alert alert-primary" role="alert">
                                    <a href="#" class="alert-link"></a> Dengan mengisi data diatas berarti anda menyetujui semua syarat dan ketentuan yang berlaku.
                            </div> -->
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Apply</button>
                            <!-- setelah klik tambah redirect ke halaman home atau header1 -->
                        </form>
                    </div>
                </div>
    
            </div>
        </div>
    </div> 
</body>
</html>