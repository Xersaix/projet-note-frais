<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>


<!-- Main container -->
<main class="container mb-0 my-0 pb-0 px-1 is-fluid ">
    <!--Columns container -->
    <div class="columns my-0  is-flex is-flex-direction-column">
        <!-- Sidebar conlumn -->
      

            <?php  if ($connected == true) {include "components/sidebar.php";}  ?>

        <!-- Content column -->
        <div class="column is-rest">

        <div class="columns is-centered">

        <?php  if ($connected == false) {include "components/subscribe-form.php";}  ?>
        </div>


        </div>
    </div>
    </main>
<?php include "components/sidebar-mobile.php" ?>
<?php include "components/footer.php" ?>