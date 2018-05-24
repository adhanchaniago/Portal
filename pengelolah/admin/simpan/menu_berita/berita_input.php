<?php
include '../conn/koneksi.php';
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
        <form action="?page=berita_proses" method="post" enctype="multipart/form-data">
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
   	        <tbody>
                <tr>
                	<td width="20%" align="right">Judul Berita</td>
                    <td><input type="text" name="judul_berita" size="50%"></td>
                </tr>
				
                <tr>

                	<td width="20%" align="center">Katagori</td>
					 <td><input type="text" name="id_katagori">
					   <select name="katagori">
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
                    <td width="20%" align="left">&nbsp;</td>
                </tr>
				<tr>
					<td width="20%" align="right">Isi Berita</td>
					<td><textarea name="isi_berita" rows="20" cols="60"></textarea></td>
				</tr>
                <tr>
					<td width="20%" align="right">Gambar</td>
					<td><input id="uploadImage" type="file" name="file"></td>
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