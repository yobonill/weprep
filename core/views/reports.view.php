<div id="Inventory">
  <h1 class="reportTitle text-center"><?= $language['__TITLE_INVENTORY__']?></h1>
  <table class="table table-bordered text-center" id="tableInventory">
    <thead>
      <tr class="btn-primary">
        <th><?= $language['example']?></th>
        <th><?= $language['example']?></th>
        <th><?= $language['example']?></th>
        <th><?= $language['example']?></th>
        <th><?= $language['example']?></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        foreach ($example as $value):
      ?>
        <tr>
          <td><img src=<?="img/" . $value['example'] . ".png" ?> alt=<?=$value['example']?>><?=$value['example']?></td>
          <td><?=$value['example']  ?></td>
          <td><?=$value['example']  ?></td>
          <td><?=$value['example'] - $value['example']?></td>
          <td><?=$value['example']  ?></td>
        </tr>
      <?php
        endforeach
      ?>
      </tr>
    </tbody>
  </table>
</div>