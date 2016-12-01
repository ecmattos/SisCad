@extends('home')

@section('content')
	<div class="page-header text-primary">
	   	<h4>
	   		<a href="{!! route('dashboard.pc_members') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Ir para Painel Controle Associados"><i class="fa fa-users"></i></a>
	   		Administração - Sub-setores de Ativos
	   		<div class="btn-group btn-group-sm pull-right">
          		<a href="{!! route('patrimonial_sub_sectors.create') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Incluir"><i class="fa fa-file-o"></i></a>
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
		    @foreach($patrimonial_sub_sectors as $patrimonial_sub_sector)
		        <tr>
		            <td>
		                <a href="{!! route('patrimonial_sub_sectors.edit', [$patrimonial_sub_sector->id]) !!}" type="button" class="round round-sm hollow blue"><i class="fa fa-edit"></i></a>
		            </td>
		            <td><a href="{!! route('patrimonial_sub_sectors.show', [$patrimonial_sub_sector->id]) !!}">{!! $patrimonial_sub_sector->code !!}</a></td>
		            <td>{!! $patrimonial_sub_sector->description !!}</td>
		            <td>
		            	<a href="javascript:;" onclick="onDestroy('{!! route('patrimonial_sub_sectors.destroy', [$patrimonial_sub_sector->id]) !!}')" id="link_delete" type="button" class="round round-sm hollow red"><i class="fa fa-trash-o text-danger"></i></a>
		            </td>
		        </tr>
		    @endforeach
	    </tbody>
	</table>
@endsection