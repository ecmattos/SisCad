@extends('home')

@section('content')

	<div class="page-header text-primary">
   	<h4>
     	<a href="{!! route('dashboard.pc_members') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Ir para Painel Controle Associados"><i class="fa fa-users"></i></a>
      Ativos: Consulta
     	<div class="btn-group btn-group-sm pull-right">
     		<a href="{!! route('patrimonials.create') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Incluir"><i class="fa fa-file-o"></i></a>
     		<a href="{!! route('patrimonials.edit', ['id' => $patrimonial->id]) !!}" type="button" class="round round-sm hollow blue" rel="tooltip" title="Editar"><i class="fa fa-edit"></i></a>
     		<a href="{!! route('patrimonials') !!}" type="button" class="round round-sm hollow" rel="tooltip" title="Pesquisar"><i class="fa fa-search"></i></a>
        <a href="{!! route('patrimonials') !!}" type="button" class="round round-sm hollow red" rel="tooltip" title="Excluir"><i class="fa fa-trash-o"></i></a>
    	</div>
   	</h4>
   	<hr class="hr-warning" />
  </div>

  <div class="col-sm-8">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-title"><b>{{ $patrimonial->code }} - {{ $patrimonial->description }}</b></h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              
            </thead>
            <tbody>
              <tr>
                <td class="text-right" width="25%">Código</td>
                <td class="text-left">{{ $patrimonial->code }}</td>
              </tr>

              <tr>
                <td class="text-right">Tipo</td>
                <td class="text-left">{{ $patrimonial->patrimonial_type->description }}</td>
              </tr>
              
              <tr>
                <td class="text-right">Sub-tipo</td>
                <td class="text-left">{{ $patrimonial->patrimonial_sub_type->description }}</td>
              </tr>

              <tr>
                <td class="text-right">Marca</td>
                <td class="text-left">{{ $patrimonial->patrimonial_brand->description }}</td>
              </tr>

              <tr>
                <td class="text-right">Modelo</td>
                <td class="text-left">{{ $patrimonial->patrimonial_model->description }}</td>
              </tr>

              <tr>
                <td class="text-right">Nr série</td>
                <td class="text-left">{{ $patrimonial->serial }}</td>
              </tr>

              <tr>
                <td class="text-right">Processo Compra</td>
                <td class="text-left">{{ $patrimonial->purchase_process }}</td>
              </tr>

              <tr>
                <td class="text-right">Fornecedor</td>
                <td class="text-left"><a href="{!! route('providers.show', [$patrimonial->provider_id]) !!}">{{ $patrimonial->provider->cnpj_mask }}</a> - {{ $patrimonial->provider->description }}</td>
              </tr>

              <tr>
                <td class="text-right">Data Compra</td>
                <td class="text-left">{{ $patrimonial->purchase_date->format('d/m/Y') }} ({{ $patrimonial->purchase_date->diffForHumans() }})</td>
              </tr>

              <tr>
                <td class="text-right">Valor Compra</td>
                <td class="text-left">R$ {{ number_format($patrimonial->purchase_value, 2,",",".") }}</td>
              </tr>

              <tr>
                <td class="text-right">Nota fiscal</td>
                <td class="text-left">{{ $patrimonial->invoice }}</td>
              </tr>

              <tr>
                <td class="text-right">Vida útil</td>
                <td class="text-left">{{ number_format($patrimonial->useful_life_years, 1,",",".") }} anos</td>
              </tr>

              <tr>
                <td class="text-right">Observações</td>
                <td class="text-left">{{ $patrimonial->comments }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
   @include('revisionable.logs_register')
  </div>

  <div class="col-sm-8">
    @include('patrimonials.movements')
  </div>
    
@endsection
  