<br>
<ul class="nav nav-pills">
  <li class="active"><a data-toggle="pill" href="#home1">Altas</a></li>
  <li><a data-toggle="pill" href="#menu1">Bajas</a></li>
  <li><a data-toggle="pill" href="#menu2">Cambios</a></li>
  <li><a data-toggle="pill" href="#menu3">Consultas</a></li>
</ul>

<div class="tab-content" >
  <div id="home1" class="tab-pane fade in active col-md-6">
    <br>
    <div class="form-group">
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


    <div id="menu1" class="tab-pane fade">
		</br>
    <div class="col-xs-5">
    <label for="idbaja">Insert the SSO that you what to delete	</br></label>
    <input type="text" class="form-control" placeholder="Matricula" id="idbaja" autofocus>
      </div>
    </div>




  <div id="menu2" class="tab-pane fade">
		<div id="home1" class="tab-pane fade in active col-md-6">
			<br>
			<div class="form-group">

				<label for="idbaja">Ingrese la matricula de la vacante que desea  editar	</br></label>
				<input type="text" class="form-control" placeholder="Matricula" id="idbaja" autofocus>
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
		<div class="col-xs-5">
		<label for="idbaja">Ingrese la matricula de la vacante que desea consultar	</br></label>
		<input type="text" class="form-control" placeholder="Matricula" id="idbaja" autofocus>
			</div>
  </div>






</div>