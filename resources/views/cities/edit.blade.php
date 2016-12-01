@extends('home')

@section('content')

	<div class="page-header text-primary">
	   	<h4>
	   		Administração - Cidade: Alteração
	   		<div class="btn-group btn-group-sm pull-right">
              	<a href="{!! route('cities') !!}" type="button" class="round round-sm hollow" rel="tooltip" title="Pesquisar"><i class="fa fa-search"></i></a>
          		<a href="{!! route('cities.create') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Incluir"><i class="fa fa-file-o"></i></a>
          	</div>
          	<hr class="hr-warning" />
	   	</h4>
	</div>

	{!! Form::model($city, ['route' => ['cities.update', $city->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('cities.form')

	{!! Form::close() !!}
	    
@endsection