<div class="modal fade" id="modal-edit-department{{$department->id}}">
	<div class="modal-dialog modal-edit-department">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Modificar</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		{!! Form::model($department, ['route'=>['departments.update',$department],'method'=>'PUT']) !!}
		<div class="modal-body">
			<div class="card-body ">
				@include('dashboard.departments._form')
			</div>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		  <input type="submit" value="Actualizar" class="btn btn-primary">
		</div>
		{!! Form::close() !!}
	  </div>
	</div>
</div>