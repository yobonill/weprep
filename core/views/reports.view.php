<div id="Inventory">
  <table class="table table-bordered text-center" id="tableReports">
    <?php 
      switch ($report) {
      case 'delivery':
    ?>
    <h1 class="reportTitle text-center"><?= $language['__TITLE_REPORTS_DELIVERY__']?></h1>
      <thead>
        <tr class="btn-primary">
          <th><?= $language['__CLIENT_NAME_REPORTS__']?></th>
          <th><?= $language['__CLIENT_ZONE_REPORTS__']?></th>
          <th><?= $language['__PRODUCT_NAME_REPORTS__']?></th>
          <th><?= $language['__PRODUCT_QTY_REPORTS__']?></th>
          <th><?= $language['__PRODUCT_PRICE_REPORTS__']?></th>
          <th><?= $language['__PRODUCT_TOTAL_REPORTS__']?></th>
          <th><?= $language['__DISPATCH_BILL_REPORTS__']?></th>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach ($records as $value):
        ?>
        <tr>
          <td><?=$value['cliente']  ?></td>
          <td><?=$value['zona']  ?></td>
          <td><?=$value['producto']  ?></td>
          <td><?=$value['cantidad']  ?></td>
          <td><?=$value['precio']  ?></td>
          <td><?=$value['precio'] * $value['cantidad']?></td>
          <td>
            <a href="core/controllers/dispatch.controller.php?bills=<?=$value['factura']?>"><button type="button" class="btn btn-primary"><?= $language['__DISPATCH_BILL_REPORTS__']?></button></a>
          </td>
        </tr>
        <?php
          endforeach
        ?>
      </tbody>
    <?php
      break;    
      case 'sellings':
    ?>
      <thead>
        <tr class="btn-primary">
          <th><?= $language['__CLIENT_NAME_REPORTS__']?></th>
          <th><?= $language['__CLIENT_ZONE_REPORTS__']?></th>
          <th><?= $language['__PRODUCT_NAME_REPORTS__']?></th>
          <th><?= $language['__PRODUCT_QTY_REPORTS__']?></th>
          <th><?= $language['__PRODUCT_PRICE_REPORTS__']?></th>
          <th><?= $language['__PRODUCT_TOTAL_REPORTS__']?></th>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach ($records as $value):
        ?>
          <tr>
            <td><?=$value['cliente']  ?></td>
            <td><?=$value['zona']  ?></td>
            <td><?=$value['producto']  ?></td>
            <td><?=$value['cantidad']  ?></td>
            <td><?=$value['precio']  ?></td>
            <td><?=$value['total']  ?></td>
          </tr>
          <?php
            endforeach
          ?>
      </tbody>
    <?php
      break;
      }
    ?>
  </table>
</div>