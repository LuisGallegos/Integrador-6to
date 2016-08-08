
  <div class="col-md-12">
  <label for="idbaja">Insert the name of the vacant	</br></label>
  <input type="text" class="form-control" placeholder="Vacant" ng-model=searchText autofocus/>
  <hr>
  <div class="row">
    <div class="col-md-6">
      <button class="btn btn-info" data-toggle="modal" data-target="#addNewVacant" ><i class="fa fa-plus"></i>Insert a new Vacant</button>
      <button class="btn btn-info" ng-click="viewVacant()"><i class="fa fa-refresh"></i></button>
    </div>
    <div class="col-md-6">
    </div>
  </div>
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
          <tr ng-repeat="vacant in vacantData | filter:searchText ">
            <td>{{vacant.1}}</td>
            <td>{{vacant.2}}</td>
            <td>{{vacant.3}}</td>
            <td>{{vacant.4}}</td>
            <td>{{vacant.5}}</td>
            <td>
              <button class="btn btn-warning btn-xs" ng-click="values($index)" data-toggle="modal" data-target="#updateVacant"><i class="fa fa-pencil"></i></button>
            </td>
            <td>
              <button class="btn btn-danger btn-xs" ng-click="deleteVacant(vacant.0)"><i class="fa fa-times"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
</div>
  </div>


  <!-- Modal -->
<div class="modal fade" id="addNewVacant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">New Vacant</h4>
        </div>
        <div class="modal-body">
          <form name="newVacant">
            <label for="name">Name:</label>
            <input type="text" class="form-control" ng-model="vacant.name" required/>
            <label for="fechaini">Begin Date:</label>
            <input type="date" class="form-control" ng-model="vacant.startdate" required/>
            <label for="fechafin">End Date:</label>
            <input type="date" class="form-control" ng-model="vacant.enddate" required/>
            <label for="sal">Salary:</label>
            <input type="text" class="form-control" ng-model="vacant.salary" placeholder="$$$$" maxlength="6" required/>
            <label for="desc">Description:</label>
            <textarea class="form-control" ng-model="vacant.des" required/>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" ng-click="insertVacant()" ng-disabled="newVacant.$invalid">Go!</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal -->
<div class="modal fade" id="updateVacant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Update a Vacant</h4>
        </div>
        <div class="modal-body">
          <form name="updateVacant">
            <label for="name">Name:</label>
            <input type="text" class="form-control" ng-model="vacantUp.name"  ng-value=vacantUp.name />
            <label for="fechaini">Begin Date:</label>
            <input type="date" class="form-control" ng-model="vacantUp.startdate"  />
            <label for="fechafin">End Date:</label>
            <input type="date" class="form-control" ng-model="vacantUp.enddate"  />
            <label for="sal">Salary:</label>
            <input type="text" class="form-control" ng-model="vacantUp.salary" placeholder="$$$$" maxlength="6"  ng-value=vacantUp.salary />
            <label for="desc">Description:</label>
            <textarea class="form-control" ng-model=vacantUp.des ng-value=vacantUp.des />
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" ng-click="updateVacant()" ng-disabled="updateVacant.$invalid">Go!</button>
        </div>
      </div>
    </div>
  </div>
