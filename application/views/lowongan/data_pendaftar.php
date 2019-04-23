<!DOCTYPE html>
<html lang="en">
<head>
    <title>data Pendaftar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <br>
    <div class='container-fluid'>
        <h1 style="text-align:center">DAFTAR LOWONGAN</h1>
        <table id="example" class="table table-striped table-bordered" width="100%" height="50px">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pendaftar</th>
                        <th>Nim</th>
                        <th>Perguruan tinggi</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                        <th>Semester</th>
                        <th>SKS yang telah di ambil</th>
                        <th>IPK terakhir</th>
                        <th>berkas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $table=$this->LowonganModel->tampilpendaftar();
                            echo $table;
                    ?>
                </tbody>

            </table>
</div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script>
    function hapus() {
        confirm("apakah anda yakin? ");
    }
</script>

</body>
</html>