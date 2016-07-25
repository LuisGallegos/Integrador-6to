<br>
<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home1">Insert</a></li>
    <li><a data-toggle="tab" href="#menu1">Delete</a></li>
    <li><a data-toggle="tab" href="#menu2">Update</a></li>
    <li><a data-toggle="tab" href="#menu3" ng-click="viewVacant()">Consults</a></li>
  </ul>
</div>

<div class="tab-content" >
  <div id="home1" class="tab-pane fade in active col-md-6">
    <br>
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Insert a new Vacant </h3>
      </div>
      <div class="box-body">
        <label for="name">Name:</label>
        <input type="text" class="form-control" ng-model="vacant.name"/>
        <label for="fechaini">Begin Date:</label>
        <input type="date" class="form-control" ng-model="vacant.startdate"/>
        <label for="fechafin">End Date:</label>
        <input type="date" class="form-control" ng-model="vacant.enddate"/>
        <label for="sal">Salary:</label>
        <input type="text" class="form-control" ng-model="vacant.salary" placeholder="$$$$"/>
        <label for="desc">Description:</label>
        <textarea class="form-control" ng-model="vacant.des"/>
      </div>
      <div class="box-footer">
        <button class="btn btn-primary btn-sm" type="submit" ng-click="insertVacant()">GO!</button>
      </div>
    </div>
  </div>


  <div id="menu1" class="tab-pane fade">
  </br>
  <div class="col-xs-5">
  <label for="idbaja">Insert the SSO that you want to delete	</br></label>
  <input type="text" class="form-control" placeholder="SOS" id="idbaja" autofocus>
    </div>
  </div>




<div id="menu2" class="tab-pane fade">
  <div id="home1" class="tab-pane fade in active col-md-6">
    <br>
    <div class="form-group">

      <label for="idbaja">Insert the SSO that you want to update	</br></label>
      <input type="text" class="form-control" placeholder="SSO" id="idbaja" autofocus>
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name">
      <label for="fechaini">Begin Date:</label>
      <input type="date" class="form-control" id="fechaini">
      <label for="fechafin">End Date:</label>
      <input type="text" class="form-control" id="fechafin">
      <label for="sal">Salary:</label>
      <input type="text" class="form-control" id="sal" placeholder="$$$$">
      <label for="desc">Description:</label>
      <input type="text" class="form-control" id="desc">

    </div>
  </div>
</div>





<div id="menu3" class="tab-pane fade">
</br>
  <div class="col-xs-12">
  <label for="idbaja">Insert the SSO that you want to consult	</br></label>
  <input type="text" class="form-control" placeholder="SOS" id="idbaja" autofocus>
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
          </tr>
        </tbody>
      </table>
</div>

      <!-- <?php
        include_once ('../lib/connection.php');
        include ('../models/queries.php');
        global $conn;
      $recordSet = $conn->Execute($SELECT_VACANTES);
      if (!$recordSet)
        print $conn->ErrorMsg();
      else
      while (!$recordSet->EOF) {
        print $recordSet->fields[0].' '.$recordSet->fields[1].'<BR>';
        $recordSet->MoveNext();
      }

       ?> -->
  </div>
</div>




  </div>
