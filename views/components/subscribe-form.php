<!-- Formulaire de connection -->

<div class="column is-3">
    <?php if($success) { ?>

        <div class="notification is-success"id="notif">
            <button class="delete" id="delete-notif"></button>
            <i class="bi bi-check-circle mr-2"></i><p> Creation de compte reussi. <br>
        Veuillez vous connecter. </p>
        </div>
        <?php  } ?>
  <form action="" method="POST">
    <!-- Lastname -->
    <div class="field">
        <label for="lastname">Nom* <span class="has-text-danger"><?= $errors["lastname"] ?? "" ?></span></label>
        <div class="control">
            <input class="input" name="lastname" type="text" placeholder="Exemple: George" value="<?= $_POST["lastname"] ?? "" ?>" id="lastname">
        </div>
    </div>
    <!-- Firstname -->
    <div class="field">
        <label for="firstname">Prénom* <span class="has-text-danger"><?= $errors["firstname"] ?? "" ?></span></label>
        <div class="control">
            <input class="input" type="text" name="firstname" placeholder="Exemple: Dupont"value="<?= $_POST["firstname"] ?? "" ?>" id="firstname">
        </div>
    </div>
    <!-- Email Adresse -->
    <div class="field">
        <label for="email">E-mail* <span class="has-text-danger"><?= $errors["email"] ?? "" ?></span></label>
        <div class="control has-icons-left">
            <input class="input" type="email" name="email" placeholder="Exemple: george_dupont@gmail.com" value="<?= $_POST["email"] ?? "" ?>" id="email">
            <span class="icon  is-small is-left">
                <i class="bi bi-envelope-fill"></i>
            </span>
        </div>

    </div>
    <!-- Phone number -->
    <div class="field">
        <label for="phone">Numéro de téléphone* <span class="has-text-danger"><?= $errors["phone"] ?? "" ?></span></label>
        <div class="control has-icons-left">
            <input class="input" type="tel" name="phone" placeholder="Exemple: 0622385602" value="<?= $_POST["phone"] ?? "" ?>" id="phone">
            <span class="icon  is-small is-left">
                <i class="bi bi-telephone-fill"></i>
            </span>
        </div>
    </div>
    <!-- Password -->
    <div class="field">
        <label for="password">Mot de passe* <span class="has-text-danger"><?= $errors["password"] ?? "" ?></span></label>
        <div class="control has-icons-left has-icons-right">
            <input class="input" type="password" name="password" placeholder="Mot de passe" value="<?= $_POST["password"] ?? "" ?>" id="password">
            <span class="icon  is-small is-left ">
                <i class="bi bi-lock-fill "></i>
            </span>
            <span class="icon  is-small is-right">
                <i class="bi bi-eye-fill is-clickable has-text-black "id="pass-view"></i>
            </span>
        </div>
    </div>
    <!-- Password confirmation -->
    <div class="field">
        <label for="password2">Confirmation du mot de passe* <span class="has-text-danger"><?= $errors["password2"] ?? "" ?></span></label>
        <div class="control has-icons-left has-icons-right">
            <input class="input" type="password" name="password2" placeholder="Confirmation du mot de passe" id="password2">
            <span class="icon  is-small is-left">
                <i class="bi bi-lock-fill"></i>
            </span>
            <span class="icon  is-small is-right">
                <i class="bi bi-eye-fill is-clickable has-text-black"id="pass2-view"></i>
            </span>
        </div>
    </div>

    <div class="field has-text-centered">
        <div class="control">
            <button class="button is-dark is-size-4 is-rounded" type="submit">S'inscrire</button>
        </div>
    </div>
</form>  
</div>
<script src="../assets/script/subscribe-form.js"></script>