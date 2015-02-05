<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Sidebar</h3>
  </div>
  <div class="panel-body">
    <div class="list-group">
      
      <?php
    for( $i=0; $i<sizeof($list); $i++){
        echo  '<a href="#" class="list-group-item">'.$list[$i].'</a>'; 
    }
      ?>
      
      
      
    </div>
  </div>
</div>