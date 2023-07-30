


<aside class="menu ">
<div class="column is-narrow side-menu sidebar-color is-hidden-mobile">
    <ul class="menu-list has-text-white">
    <a href="controller-home.php"class=" has-text-white ml-3  mb-3"><i class="bi bi-house-door-fill mr-2 is-size-4"></i>Accueil</a>
    <!-- User -->
    <?php if(!$_SESSION["admin"]) { ?>
    <li><a href="controller-new-expense.php"class="has-text-white"><i class="bi bi bi-plus-circle is-size-4 mr-2 has-text-white"></i>Nouvelle note</a></li>
    <li><a href="controller-employer-expense-list.php"class="has-text-white"><i class="bi bi bi-card-list is-size-4 mr-2 has-text-white"></i>Liste des note de frais</a></li>
    <?php } ?>
    <!-- Admin user -->
    <?php if($_SESSION["admin"]) { ?>
    <li><a href="controller-employer-list.php"class="has-text-white"><i class="bi bi-person-circle is-size-4 mr-2"></i>Liste des employer</a></li>
    
    <?php } ?>
    </ul>
    </div>
</aside>