
<div class="modal fade" id="modal-create-department">
	<div class="modal-dialog modal-create-department">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Agregar Departamento</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		{!! Form::open(['route'=>'departments.store', 'method'=>'POST']) !!}
		<div class="modal-body">
			<div class="card-body ">
				@include('dashboard.departments._form')
			</div>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		  <input type="submit" value="Guardar" class="btn btn-primary">
		</div>
		{!! Form::close() !!}
	  </div>
	</div>
</div>


