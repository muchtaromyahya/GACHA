<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <style>
     
     .Low1{
         padding-right: 1px;
         margin-top: 35px;
         width: 90px;
         opacity: 0.6;
         align-items: center;
         justify-content: center;
         align-content: center;
         vertical-align: middle;
        -webkit-filter:brightness(0%);
         filter:brightness(0%);
         text-align: center;
         padding-top: 15px;
         font-weight:bold;
     }


     

     .Low1:hover{
         transform: scale(1.5);
         opacity: 1;
         transition: 150ms;
         -webkit-filter:brightness(100%);
         filter:brightness(100%);
         
         
     }
 </style>
</head>
<body>
<br><br>
    <div class = "container-fluid">
            <div class = "row justify-content-md-center">
                    <h3 style = "align-items: center;align-content: center;justify-content: center;display:flex;opacity: 0.8;text-align: center">
                                Explore GACHA
                    </h3>
                </div>
        <div class = "row justify-content-md-center">
            <h5 style = "align-items: center;align-content:center;justify-content:center;display:flex;opacity:0.7;text-align:center;">
                Temukan Lowongan Pekerjaan yang sesuai dengan kemampuanmu
            </h5>
        </div>
    <table id="example" class="table table-striped table-bordered" width="100%" height="50px">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Kategori</th>
                        <th>Jurusan</th>
                        <th>Durasi magang</th>
                        <th>Valid sampai</th>
                        <th>Semester yang diambil</th>
                        <th>SKS yang diambil</th>
                        <th>IPK minimal</th>
                        <th>PersyaratanUmum</th>
                        <th>PersyaratanKhusus</th>
                        <th>Daftar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $table=$this->LowonganModel->tampilsemua();
                        echo $table;
                    ?>
                </tbody>

            </table>   
    
    </div>
</body>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</html>