<div class="panel panel-warning">
	<div class="panel-heading">
		<h3 class="panel-title"><b>MOVIMENTAÇÕES</b></h3>
			<span class="pull-right panel-clickable"><i class="fa fa-chevron-up"></i></span>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered table-striped" id="table_patrimonial_movements" data-toggle="table" data-toolbar="#filter-bar" data-show-toggle="false" data-search="false" data-show-filter="false" data-show-columns="false" data-show-export="false" data-pagination="false" data-click-to-select="true" data-show-footer="false">
			   	<thead>
			   		<tr>
						<th data-field="patrimonial_movement_type_id" data-sortable="true">Tipo</th>
						<th data-field="patrimonial_status_date" data-sortable="true">Data</th>
						<th data-field="patrimonial_status_is" data-sortable="true">Situação</th>
						<th data-field="affiliated_society_id" data-sortable="true">Filial</th>
						<th data-field="patrimonial_sector_id" data-sortable="true">Setor</th>
						<th data-field="patrimonial_sub_sector_id" data-sortable="true">Sub-setor</th>
					</tr>
				</thead>
				<tbody>
					@foreach($patrimonial_movements as $patrimonial_movement)
						<tr>
							<td>{{ $patrimonial_movement->patrimonial_movement_type->description }}</td>
							<td>{{ $patrimonial_movement->patrimonial_status_date->format('d/m/Y') }}</td>
							<td>{{ $patrimonial_movement->patrimonial_status->description }} ({{ $patrimonial_movement->patrimonial_status_date->diffForHumans() }})</td>
							<td><a href="{!! route('affiliated_societies.show', [$patrimonial->affiliated_society_id]) !!}">{{ $patrimonial->affiliated_society->code }}</a> - {{ $patrimonial_movement->affiliated_society->description }}</td>
							<td>{{ $patrimonial_movement->patrimonial_sector->description }}</td>
							<td>{{ $patrimonial_movement->patrimonial_sub_sector->description }}</td>
						</tr>
					@endforeach
				</tbody>
		</table>
		</div>
	</div>
</div>

@section('js_scripts')
	<script type="text/javascript">
		$(document).on('click', '.panel-heading span.panel-clickable', function(e)
			{
    			var $this = $(this);
				if(!$this.hasClass('panel-collapsed')) 
					{
						$this.parents('.panel').find('.panel-body').slideUp();
						$this.addClass('panel-collapsed');
						$this.find('i').removeClass('fa fa-chevron-up').addClass('fa fa-chevron-down');
					} 
				else 
					{
						$this.parents('.panel').find('.panel-body').slideDown();
						$this.removeClass('panel-collapsed');
						$this.find('i').removeClass('fa fa-chevron-down').addClass('fa fa-chevron-up');
					}
			})
	</script>
@endsection