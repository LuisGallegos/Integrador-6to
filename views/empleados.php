<div class="col-md-12">
<label for="idbaja">Insert the name of the Employe	</br></label>
<input type="text" class="form-control" placeholder="Employe" ng-model=searchText autofocus/>
<hr>
<div class="row">
  <div class="col-md-6">

    <button class="btn btn-info" ng-click="viewEmploye()"><i class="fa fa-refresh"></i></button>
  </div>
  <div class="col-md-6">
  </div>
</div>
<div class="table-responsive">
    <table  class="table table-striped table-bordered table-hover" >
      <thead >
        <th>Name</th>
        <th>Telephone</th>
        <th>Email</th>
        <th>Account</th>
        <th>Date</th>
      </thead>
      <tbody>
        <tr ng-repeat="employe in employeData | filter:searchText ">
          <td>{{employe.1}}</td>
          <td>{{employe.2}}</td>
          <td>{{employe.3}}</td>
          <td>{{employe.4}}</td>
          <td>{{employe.5}}</td>
          <td>
            <button class="btn btn-danger btn-xs" ng-click="deleteEmploye(employe.0)"><i class="fa fa-times"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
</div>
</div>
