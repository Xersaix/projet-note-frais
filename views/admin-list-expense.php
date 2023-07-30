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
    <a href="controller-employer-list.php" class="icon-color"><i class="bi bi-arrow-left-circle-fill is-size-3 "></i></a>
      <div class="columns  is-flex is-flex-direction-column">

        <div class="column ">
        <div class="primary-color p-2 is-rounded">
          <p class="is-size-5 has-text-white">Liste des frais</p>
          </div>
        <!-- Table containing the list of expens of the worker -->
        <div class="table-container">
        <table class="table table is-hoverable is-bordered is-striped has-text-centered">
            <thead class="is-narrow">
              <tr>

                <th><abbr>Date</abbr></th>
                <th><abbr>Status</abbr></th>
                <th><abbr>Montant TTC</abbr></th>
                <th><abbr>Montant HT</abbr></th>
                <th><abbr >Raison</abbr></th>
                <th><abbr >Justificatif</abbr></th>
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
                <td class="is-flex  is-justify-content-center ">
                  <?php
                    // get the base64 file
                    $imgData = $value["image"];
                    if($imgData != null)
                    {
                                          // Open a file and add the base64 as a parameter to get the file type
                    $file = finfo_open();
                    $mime_type = finfo_buffer($file,$imgData,FILEINFO_MIME_TYPE);
                    // link to the file for the img tag <img src="data:image/gif;base64,R0lGODdhAQABAPAAAP8AAAAAACwAAAAAAQABAAACAkQBADs" />
                    $base64ImageSrc = 'data:' . $mime_type . ';base64,' . $imgData; 
                    echo '<img src="' . $base64ImageSrc . '" alt="Image" class="image is-64x64 "/>';
                    }
                    
                  ?>
              
              </td>
                <td class="has-text-centered">
              <?php if($imgData != null) { ?>

                  
                <a href="controller-admin-expense.php?id=<?= $value['expense_id'] ?>">
                <i class="bi bi-three-dots"></i></a>

              <?php } ?>
              </td>
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