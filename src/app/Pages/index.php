
    <?php include("../HeadFoot/header.php"); ?>
    <!-- Contenu principal -->
            <ul class="collapsible popout">

<?php
    foreach ($response as $card)
    {
        if(( $card['nb_utilisations']>0 || substr($card['date_expiration'],0,10)>=date_default_timezone_set(date_default_timezone_get())
        && is_null($card['utilisateur_id'])))
        {
        ?>
        <li>
                    <div class="collapsible-header center-align">
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
            </ul>
</div>
<?php
include("../HeadFoot/footer.php");
?>
</body>
</html>