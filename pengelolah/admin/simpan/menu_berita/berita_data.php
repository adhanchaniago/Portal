   <?php
   include '../conn/koneksi.php';
   ?>
   
   <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Berita
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<form action="?page=berita_search" method="post">
        	<table width="100%" height="100%" style="border:1px solid #9cc;">
            	<tr>
                	<td width="50%"><a href="?page=berita_input">Input Berita</a></td>
					</td>
                   
                </tr>
            </table>
            </form>
    	</div>
   	    <div class="zebra-table">
   	      <table width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
   	        <thead align="center">
   	          <tr>
   	            <th align="center" width="5%" >No</th>
   	            <th width="25%">Judul</th>
   	            <th width="20%">Katagori</th>
   	            <th width="20%">Isi Berita</th>
   	            <th width="15%">Foto</th>
                <th width="8%">Edit</th>
                <th width="8%">Hapus</th>
              </tr>
            </thead>
            <?php
				$query = "SELECT * FROM berita_gambar a, sub_katagori b WHERE a.id_katagori=b.id_katagori GROUP BY a.id_berita ORDER by b.id_katagori DESC";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				
				while ($num=mysql_fetch_array($sql)) {
			?>
   	        <tbody>
   	          <tr>
   	            <td align="center"><?php echo $no; ?></td>
   	            <td ><a href="#"class="detil"><?php echo $num['judul_berita']; ?></a></td>
   	            <td ><?php echo $num['id_katagori']; ?></td>
   	            <td ><?php echo $num['isi_berita']; ?></td>
   	            <td align="center"><img width="100%;" class="card-img-top" src="menu_berita/images/<?php echo $num['nama gambar']; ?>"></td>
                <td align="center"><a href="?page=berita_edit&id_berita=<?php echo $num['id_berita'];?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                <td align="center"><a href="?page=berita_hapus&id_berita=<?php echo $num['id_berita']; ?>" onclick="return confirm('Anda yakin ingin menghapus berita <?php echo $num['judul_berita']; ?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>
              </tr>
              
            <?php $no++; } ?>
            
            </tbody>
          </table>
          </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%"> Jumlah berita : <?php echo $total; ?> Berita</td>
                    
                </tr>
            </table>
    	</div>
   	  </div>
    </div>