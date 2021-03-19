<?php
include("../HeadFoot/header.php");
?>
<div class="row">
    <ul class="collapsible popout">

    <?php
    foreach ($response as $card)
    {
        if(( $card['nb_utilisation']<=0 ||
        (date("d-m-Y", strtotime(substr($card['date_expiration'],0,10)))
         < date("d-m-Y"))==1
        ))
        {
            if($card['utilisateur_id']==$id)
            {
            ?>
            <li>
                        <div class="collapsible-header center-align grey">
                    <span class="card-title ">
                        <p><?php echo $card['nom'];?></p>
                        <p class="reduc red-text">-<?php echo ($card['promotion'])*100; ?>%</p>
                    <button class="supp red waves-effect waves-light btn" href="#">Supprimer</button>
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
    }
?>
    </ul>
</div>
</div>
<?php
include("../HeadFoot/footer.php");
?>