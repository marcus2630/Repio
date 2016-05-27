<?php
    require('settings.php');
    require('header.php'); 
?>
    
<div class="alert alert-info alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>OBS:</strong> Siden er stadig i BETA fasen. Tak for din forståelse.
</div>
        
<?php if($settings['showJumbo'] == true) {require('jumbo.php');} ?> 
<?php if($settings['showAppleMenu'] == true) {require('appleMenu.php');} ?> 


<div class="row">
    
    <div class="col-lg-8 beskeder">
        <ul class="nav nav-tabs nav-justified">
            <li role="presentation"><a href="#">GSX Nyheder</a></li>
            <li role="presentation" class="active"><a href="#">Beskeder</a></li>
            <li role="presentation"><a href="#">Statistik</a></li>
        </ul>
            <!--
        <canvas id="chartForUgen" height="100"></canvas>
        <canvas id="chartForAaret" height="100"></canvas>  

-->
        
        
        <div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="img/marcus.jpg" alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Dolor brunch.<button type="button" class="btn btn-default pull-right">Svar <span class="glyphicon glyphicon-share-alt"></span></button></h4>
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
      <br/><small><i> - Mikkel Kruse</i></small>
  </div>
</div>
        
                <div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="img/yeah.jpg" alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"> Sunt aliqua put a bird on it squid single-origin! <button type="button" class="btn btn-default pull-right">Svar <span class="glyphicon glyphicon-share-alt"></span></button></h4>
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
      <br/><small><i> - Thomas Grønhøj</i></small>
      
  </div>
</div>
                <div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="img/uhm.jpg" alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Nihil anim keffiyeh helvetica <button type="button" class="btn btn-default pull-right">Svar <span class="glyphicon glyphicon-share-alt"></span></button></h4>
    Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
      <br/><small><i> - Signe Hansen</i></small>
  </div>
</div>
        
        
        
        <nav>
  <ul class="pager">
    <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Tilbage</a></li>
    <li class="next disabled"><a href="#">Frem <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>
    </div>
    <div class="col-lg-4 history">
        
        <div class="panel panel-default">
            <div class="panel-body">
                Reparationshistorik
            </div>
        </div>
        
        <div class="list-group history">

        <div  class="list-group-item">Mette Nielsen <small> #785168 </small>
            <span class="pull-right">
                <span class="glyphicon glyphicon-user" data-toggle="tooltip" data-placement="top" title="Gå til kunde"></span>
                <a href="#" data-toggle="modal" data-target="#modal">
                    <span class="glyphicon glyphicon-wrench" data-toggle="tooltip" data-placement="top" title="Gå til reparation"></span></a>
                <span class="glyphicon glyphicon-barcode" data-toggle="tooltip" data-placement="top" title="Gå til produkt"></span>
            </span>
        </div>
        <div  class="list-group-item">Mette Nielsen <small> #785168 </small>
            <span class="pull-right">
                <span class="glyphicon glyphicon-user" data-toggle="tooltip" data-placement="top" title="Gå til kunde"></span>
                <a href="#" data-toggle="modal" data-target="#modal">
                    <span class="glyphicon glyphicon-wrench" data-toggle="tooltip" data-placement="top" title="Gå til reparation"></span></a>
                <span class="glyphicon glyphicon-barcode" data-toggle="tooltip" data-placement="top" title="Gå til produkt"></span>
            </span>
        </div>
        <div  class="list-group-item">Mette Nielsen <small> #785168 </small>
            <span class="pull-right">
                <span class="glyphicon glyphicon-user" data-toggle="tooltip" data-placement="top" title="Gå til kunde"></span>
                <a href="#" data-toggle="modal" data-target="#modal">
                    <span class="glyphicon glyphicon-wrench" data-toggle="tooltip" data-placement="top" title="Gå til reparation"></span></a>
                <span class="glyphicon glyphicon-barcode" data-toggle="tooltip" data-placement="top" title="Gå til produkt"></span>
            </span>
        </div>
    
        </div>   
        
 
    </div>
</div><!-- row -->
<?php require('footer.php'); ?>