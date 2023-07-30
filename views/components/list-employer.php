<div class="primary-color p-2 is-rounded">
          <p class="is-size-5 has-text-white">Liste des employés</p>
          </div>
<table class="table table is-hoverable is-bordered is-striped">
            <thead class="is-narrow">
              <tr>

                <th><abbr title="Played">Nom</abbr></th>
                <th><abbr title="Won">Prénom</abbr></th>
                <th class="is-hidden-mobile"><abbr title="Drawn">Email</abbr></th>
                <th class="is-hidden-mobile"><abbr title="Numero de téléphone">Tel</abbr></th>
                <th><abbr title="Lost">En cours</abbr></th>
                <th></th>
              </tr>
            </thead>
            <!-- Table body for values -->
            <tbody>


            <?php foreach ($list as  $value) { ?>
             
              <tr>
                <th><?= $value["lastname"] ?> </th>
                <td><?= $value["firstname"] ?> </td>
                <td class="is-hidden-mobile"><?= $value["email"] ?> </td>
                <td class="is-hidden-mobile"><?= $value["phone"] ?> </td>
                <td><?= $value["number_of_expenses"] ?></td>
                <td class="has-text-centered">
                  <?php if($value["number_of_expenses"] != 0) { ?>
                  <a href="controller-admin-expense-list.php?id=<?= $value['employer_id'] ?>"><i class="bi bi-three-dots"></i></a>
                <?php } ?>
                </td>
              </tr>


              


            <?php } ?>
            </tbody>
          </table>