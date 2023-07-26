<!-- Formulaire de connection -->

<div class="column is-3">
  <form action="" method="POST">

    <!-- Email Adresse -->
    <div class="field">
        <label for="email">E-mail* <span class="has-text-danger"><?= $errors["email"] ?? "" ?></span></label>
        <div class="control has-icons-left">
            <input class="input" type="email" name="email" placeholder="E-mail" value="<?= $_POST["email"] ?? "" ?>" id="email">
            <span class="icon  is-small is-left">
                <i class="bi bi-envelope-fill"></i>
            </span>
        </div>

    </div>

    <!-- Password -->
    <div class="field">
        <label for="password">Mot de passe*<span class="has-text-danger"><?= $errors["password"] ?? "" ?></label>
        <div class="control has-icons-left has-icons-right">
            <input class="input" type="password" name="password" placeholder="Mot de passe" value="<?= $_POST["password"] ?? "" ?>" id="password">
            <span class="icon  is-small is-left">
                <i class="bi bi-lock-fill"></i>
            </span>
            <span class="icon  is-small is-right">
                <i class="bi bi-eye-fill is-clickable has-text-black "id="pass-view"></i>
            </span>
        </div>
    </div>

    <!-- Confirmation Button -->
    <div class="field has-text-centered">
        <div class="control">
            <button class="button is-dark is-size-4 is-rounded" type="submit">Se connecter</button>
        </div>
    </div>
</form>  
</div>
<script src="../assets/script/subscribe-form.js"></script>