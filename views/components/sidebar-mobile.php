<div class="container is-flex  is-justify-center is-align-items-center is-justify-content-space-around  sidebar-mobile is-fluid  is-hidden-tablet">

<?php if(!$_SESSION["admin"]) { ?>

<a href="controller-new-expense.php"class="has-text-white is-flex is-flex-direction-column has-text-centered"><i class="bi bi bi-plus-circle is-size-4 mr-2 has-text-white"></i>Nouvelle note</a>


<a href="controller-employer-expense-list.php"class="has-text-white is-flex is-flex-direction-column has-text-centered"><i class="bi bi bi-card-list is-size-4 mr-2 has-text-white"></i>Liste des note de frais</a>

<?php } ?>


<?php if($_SESSION["admin"]) { ?>

    <a href="controller-employer-list.php"class="has-text-white"><i class="bi bi-person-circle is-size-4 mr-2"></i>Liste des employer</a>

<?php  } ?>

</div>