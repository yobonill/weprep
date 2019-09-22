<div id="kanban">
  <table class="table table-bordered text-center" id="tableKanban">
    <thead>
      <tr class="btn-primary">
        <th><?= $language['example']?></th>
        <th><?= $language['example']?></th>
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