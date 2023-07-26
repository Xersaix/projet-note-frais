<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>


<!-- Main container -->
<main class="container mb-0 my-0 pb-0 px-1 is-fluid ">
    <!--Columns container -->
    <div class="columns my-0  is-flex is-flex-direction-row">
        <!-- Sidebar conlumn -->


        <?php  if ($connected == true) {include "components/sidebar.php";}  ?>

        <!-- Content column -->
        <div class="column is-rest">

            <div class="columns is-centered">
                <div class="column is-half">
                    <!-- Notification Success -->
                    <?php if($show) { ?>
                    <div class="notification is-success">
                        <button class="delete"></button>
                        Creation réussi !
                    </div>
                    <?php }?>

                    
                    <!-- Form -->

                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="field">
                            <label class="label">Date de paiement <span class="has-text-danger">
                                    <?= $errors["date"] ?? "" ?>
                                </span></label>
                            <div class="control">
                                <input class="input" type="date"
                                    value="<?= htmlspecialchars($_POST['expense_date'] ?? '') ?>" name="expense_date">

                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Type de frais <span class="has-text-danger">
                                    <?= $errors["type"] ?? "" ?>
                                </span></label>
                            <div class="control">
                                <div class="select">
                                    <select name="expense_type">
                                        <?php foreach($types as $type) { ?>
                                        <option value="<?= $type['id'] ?>">
                                            <?= $type["name"] ?>
                                        </option>

                                        <?php  }  ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Raison <span class="has-text-danger">
                                    <?= $errors["reason"] ?? "" ?>
                                </span></label>
                            <div class="control">
                                <textarea class="textarea"
                                    name="expense_reason"><?= htmlspecialchars($_POST['expense_reason'] ?? '') ?></textarea>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Prix TTC <span class="has-text-danger">
                                    <?= $errors["price_ttc"] ?? "" ?>
                                </span></label>
                            <div class="control">
                                <input class="input" type="number"
                                    value="<?= htmlspecialchars($_POST['price_ttc'] ?? '') ?>" step="0.10"
                                    name="price_ttc">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Prix HT <span class="has-text-danger">
                                    <?= $errors["price_ht"] ?? "" ?>
                                </span></label>
                            <div class="control">
                                <input class="input" type="number"
                                    value="<?= htmlspecialchars($_POST['price_ht'] ?? '') ?>" step="0.10"
                                    name="price_ht">
                            </div>
                        </div>

                                                <!-- File -->
                                                <div class="field">
                            <label class="label">Justificatif <span class="has-text-danger">
                                    <?= $errors["file"] ?? "" ?>
                                </span></label>
                            <div class="control">
                                <input class="input" type="file"
                                    value="<?= htmlspecialchars($_POST['file'] ?? '') ?>"
                                    name="file">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-text-centered my-3">
                                <button class="button is-primary is-outlined" type="submit">Ajouter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

</main>
<script src="../assets/script/notif.js"></script>
<?php include "components/sidebar-mobile.php" ?>
<?php include "components/footer.php" ?>