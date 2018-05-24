<div class="row">
                    <div class="col-md-12">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text" align="center" >Balas chat</h2>
							<br>
                        </div>
                        <?php
                        
                            if(isset($_POST['submit_pertanyaan'])) {
                                
                                $nama = $_POST['nama'];
                                $pertanyaan = $_POST['pertanyaan'];
                                
                                
                                if(empty($nama) || empty($pertanyaan)){
                                    echo '<div class="warning">Data tidak boleh kosong</div>';
                                }else{
                                    $insert = mysqli_query($koneksi, "INSERT INTO pertanya(nama,pertanyaan) 
                                        VALUES('$nama','$pertanyaan')");
                                    if ($insert){
                                        echo '<div class="success">User berhasil disimpan</div>';
                                    }else{
                                        echo '<div class="warning">User gagal disiman</div>';
                                    }
                                }
                            }
                            ?>

                        
                        <form action="" method="post">
                            <div class="form-group">
                          <input type="text" class="form-control" name="nama" required="required" placeholder="Name*">
                            
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="pertanyaan" rows="7" placeholder="Message"></textarea>
                            </div>
                            <div class="mbr-buttons mbr-buttons-left"><button type="submit" name="submit_pertanyaan" class="mbr-buttons__btn btn btn-lg btn-danger">KIRIM</button></div>
                        </form>
                    </div>
					</div>