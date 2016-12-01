@extends('home')

@section('content')
	<div class="page-header text-primary">
	   	<h4>
	   		<a href="{!! route('dashboard.pc_members') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Ir para Painel Controle Associados"><i class="fa fa-users"></i></a>
	   		Administração - Marcas de Ativos
	   		<div class="btn-group btn-group-sm pull-right">
          		<a href="{!! route('patrimonial_brands.create') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Incluir"><i class="fa fa-file-o"></i></a>
        	</div>
	   		<hr class="hr-warning" />
	   	</h4>
	</div>
				
	<table class="table table-bordered table-striped">
	    <thead>
	        <th width="1%" class="text-center">#</th>
	        <th width="2%">Código</th>
	        <th>Descrição</th>
	        <th width="1%" class="text-center">#</th>
	    </thead>
	    <tbody>
		    @foreach($patrimonial_brands as $patrimonial_brand)
		        <tr>
		            <td>
		                <a href="{!! route('patrimonial_brands.edit', [$patrimonial_brand->id]) !!}" type="button" class="round round-sm hollow blue"><i class="fa fa-edit"></i></a>
		            </td>
		            <td><a href="{!! route('patrimonial_brands.show', [$patrimonial_brand->id]) !!}">{!! $patrimonial_brand->code !!}</a></td>
		            <td>{!! $patrimonial_brand->description !!}</td>
		            <td>
		            	<a href="javascript:;" onclick="onDestroy('{!! route('patrimonial_brands.destroy', [$patrimonial_brand->id]) !!}')" id="link_delete" type="button" class="round round-sm hollow red"><i class="fa fa-trash-o text-danger"></i></a>
		            </td>
		        </tr>
		    @endforeach
	    </tbody>
	</table>
@endsection