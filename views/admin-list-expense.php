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

      <div class="columns  is-flex is-flex-direction-column">

        <div class="column is-clipped">
        <div class="primary-color p-2 is-rounded">
          <p class="is-size-5 has-text-white">Liste des frais</p>
          </div>
        <!-- Table containing the list of expens of the worker -->
        <div class="table-container">
        <table class="table table is-hoverable is-bordered is-striped">
            <thead class="is-narrow">
              <tr>

                <th><abbr title="Played">Date</abbr></th>
                <th><abbr title="Won">Status</abbr></th>
                <th><abbr title="Drawn">Montant TTC</abbr></th>
                <th><abbr title="Numero de téléphone">Montant HT</abbr></th>
                <th><abbr title="Lost">Raison</abbr></th>
                <th></th>
              </tr>
            </thead>
            <!-- Table body for values -->
            <tbody>


            <?php foreach ($list as  $value) { ?>
             
              <tr>
                <th><?= $value["payment_date"] ?> </th>
                <td class=" <?php if($value["status"] == "En cours")
                {
                    echo "has-text-info";
                }elseif($value["status"] == "Validé")
                {
                    echo "has-text-success";  
                }elseif($value["status"] == "Annulé")
                {
                    echo "has-text-danger";  
                }
                ?>"><?= $value["status"] ?> </td>
                <td><?= $value["payment_ttc"] ?> </td>
                <td><?= $value["payment_ht"] ?> </td>
                <td><?= $value["reason"] ?></td>
                <td class="has-text-centered"><a href="controller-admin-expense.php?id=<?= $value['expense_id'] ?>"><i class="bi bi-three-dots"></i></a></td>
              </tr>


           


            <?php } ?>
            </tbody>
          </table>
          </div>

        </div>


      </div>
    </div>


</main>
<?php include "components/sidebar-mobile.php" ?>
<?php include "components/footer.php" ?>