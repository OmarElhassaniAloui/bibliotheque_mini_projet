<?php 
    $title  = "modifier Abonnee" ;  
    ob_start() ; 
?>    
    <div class =""> 
        <p> modifier le Abonnee <?=$id_abonne = $_GET['id_abonne']?></p>   
        <form action="index.php?action=modifierAbonne" method="post">  
            <input type="hidden" name="id_abonne" value="<?=$abonnes->id_abonne?>">
            <div class="form-group">
                <label>Abonnee</label>
                <input type="text" class="form-control" name="prenom" placeholder="<?=$abonnes->prenom?>" value="">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success my-2" value="modifier" name="modifier">
            </div>
        </form> 
    </div>

</div>
<?php $content = ob_get_clean() ?> 
<?php include_once 'view/layout.php' ?> 



