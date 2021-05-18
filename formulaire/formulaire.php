<?php
include ("layout/header.php"); 
include ("cible.php");
?> 

<div class="row">
        <form action="" method="post">
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div>
                <label for="mail">e-mail :</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <div>
                <label for="msg">Message :</label>
                <textarea id="msg" name="user_message"></textarea>
            </div>
        </form>

        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
</div>

<section class="col-12 col-md-6">
    <h2>Vos informations bancaires</h2>
        <?php if(isset($account)): ?>
            <ul class="list-group">
                <li class="list-group-item"><?php echo $account["name"] ?></li>
                <li class="list-group-item"><?php echo $account["amount"] ?></li>
            </ul>
        <?php endif; ?>
</section>


<?php include ("layout/footer.php"); ?> 