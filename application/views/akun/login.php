<?php 

?>
<li class = "nav-item dropdown">
                    <a class = "nav-link dropdown-toggle"  role="button" data-toggle = "dropdown" aria-haspopup="true" data-target="dropdown_target" href = "#" style = "padding-top:8px;">
					<?= $_SESSION['nama'] ?>
                        <span class = "caret"></span>
                    </a>
                    <div class = "dropdown-menu" aria-labelledby="dropdown_target">
                                <a class = "dropdown-item" style="text-align:center"><img src = "<?php echo base_url('assets/img_avatar2.png') ?>" style = "width: 40px;"></a>
                                <div class='dropdown-divider'></div>
                                        <button class = "dropdown-item"><?= $_SESSION['nama'] ?></button>
                                        <?php if($_SESSION['status']=='Mitra'){
											$this->load->view('spatial/buttonMitra');
										}?>
                                        <form action="<?php echo base_url('UserController/setting'); ?>" method="post">
                                        <button class = "dropdown-item"  style = "background-color:bg-danger">Setting</button>
                                        </form>
										<form action="<?php echo base_url('UserController/signout'); ?>">
										<button class = "dropdown-item">Log Out</button>
										
										</form>
                    </div>
                </li>
