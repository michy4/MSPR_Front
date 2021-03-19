<?php
include("../HeadFoot/header.php");
?>
<div class="row">
    <ul class="collapsible popout">

    <?php
    foreach ($response as $card)
    {
        if(( $card['nb_utilisations']<=0 ||
        date("d-m-Y", strtotime(substr($card['date_expiration'],0,10)) ) <
        date("d-m-Y",strtotime(date_default_timezone_set(date_default_timezone_get()))) )
        && $card['utilisateur_id']==$id || is_null($card['utilisateur_id']))
        {
        ?>
        <li>
                    <div class="collapsible-header center-align grey">
                <span class="card-title ">
                    <p><?php echo $card['nom'];?></p>
                    <p class="reduc red-text">-<?php echo ($card['promotion'])*100; ?>%</p>
                </span>

                    </div>
                    <div class="collapsible-body">
                        <img class="image" src="<?php //echo $card['image']; ?>">
                        <p class="description"><?php echo $card['description']; ?></p>
                        <p class="red-text">Expire le: <?php echo date("d-m-Y ", strtotime(substr($card['date_expiration'],0,10))); ?></p>
                    </div>
        </li>
        <br>
        <?php
        }
    }
?>

        <li>
            <div class="collapsible-header center-align grey">
                <span class="card-title ">
                    <p>Sacs à Dos</p>
                    <p class="reduc red-text">-25%</p>
                    <button class="supp red waves-effect waves-light btn" href="#">Supprimer</button>
                </span>
x
            </div>
            <div class="collapsible-body grey">
                <img class="image" src="../../../images/bug.png">
                <p class="description">Offre spéciale pour la rentrée des classes.</p>
                <p class="red-text">Expire le : Date de fin de l'offre</p>
            </div>
        </li>
    </ul>
</div>
</div>
<?php
include("../HeadFoot/footer.php");
?>