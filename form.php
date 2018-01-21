
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Bootstrap 3 Contact form with Validation</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

      <link rel="stylesheet" href="css/style.css">

  
</head>
<script src="form.js"></script>
<body>

  <div class="container">

    <form class="well form-horizontal" action="regcontrat.php " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Ajouter un Bien</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Nom du Bien</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nomBien" placeholder="nom du bien" class="form-control"  type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Addresse</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="Adresse" placeholder="Adress" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Montant Location</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
  <input name="montantlocation" placeholder="Montant de la Location" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<!--       <div class="form-group">
  <label class="col-md-4 control-label">Commission</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
  <input name="commission" placeholder="Commission" class="form-control"  type="text">
    </div>
  </div>
</div>-->


<!-- Text input-->
       
<!--<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
    </div>
  </div>
</div>-->

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Date debut du contrat</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input id="datedb" name="DateDebut" placeholder="Address" class="form-control" type="date" style="height:50px">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Date fin du contrat</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input id="datefin" name="DateFin" placeholder="Address" class="form-control" type="date" style="height:50px">
    </div>
  </div>
</div>

<!-- Text input-->
 

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Type de Bien</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Choisir le type de bien</option>
      <option>Terrain</option>
      <option>Maison</option>
      <option >Appartement</option>
      <option >Studio</option>
      <option >Chambre</option>
     <!-- <option >Colorado</option>
      <option >Connecticut</option>
      <option >Delaware</option>
      <option >District of Columbia</option>
      <option> Florida</option>
      <option >Georgia</option>
      <option >Hawaii</option>
      <option >daho</option>
      <option >Illinois</option>
      <option >Indiana</option>
      <option >Iowa</option>
      <option> Kansas</option>
      <option >Kentucky</option>
      <option >Louisiana</option>
      <option>Maine</option>
      <option >Maryland</option>
      <option> Mass</option>
      <option >Michigan</option>
      <option >Minnesota</option>
      <option>Mississippi</option>
      <option>Missouri</option>
      <option>Montana</option>
      <option>Nebraska</option>
      <option>Nevada</option>
      <option>New Hampshire</option>
      <option>New Jersey</option>
      <option>New Mexico</option>
      <option>New York</option>
      <option>North Carolina</option>
      <option>North Dakota</option>
      <option>Ohio</option>
      <option>Oklahoma</option>
      <option>Oregon</option>
      <option>Pennsylvania</option>
      <option>Rhode Island</option>
      <option>South Carolina</option>
      <option>South Dakota</option>
      <option>Tennessee</option>
      <option>Texas</option>
      <option> Uttah</option>
      <option>Vermont</option>
      <option>Virginia</option>
      <option >Washington</option>
      <option >West Virginia</option>
      <option>Wisconsin</option>
      <option >Wyoming</option>-->
    </select>
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group" id="nomProp">
  <label class="col-md-4 control-label">Proprietaire</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="nomProp" placeholder="Nom Proprietaire" class="form-control"  type="text">
    </div>
</div>
</div>


<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">Nouveau Proprietaire</label>
                        <div class="col-md-4">
                                <label>
                            <div class="radio">
                                    <input type="radio"data-toggle="modal"data-target="#myModal" class="btn btn-info btn-lg" id="newPropoui" name="ExistProp" value="oui" /> Oui
                                </label>
                            
                                <!--<button type="button"   >Open Modal</button>-->

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <legend class="modal-title">Info Proprietaire</legend>
      </div>
      <div class="modal-body" style="height:200px;width:400px;text-align:center;">
        <p>               <form class="well form-horizontal" action="form.php" method="post">
<fieldset>
<div  id="form_prop">
<!-- Form Name -->


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Nom</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nomProp" placeholder="Voter nom" class="form-control"  type="text" style="width:350px;">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Num Piece</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="numPiece" placeholder="numPiece" class="form-control"  type="text" style="width:350px;">
    </div>
  </div>
</div>





<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Telephone</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="tel" placeholder="(+221)00-000-00-00" class="form-control" type="text" style="width:350px;">
    </div>
  </div>
</div>
</div></p>
      </div>
      <input type="submit" name="valider" value="Enregistrer">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
  
</div>

</form>





                            
                                <label>
                                    <input type="radio" id="newPropnon" name="ExistProp" value="no" /> No
                                </label>
                            </div>
                        </div>
                    </div>

     
<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Text Contrat</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<?php
              use\PDO;
              $bdd = new PDO('mysql:host=;dbname=BDLocation;charset=utf8', 'root', 'adama78',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

                $sql = "SELECT `Text` FROM `TextContrats` WHERE idText = 1";
                $req = $bdd->query($sql);
                while($data = $req->fetch()){

          ?>
          
          <textarea class="form-control" name="comment" style="height:100px" placeholder="" readonly>
          <?php echo $data['Text'] ?>
          </textarea>
          <?php
                }
                ?>

  </div>
  <div class="radio">
                                <label>
                                    <input type="radio" name="textCont" value="oui" /> Acceptez
                                </label>
                          
                          
                                <label>
                                    <input type="radio" name="textCont" value="no" /> Refuser
                                </label>
                            </div>
                            <input type="submit" class="btn btn-warning" name="valider" value="Enregistrer">
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
  </div>
</div>

</fieldset>
</form>
<span class="glyphicon glyphicon-send"></span>

</div>
    </div><!-- /.container -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

  

   <!-- <script  src="js/index.js"></script>-->




</body>

</html>
