<script>
  function dispatch(id){
    $.ajax(
      'core/controllers/dispatch.controller.php?bills='+id+'',
      {
          success: function(data) {
            //alert('Despachado correctamente');
            $('#'+id).prop("disabled", true);
            $('#'+id).removeClass("btn-primary");
            $('#'+id).addClass("btn-success");
          },
          error: function() {
            swal({
									title: 'Error!',
									text: 'Factura no despachada, contacte al desarrollador',
									icon: 'error',
								})
						$('.swal-overlay').css('background-color', 'rgba(255, 0, 0, 0.514)');
          }
      }
    );
  };
</script>
<div id="Inventory">
    <?php 
      switch ($report) {
      case 'delivery':
    ?>
    <table class="table table-bordered text-center display" id="tableReports">
      <h1 class="reportTitle text-center"><?= $language['__TITLE_REPORTS_DELIVERY__']?></h1>
        <!--Date selection row-->
          <div class="col-md-12 text-center">
            <form action="" method="POST" role="form">
              <!-- Allows me to select the date -->
                <div class="form-group col-md-4 col-sm-4">
                  <label class="control-label" for="beforeDate"><?= $language['__FILTER_BDATE_REPORTS__']?></label>
                  <input type="date" class="form-control" name="beforeDate" id="beforeDate" value = "<?=$bDate?>" placeholder="Desde mm/dd/yyyy">
                </div>
                <div class="form-group col-md-4 col-sm-4">
                  <label class="control-label" for="afterDate"><?= $language['__FILTER_ADATE_REPORTS__']?></label>
                  <input type="date" class="form-control" name="afterDate" id="afterDate" value = "<?=$aDate?>" placeholder="Hasta mm/dd/yyyy">
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
            <th><?= $language['__BILL_DATE_REPORTS__']?></th>
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
            <td><?=$value['fecha_factura']  ?></td>  
            <td><?=$value['nombre'] . " " . $value['apellido']  ?></td>
            <td>
              <?php 
                if(isset($value['zone']) & ($value['zone'] != 999)) {
                  echo $value['zone'];
                } else {
                  echo $value['zona'];
                }
              ?>
            </td>
            <td><?=$value['producto']  ?></td>
            <td><?=$value['cantidad']  ?></td>
            <td><?="$".$value['precio']  ?></td>
            <td><?="$".$value['precio'] * $value['cantidad']?></td>
            <?php
              if($value['estatus_factura'] == "0"):
            ?>
              <td>
                <a href="#" onclick="dispatch(<?=$value['factura']?>); return false;"><button type="button" class="btn btn-primary" id="<?=$value['factura']?>"><?= $language['__DISPATCH_BILL_REPORTS__']?></button></a>
              </td>
            <?php
              else:
            ?>
              <td>
                <a href="#" onclick="dispatch(<?=$value['factura']?>); return false;"><button type="button" class="btn btn-success" disabled id="<?=$value['factura']?>"><?= $language['__DISPATCH_BILL_REPORTS__']?></button></a>
              </td>
            <?php
              endif
            ?>
          </tr>
          <?php
            endforeach
          ?>
        </tbody>
      </table>
    <?php
      break;    
      case 'sellings':
    ?>
      <table class="table table-bordered text-center display" id="tableReports">
        <h1 class="reportTitle text-center"><?= $language['__TITLE_REPORTS_SELLINGS__']?></h1>
        <!--Date selection row-->
        <div class="col-md-12 text-center">
            <form action="" method="POST" role="form">
              <!-- Allows me to select the date -->
                <div class="form-group col-md-4 col-sm-4">
                  <label class="control-label" for="beforeDate"><?= $language['__FILTER_BDATE_REPORTS__']?></label>
                  <input type="date" class="form-control" name="beforeDate" id="beforeDate" value = "<?= $bDate?>" placeholder="Desde mm/dd/yyyy">
                </div>
                <div class="form-group col-md-4 col-sm-4">
                  <label class="control-label" for="afterDate"><?= $language['__FILTER_ADATE_REPORTS__']?></label>
                  <input type="date" class="form-control" name="afterDate" id="afterDate" value = "<?=$aDate?>" placeholder="Hasta mm/dd/yyyy">
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
            <th><?= $language['__BILL_DATE_REPORTS__']?></th>
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
            <td><?=$value['fecha_factura']?></td>
            <td><?=$value['nombre'] . " " . $value['apellido'] ?></td>
            <td>
              <?php 
                if(isset($value['zone']) & ($value['zone'] != 999)) {
                  echo $value['zone'];
                } else {
                  echo $value['zona'];
                }
              ?>
            </td>
            <td><?=$value['producto']  ?></td>
            <td><?=$value['cantidad']  ?></td>
            <td><?="$".(($value['precio'] * $value['cantidad']) - $value['descuento'])?></td>
          </tr>
            <?php
              endforeach
            ?>
        </tbody>
      </table>
    <?php
      break;
      case 'byProducts':
    ?>
      <table class="table table-bordered text-center display" id="tableReports2">
        <h1 class="reportTitle text-center"><?= $language['__TITLE_REPORTS_BYPRODUCTS__']?></h1>
        <!--Date selection row-->
        <div class="col-md-12 text-center">
            <form action="" method="POST" role="form">
              <!-- Allows me to select the date -->
                <div class="form-group col-md-4 col-sm-4">
                  <label class="control-label" for="beforeDate"><?= $language['__FILTER_BDATE_REPORTS__']?></label>
                  <input type="date" class="form-control" name="beforeDate" id="beforeDate" value = "<?= $bDate?>" placeholder="Desde mm/dd/yyyy">
                </div>
                <div class="form-group col-md-4 col-sm-4">
                  <label class="control-label" for="afterDate"><?= $language['__FILTER_ADATE_REPORTS__']?></label>
                  <input type="date" class="form-control" name="afterDate" id="afterDate" value = "<?=$aDate?>" placeholder="Hasta mm/dd/yyyy">
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
            <th><?= $language['__PRODUCT_NAME_REPORTS__']?></th>
            <th><?= $language['__PRODUCT_PRICE_REPORTS__']?></th>
            <th><?= $language['__PRODUCT_QTY_REPORTS__']?></th>
            <th><?= $language['__PRODUCT_TOTAL_REPORTS__']?></th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach ($records as $value):
          ?>
          <tr>
            <td><?=$value['producto']  ?></td>
            <td><?=$value['cantidad']  ?></td>
            <td><?="$".$value['precio']  ?></td>
            <td><?="$".($value['precio'] * $value['cantidad'])?></td>
          </tr>
            <?php
              endforeach
            ?>
        </tbody>
      </table>
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
            <div class="col-md-4 col-xs-12">
              <a href="?view=reports&report=sellings"><button type="button" class="btn btn-primary personal-btn"><i class="fa fa-money personal-fa" aria-hidden="true"> </i> <br><?= $language["__TITLE_REPORTS_SELLINGS__"]?></button></a>
            </div>
            <div class="col-md-4 col-xs-12">
              <a href="?view=reports&report=delivery"><button type="button" class="btn btn-primary personal-btn"><i class="fa fa-motorcycle personal-fa" aria-hidden="true"> </i> <br><?= $language["__TITLE_REPORTS_DELIVERY__"]?></button></a>
            </div>
            <div class="col-md-4 col-xs-12">
              <a href="?view=reports&report=byProducts"><button type="button" class="btn btn-primary personal-btn"><i class="fa fa-cutlery personal-fa" aria-hidden="true"> </i> <br><?= $language["__TITLE_REPORTS_BYPRODUCTS__"]?></button></a>
            </div>
          <?php //endif ?>	
        </div>
      </div>
    <?php
      }
    ?>
</div>