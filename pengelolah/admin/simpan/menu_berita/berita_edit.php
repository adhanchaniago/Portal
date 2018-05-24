<?php 
include '../conn/koneksi.php';
$tanggal = date('Y-m-d');
 $jam = date('H:i:s');
 $Waktu = $tanggal.' '.$jam;
 
$id_berita = $_GET['id_berita'];
$query = "SELECT * FROM berita_gambar where id_berita='$id_berita'";
$sql = mysql_query($query);
$num = mysql_fetch_array($sql);

$folder			="menu_berita/images/";
$id_berita		= $_POST['id_berita'];
$judul_berita	= $_POST['judul_berita'];
$nm_katagori 	= $_POST['nm_katagori'];
$isi_berita 	= $_POST['isi_berita'];
$waktu			= $_POST['waktu'];
$file 			= rand(2000,200000)."-".$_FILES['file']['name'];
$file_loc 		= $_FILES['file']['tmp_name'];
move_uploaded_file($file_loc,$folder.$file);

?>
<!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Berita
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">Input Berita</td>
                </tr>
            </table>
            
    	</div>
   	    <div class="table_input">
        <form action="?page=berita_proses_edit" method="post" enctype="multipart/form-data">
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
   	        <tbody>
            	
                <tr>
                	<td width="20%" align="right">Judul Berita</td>
                    <td><input type="text" name="judul_berita" size="50%" value="<?php echo $num['judul_berita']; ?>"></td>
                </tr>
				
				
				
                <tr>
                	<td width="20%" align="right">Katagori</td>
                    <td><select name="katagori" id="katagori">
                        <?php $sql = mysql_query("SELECT * FROM  sub_katagori where id_katagori");?>
                    		<option value="">Pilih katagori</option>
							<?php 		 
							while ($data = mysql_fetch_array($sql))
							{
							?>
                    		<option value="<?php echo $data['id_katagori']; ?>"><?php echo $data['nm_katagori']; ?></option>
							<?php 
							}
							?>	
                      </select>
                    </td>
                </tr>
				<tr>
					<td width="20%" align="right">Isi Berita</td>
					<td><textarea name="isi_berita" rows="20" cols="60"><?php echo $num['isi_berita']; ?></textarea></td>
				</tr>
                <tr>
					
					<td width="20%" rowspan="2" align="right">Gambar</td>
					
					<td height="137" valign="top">
					<table width="37%" height="141" border="1">
					  <tr>
					    <td valign="top">
						<img width="100%;" class="card-img-top" src="menu_berita/images/<?php echo $num['nama gambar']; ?>"></td>
				      </tr>
				    </table></td>
				</tr>
                <tr>
                  <td><input id="uploadImage" type="file" name="file" /></td>
                </tr>
				
                	<td></td>
                    <td><input name="button" type="button" onclick="window.location = '?page=berita';" value="Kembali"/>
						<input type="submit" value="Simpan"></td>
                </tr>
                
            
            </tbody>
          </table>
          </form>
 	      </div>
   	  </div>
    </div>