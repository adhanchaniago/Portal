  <style type="text/css">
	.lap {
		text-decoration:none;
	}
	.table_input a:hover {
		color:#0FF;
	}
	</style>
	
	<?php include '../conn/koneksi.php'; ?>
    <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Katagori
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">All Katagori</td>
                </tr>
            
            </table>
        	
            
    	</div>
        
   	    <div class="table_input">
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
            <tbody>
            	<tr>
                	<td width="30%"><a href="?page=katagori_pantai" class="lap" target="_blank">1. Katagori Pantai</a></td>
                </tr>
                <tr>
                	<td width="30%"><a href="?page=katagori_sejarah" class="lap" target="_blank">2. Katagori Sejaran</a></td>
                </tr>
                <tr>
                	<td width="30%"><a href="?page=katagori_wisata" class="lap" target="_blank">3. Katagori wisata</a></td>
                </tr>
                
            </tbody>
          </table>
 	      </div>
   	  </div>
    </div>
