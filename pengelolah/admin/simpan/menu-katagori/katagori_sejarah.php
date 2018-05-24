   <?php
   include '../conn/koneksi.php';
   ?>
   
   <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">DATA SEJARAH
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
    	</div>
        <div id="bungkus">
				<?php
					$query = "SELECT * FROM berita_gambar a, sub_katagori b WHERE a.id_katagori=2 AND b.id_katagori=2 GROUP BY a.id_berita ORDER by b.id_katagori DESC";
					$sql = mysql_query($query);
					$total = mysql_num_rows($sql);
					$no = 1;
					
					while ($num=mysql_fetch_array($sql)) {
				?>
                  <div id="gambar"><img width="50%;" class="card-img-top" src="menu_berita/images/<?php echo $num['nama gambar']; ?>">
                      <div id="bk_judul">
                        <div id="judul"><?php echo $num['judul_berita']; ?></div>
                      </div>
                  </div>
                   <div class="clear"></div>
					  <?php
                        }
                      ?>
                  
        </div>
			
        <div id="menu_bottom">
       	  <table width="100%" style="border:0px solid #9cc;">
            	
            </table>
    	</div>
   	  </div>
    </div>