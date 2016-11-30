@extends('home')

@section('content')
	<div class="page-header text-primary">
	   	<h4>
	   		Administração - Cidades
	   		<div class="btn-group btn-group-sm pull-right">
              	<a href="{!! route('cities.create') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Incluir"><i class="fa fa-file-o"></i></a>
          	</div>
	   		<hr class="hr-primary" />
      	</h4>
    </div>

    <div class="table-responsive">
		<table class="table table-bordered table-striped"> 
			<thead>
				<tr>
					<th width="1%" class="text-center">#</th>
					<th width="2%">UF</th>
					<th>Descrição</th>
					<th width="2%">Região</th>					
					<th width="1%" class="text-center">#</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cities as $city)
			        <tr>
			        	<td><a href="{!! route('cities.edit', ['id' => $city->id]) !!}" type="button" class="round round-sm hollow blue"><i class='fa fa-edit'></i></a></td>
			        	<td>{{ $city->state->code }}</td>
			        	<td><a href="{!! route('cities.show', ['id' => $city->id]) !!}">{{ $city->description }}</a></td>
			        	<td>{{ $city->region->code }}</td>
			        	<td>
			        		<a href="javascript:;" onclick="onDestroy('{!! route('cities.destroy', [$city->id]) !!}')" id="link_delete" type="button" class="round round-sm hollow red"><i class="fa fa-trash-o text-danger"></i></a>
			       		</td>
			        </tr>
			    @endforeach
			</tbody>
		</table>
	</div>
@endsection