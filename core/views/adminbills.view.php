<div id="bills">
	<div class="container center">
		<div class="row">
			<div class="col-md-12 text-center title">
				<h1><?= $language['__BILLS_ADMIN__']?></h1>
			</div>
        </div>
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
        <table class="table table-bordered text-center display" id="tableBills">
            <thead>
                <tr class="btn-primary">
					<th><?= $language['__CLIENT_BILL_REPORTS__']?></th>
					<th><?= $language['__BILL_DATE_REPORTS__']?></th>
					<th><?= $language['__CLIENT_NAME_REPORTS__']?></th>
					<th><?= $language['__CLIENT_ZONE_REPORTS__']?></th>
					<th><?= $language['__PRODUCT_NAME_REPORTS__']?></th>
					<th><?= $language['__PRODUCT_QTY_REPORTS__']?></th>
					<th><?= $language['__BILL_DISCOUNT_REPORTS__']?></th>
					<th><?= $language['__PRODUCT_TOTAL_REPORTS__']?></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($records as $value):
                ?>
                    <tr>
                        <td><?=$value['numero_factura']?></td>
                        <td><?=$value['fecha_factura']?></td>
                        <td><?=$value['nombre'] . " " . $value['apellido']?></td>
                        <td>
                          <?php 
                            if((isset($value['zone'])) & ($value['zone'] != 999)) {
                              echo $value['zone'];
                            } else {
                              echo $value['zona'];
                            }
                          ?>
                        </td>
                        <td><?=$value['producto']  ?></td>
                        <td><?=$value['cantidad']  ?></td>
                        <td><?=$value['descuento']  ?></td>
						<td><?="$".(($value['precio'] * $value['cantidad']) - $value['descuento'])?></td>
                    </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
</div>