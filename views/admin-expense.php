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
        <a href="controller-admin-expense-list.php?id=<?=$expense["id_employer"] ?>" class="icon-color"><i class="bi bi-arrow-left-circle-fill is-size-3 "></i></a>
            <div class="columns is-centered">
                <div class="column is-half">
                    <!-- Notification Success -->
                    <?php if($show) { ?>
                    <div class="notification is-success">
                        <button class="delete"></button>
                        Modification réussi !
                    </div>
                    <?php }?>

                    <?php
                        echo '<img src="' . $base64ImageSrc . '" alt="Image"/>';
                    ?>
                    <!-- Form -->


                    <div class="field">
                        <label class="label">Date de paiement <span class="has-text-danger">
                                <?= $errors["date"] ?? "" ?>
                            </span></label>
                        <div class="control">
                            <input class="input" type="date" value="<?= $expense["payment_date"] ?>" disabled
                            name="expense_date">

                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Type de frais <span class="has-text-danger">
                                <?= $errors["type"] ?? "" ?>
                            </span></label>
                        <div class="control">
                            <div class="select">
                                <select disabled name="expense_type">
                                    <?php foreach($types as $type) { ?>
                                    <option <?php if($expense["id_expense_type"]==$type['id']){echo "selected" ;} ?>
                                        value="
                                        <?= $type['id'] ?>">
                                        <?= $type["name"] ?>
                                    </option>

                                    <?php  }  ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Raison
                            </span></label>
                        <div class="control">
                            <textarea class="textarea" disabled
                                name="expense_reason"><?= htmlspecialchars($expense["reason"]) ?></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Prix TTC <span class="has-text-danger">
                                <?= $errors["price_ttc"] ?? "" ?>
                            </span></label>
                        <div class="control">
                            <input class="input" type="number" disabled value="<?= htmlspecialchars($expense["
                                payment_ttc"] ?? '' ) ?>" step="0.10"
                            name="price_ttc">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Prix HT <span class="has-text-danger">
                                <?= $errors["price_ht"] ?? "" ?>
                            </span></label>
                        <div class="control">
                            <input class="input" type="number" disabled value="<?= htmlspecialchars($expense["
                                payment_ht"] ?? '' ) ?>" step="0.10"
                            name="price_ht">
                        </div>
                    </div>
                    <form action="" method="POST">
                        <div class="field">
                            <label class="label">Raison de refus <span class="has-text-danger">
                                    <?= $errors["reason"] ?? "" ?>
                                </span></label>
                            <div class="control">
                                <textarea class="textarea" name="reason"
                                    placeholder="Laissez vide en cas de validation"></textarea>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-text-centered my-3">
                                <button value="" name="valid" class="button is-primary is-outlined"
                                    type="submit">Valider</button>
                                <button value="" name="invalid" class="button is-danger is-outlined"
                                    type="submit">Refusé</button>
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

