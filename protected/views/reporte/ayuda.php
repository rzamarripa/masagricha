<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $res["numero"]; ?>">
        <?php echo $res["titulo"]; ?>
      </a>
	 </div>
    <div id="collapse<?php echo $res["numero"]; ?>" class="accordion-body collapse">
      <div class="accordion-inner">
		  <?php echo $res["descripcion"]; ?>
      </div>
    </div>
  </div>				  
</div>	