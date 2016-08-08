<div class="col-md-12">
<label for="idbaja">Insert the name of the Pay Roll	</br></label>
<input type="text" class="form-control" placeholder="Nomine" ng-model=searchText autofocus/>
<hr>
<div class="row">
  <div class="col-md-6">
    <button class="btn btn-info" ng-click="viewNominee()"><i class="fa fa-refresh"></i></button>
  </div>
  <div class="col-md-6">
  </div>
</div>
<div class="table-responsive">
    <table  class="table table-striped table-bordered table-hover" >
      <thead >
        <th>Pay Date</th>
        <th>Name</th>
        <th>Total Amount</th>
      </thead>
      <tbody>
        <tr ng-repeat="nominee in nomineeData | filter:searchText ">
          <td>{{nominee.1}}</td>
          <td>{{nominee.2}}</td>
          <td>{{nominee.3}}</td>
          <td>
        </tr>
      </tbody>
    </table>
</div>
</div>
