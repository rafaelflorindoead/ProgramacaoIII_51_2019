		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Mais lidas</a>
            <?php
              foreach($noticia as $lista){
            	?>
                <a href="pg2.php?id=<?php echo $lista["id"];?>" class="list-group-item"><?php echo $lista["titulo"]; ?></a>
            <?php 
        		} 
        		?>           
          </div>  
        </div>