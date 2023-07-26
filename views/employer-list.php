<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>


<!-- Main container -->
<main class="container mb-0 my-0 pb-0 px-1 is-fluid is-clipped">
  <!--Columns container -->
  <div class="columns my-0  is-flex is-flex-direction-row">
    <!-- Sidebar conlumn -->


    <?php  if ($connected == true) {include "components/sidebar.php";}  ?>

    <!-- Content column -->
    <div class="column is-rest content">

      <div class="columns is-centered">
        <div class="column  ">
          
          <?php include "../views/components/list-employer.php" ?>

        </div>


      </div>
    </div>


</main>
<?php include "components/sidebar-mobile.php" ?>
<?php include "components/footer.php" ?>