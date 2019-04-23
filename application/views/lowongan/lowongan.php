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
<br><br><br><br>
    <div class = "container">
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

        
        <div class="row justify-content-md-center">
                    <div class="col-sm text-center text-md-center p-2 Low1" href="test"><a href="test">
                      <img src = "<?php echo base_url('application/views/lowongan/assets/Administration.png'); ?>" style="cursor:pointer;" href='#'>
                        <br>
                        <h5 style="cursor:pointer;">Administrasi & Koordinasi</h5></a>
                    </div>
                    <div class="col-sm text-center text-md-center p-2  Low1">
                            <img src = "<?php echo base_url('application/views/lowongan/assets/Media.png'); ?>" style="cursor:pointer;" href='#'>
                            <h5 style="cursor:pointer;"> Media Kreatif</h5>
                        </div>
                    <div class="col-sm text-center text-md-center p-2  Low1">
                            <img src = "<?php echo base_url('application/views/lowongan/assets/Accounting.png'); ?>" style="cursor:pointer;" href='#'>
                            <h5 style="cursor:pointer;">Akuntansi & Finansial</h5>
                        </div>
                    <div class="col-sm text-center text-md-center p-2  Low1">
                            <img src = "<?php echo base_url('application/views/lowongan/assets/General.png'); ?>" style="cursor:pointer;" href='#'>
                            <h5 style="cursor:pointer;">General Service</h5>
                        </div>
        </div>
        <div class="row justify-content-md-center">
                <div class="col-sm text-center text-md-center p-2  Low1">
                  <img src = "<?php echo base_url('application/views/lowongan/assets/sdm.png'); ?>" style="cursor:pointer;" href='#'>
                    <h5 style="cursor:pointer;">Sumber Daya Manusia</h5>
                </div>
                <div class="col-sm text-center text-md-center p-2  Low1">
                        <img src = "<?php echo base_url('application/views/lowongan/assets/IT.png'); ?>" style="cursor:pointer;" href='#'>
                        <h5 style="cursor:pointer;">IT & Software</h5>
                    </div>
                <div class="col-sm text-center text-md-center p-2  Low1">
                        <img src = "<?php echo base_url('application/views/lowongan/assets/Management.png'); ?>" style="cursor:pointer;" href='#'>
                        <h5 style="cursor:pointer;">Manajemen & Konsultan</h5>
                    </div>
                <div class="col-sm text-center text-md-center p-2  Low1">
                        <img src = "<?php echo base_url('application/views/lowongan/assets/Sales.png'); ?>" style="cursor:pointer;" href='#'>
                        <h5 style="cursor:pointer;">Sales & Marketing</h5>
                    </div>
    </div>
    </div>
</body>
</html>