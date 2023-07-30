<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>


<!-- Main container -->
<main class="container mb-0 my-0 pb-0 px-1 is-fluid  ">
    <!--Columns container -->
    <div class="columns my-0  is-flex is-flex-direction-row">
        <!-- Sidebar conlumn -->


        <?php  if ($connected == true) {include "components/sidebar.php";}  ?>

        <!-- Content column -->
        <div class="column is-rest home">

            <div class="columns is-centered">
                <div class="column is-flex is-flex-direction-row is-justify-content-space-around  has-text-centered">
                    <span>
                    <p class="is-size-4 has-text-weight-bold ">Frais en attente:</p>
                    <p class="has-text-info subtitle has-text-weight-bold"> <?= $in_wait["number"] ?></p>
                    </span>
                
                    <span>
                    <p class="is-size-4 has-text-weight-bold ">Frais Remboursé:</p>
                    <p class="has-text-success subtitle has-text-weight-bold"> <?= $valided["number"] ?></p>
                    </span>
               
                    <span>
                    <p class="is-size-4 has-text-weight-bold ">Frais annulé:</p>
                    <p class="has-text-danger subtitle has-text-weight-bold"> <?= $refused["number"] ?></p>
                    </span>
                </div>
            </div>


        </div>
    </div>

</main>
<?php include "components/sidebar-mobile.php" ?>
<?php include "components/footer.php" ?>