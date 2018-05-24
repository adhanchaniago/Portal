    <?php include '../conn/koneksi.php'; ?>
    <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Berita
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center"> Detail Berita</td>
                </tr>
            
            </table>
        	
            
    	</div>
        
   	    <div class="table_input">
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
			<?php
            $id_berita	= isset($_GET['id_berita']) ? $_GET['id_berita'] : "";
			$query=mysql_query("SELECT * FROM berita_gambar WHERE id_berita='$id_berita'", $konek);
			$data=mysql_fetch_array($query);
			?>        
            
            <tbody>
            	<tr>
                	<td width="30%" align="right">judul</td>
                    <td width="2%">:</td>
                    <td><?php echo $data[1]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">katagori</td>
                    <td>:</td>
                    <td><?php echo $data[2]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">isi berita</td>
                    <td>:</td>
                    <td><?php echo $data[3]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">gambar</td>
					
                    <td>:</td>
                    <td><img width="100%;" class="card-img-top" src="images/<?php echo $data[4]; ?>"></td>
                </tr>
                
                <tr>
                    <td><a href="?page=berita">Kembali</td>
                </tr>
            
            </tbody>
          </table>
 	      </div>
   	  </div>
    </div>
