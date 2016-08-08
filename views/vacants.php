<div class="row">
  <div class="col-md-11">
  </div>
  <div class="col-md-1">
    <button class="btn btn-info" ng-click="viewVacant()"><i class="fa fa-refresh"></i></button>
  </div>
</div>


<!-- ng-click="viewVacant() -->
  <div class="col-md-12">
  <label for="idbaja">Insert the SSO that you want to consult	</br></label>
  <input type="text" class="form-control" placeholder="SSO" autofocus>
  <hr>
  <div class="table-responsive">
      <table  class="table table-striped table-bordered table-hover" >
        <thead >
          <th>Nombre</th>
          <th>Fecha Inicio</th>
          <th>Fecha Termino</th>
          <th>Salario</th>
          <th>Descripcion</th>
        </thead>
        <tbody>
          <tr ng-repeat="vacant in vacantData">
            <td>{{vacant.1}}</td>
            <td>{{vacant.2}}</td>
            <td>{{vacant.3}}</td>
            <td>{{vacant.4}}</td>
            <td>{{vacant.5}}</td>
            <td>
              <button class="btn btn-warning btn-xs" ng-click="" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></button>
            </td>
            <td>
              <button class="btn btn-danger btn-xs" ><i class="fa fa-times"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
</div>

  </div>


  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
