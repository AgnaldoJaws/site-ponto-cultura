

 <form class="form-horizontal" action="<?php echo home_url('/');?>" method="get">
 <div class="input-group">
   <input type="search" class="form-control" name="s" value="<?php echo get_search_query();?>" placeholder="Procurar">
   <div class="input-group-btn btn-search">
     <button class="btn btn-primary" type="submit">
       <i class="glyphicon glyphicon-search"></i>
     </button>
   </div>
 </div>
</form>
<br>
