<div class="row">
                    <div class="col-md-12">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">CONTACT FORM</h2>
							<br>
                        </div>
                        <?php
                        
                            if(isset($_POST['submit_pertanyaan'])) {
                                
                                $nama = $_POST['nama'];
                                $email = $_POST['email'];
                                $no_hp = $_POST['no_hp'];
                                $pertanyaan = $_POST['pertanyaan'];
                                
                                
                                if(empty($nama) || empty($email) || empty($no_hp) || empty($pertanyaan)){
                                    echo '<div class="warning">Data tidak boleh kosong</div>';
                                }else{
                                    $insert = mysqli_query($koneksi, "INSERT INTO pertanya(nama,email,no_hp,pertanyaan) 
                                        VALUES('$nama','$email','$no_hp','$pertanyaan')");
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
                           <input type="email" class="form-control" name="email" required="required" placeholder="Email*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="no_hp" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="pertanyaan" rows="7" placeholder="Message"></textarea>
                            </div>
                            <div class="mbr-buttons mbr-buttons-left"><button type="submit" name="submit_pertanyaan" class="mbr-buttons__btn btn btn-lg btn-danger">KIRIM</button></div>
                        </form>
                    </div>
					</div>
			<br>
			<br>
			<br>
			
			<hr>
                <div class="row">
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><strong>ADDRESS</strong><br>
							parawisata bangka belitung<br>
							Pangkalpinang, bangka belitung</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><strong>CONTACTS</strong><br>
							Email	: yuliani@gmail.com<br>
							Phone	: 0857-6454-7233<br>
							Fax		: 0857-6454-7233</p>
                    </div>
                    <div class="col-sm-4"><p class="mbr-contacts__text"><strong>LINKS</strong></p><ul class="mbr-contacts__list"><li><a class="mbr-contacts__link text-gray" href="#">Website builder</a></li><li><a class="mbr-contacts__link text-gray" href="#">Download for Windows</a></li><li><a class="mbr-contacts__link text-gray" href="#">Download for Mac</a></li></ul></div>
</div>