<!-- Navbar container -->
<nav class="container is-fixed mr-0 p-1 is-fluid has-background-white">
    <!-- Columns begining -->
    <div class="columns is-flex is-flex-direction-row m-0 is-justify-content-space-between">

        <!-- Logo div -->
        <div class="column is-2 is-flex m-0  is-align-items-center">

            <a href="controller-home.php"><i class="bi bi-calculator is-size-2 logo"></i></a>
            <p class="title has-text-center">Title</p>
        </div>

        <!-- Icon user -->

        <div class="column dropdown is-right is-narrow is-flex m-0  is-align-items-center is-justify-content-end"id="dropdown-container" >

            <p class="mr-3"><?= $_SESSION["firstname"] ?> <?= $_SESSION["lastname"] ?></p>
            <i class="bi bi-person-circle is-size-3 dropdown-trigger  mr-2"id="dropdown-trigger"></i>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                <?php if(!$connected){ ?>
                  <a href="controller-connection.php" class="dropdown-item">
                  Se connecter
                  </a>
                  <a href="controller-inscription.php" class="dropdown-item">
                   S'inscrire
                  </a>
                  <?php } ?>
                  <?php if($connected){ ?>
                  <a href="#" class="dropdown-item">
                  Mon Profil
                  </a>


                  <hr class="dropdown-divider">
                  <a href="controller-disconnect.php" class="dropdown-item">
                  Se Déconnecter
                  </a>
                  <?php } ?>
                </div>

        </div>


        

    </div>
    <!-- Columns End -->
    <script src="../assets/script/navbar.js"></script>
</nav>