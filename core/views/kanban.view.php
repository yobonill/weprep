<div id="kanban">
  <table class="table table-bordered text-center" id="tableKanban">
    <thead>
      <tr class="btn-primary">
        <th><?= $language['__PRODUCTFORM_NAME_ADMIN__']?></th>
        <th><?= $language['__PRODUCT_QUANTITY__']?></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        foreach ($result as $value):
      ?>
        <tr>
          <td><?=$value['nombre']  ?></td>
          <td><?=$value['cantidad_producto']  ?></td>
        </tr>
      <?php
        endforeach
      ?>
      </tr>
    </tbody>
  </table>
</div>