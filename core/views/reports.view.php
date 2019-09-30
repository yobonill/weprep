<div id="Inventory">
  <table class="table table-bordered text-center display" id="tableReports">
    <?php 
      switch ($report) {
      case 'delivery':
    ?>
    <h1 class="reportTitle text-center"><?= $language['__TITLE_REPORTS_DELIVERY__']?></h1>
      <!--Date selection row-->
        <div class="col-md-12 text-center">
          <form action="" method="POST" role="form">
            <!-- Allows me to select the date -->
              <div class="form-group col-md-4 col-sm-4">
                <label class="control-label" for="beforeDate"><?= $language['__FILTER_BDATE_REPORTS__']?></label>
                <input type="date" class="form-control" name="beforeDate" id="beforeDate" value = "" placeholder="Desde mm/dd/yyyy">
              </div>
              <div class="form-group col-md-4 col-sm-4">
                <label class="control-label" for="afterDate"><?= $language['__FILTER_ADATE_REPORTS__']?></label>
                <input type="date" class="form-control" name="afterDate" id="afterDate" value = "" placeholder="Hasta mm/dd/yyyy">
              </div>
            <!-- Allows me to select the date -->
              <div class="col-md-4 col-sm-4">
                <br>
                <button type="submit" class="btn btn-primary"><?= $language['__SUBMIT_LOGIN__']?></button>
              </div>
          </form>
        </div>
      <!--Date selection row-->
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
      <h1 class="reportTitle text-center"><?= $language['__TITLE_REPORTS_SELLINGS__']?></h1>
      <!--Date selection row-->
       <div class="col-md-12 text-center">
          <form action="" method="POST" role="form">
            <!-- Allows me to select the date -->
              <div class="form-group col-md-4 col-sm-4">
                <label class="control-label" for="beforeDate"><?= $language['__FILTER_BDATE_REPORTS__']?></label>
                <input type="date" class="form-control" name="beforeDate" id="beforeDate" value = "" placeholder="Desde mm/dd/yyyy">
              </div>
              <div class="form-group col-md-4 col-sm-4">
                <label class="control-label" for="afterDate"><?= $language['__FILTER_ADATE_REPORTS__']?></label>
                <input type="date" class="form-control" name="afterDate" id="afterDate" value = "" placeholder="Hasta mm/dd/yyyy">
              </div>
            <!-- Allows me to select the date -->
              <div class="col-md-4 col-sm-4">
                <br>
                <button type="submit" class="btn btn-primary"><?= $language['__SUBMIT_LOGIN__']?></button>
              </div>
          </form>
        </div>
      <!--Date selection row-->
      <thead>
        <tr class="btn-primary">
          <th><?= $language['__CLIENT_NAME_REPORTS__']?></th>
          <th><?= $language['__CLIENT_ZONE_REPORTS__']?></th>
          <th><?= $language['__PRODUCT_NAME_REPORTS__']?></th>
          <th><?= $language['__PRODUCT_QTY_REPORTS__']?></th>
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
          <td><?=($value['precio'] * $value['cantidad']) - $value['descuento']?></td>
        </tr>
          <?php
            endforeach
          ?>
      </tbody>
    <?php
      break;

      default:
    ?>
      <div class="container center">
        <div class="row">
          <div class="col-md-12 text-center title">
            <h1><?= $language['__TITLE_REPORTS__']?></h1>
          </div>
        </div>
        <div class="row">
          <?php //if (isDispatcher()): ?>
            <div class="col-md-6 col-xs-12">
              <a href="?view=reports&&report=sellings"><button type="button" class="btn btn-primary personal-btn"><i class="fa fa-money personal-fa" aria-hidden="true"> </i> <br><?= $language["__TITLE_REPORTS_SELLINGS__"]?></button></a>
            </div>
            <div class="col-md-6 col-xs-12">
              <a href="?view=reports&&report=delivery"><button type="button" class="btn btn-primary personal-btn"><i class="fa fa-motorcycle personal-fa" aria-hidden="true"> </i> <br><?= $language["__TITLE_REPORTS_DELIVERY__"]?></button></a>
            </div>
          <?php //endif ?>	
        </div>
      </div>
    <?php
      }
    ?>
  </table>
</div>