{!! Form::model($item,['route'=>['category.update',
$item->id], 'role'=>'form', 'method'=>'post']) !!}

	{!!Form::label('name','Nama') !!}

	{!!Form::text('name', null, ['class'=>'form-control']) !!}

	<button type="submit" class="btn btn-primary">Simpan</button>

{!! Form::close() !!}