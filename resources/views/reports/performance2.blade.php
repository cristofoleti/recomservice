<div class="Report_Performance__view row">
	<div class="card-title pull-left">
		<h1>WEB Efficiency</h1>
		<h2>Relatório de Performance</h2>
	</div>
	<div class="logo pull-right">
		<img src="{{ asset('images/logo.png') }}" alt="WebEfficiency" />
	</div>

	<h3 class="card-title">Informações Gerais</h3>
	<table class="table">
		<tbody>
			<tr>
				<td><strong>Cliente:</strong></td>
				<td>{{ $company->name }}</td>
			</tr>
			<tr>
				<td><strong>Data/Hora:</strong></td>
				<td>{{ date('d/m/Y H:i:s') }}</td>
			</tr>
			<tr>
				<td><strong>Período do relatório:</strong></td>
				<td>{{ $data['ano_atual']['inicio'] }} - {{ $data['ano_atual']['fim'] }}</td>
			</tr>
			<tr>
				<td><strong>Local:</strong></td>
				<td>--(não há dados no BD)--</td>
			</tr>
		</tbody>
	</table>

	<?php var_dump($data['ano_atual']); ?>

	<table class="table">
		<thead>
			<tr>
				<th>Dados Ambientais</th>
				<th>Período atual</th>
				<th>Ano anterior</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Temp. do Ar Externo - Média (°C):</td>
				<td>{{ $data['ano_atual']['data']['temperatura']['media'] }}</td>
				<td>{{ $data['ano_anterior']['data']['temperatura']['media'] }}</td>
			</tr>
			<tr>
				<td>Temp. do Ar Externo - Máx.|Mín. (°C):</td>
				<td>{{ $data['ano_atual']['data']['temperatura']['max'] }} | {{ $data['ano_atual']['data']['temperatura']['min'] }}</td>
				<td>{{ $data['ano_anterior']['data']['temperatura']['max'] }} | {{ $data['ano_anterior']['data']['temperatura']['min'] }}</td>
			</tr>
			<tr>
				<td>Umid. do Ar Externo - Média (°C):</td>
				<td>{{ $data['ano_atual']['data']['umidade']['media'] }}</td>
				<td>{{ $data['ano_anterior']['data']['umidade']['media'] }}</td>
			</tr>
			<tr>
				<td>Umid. do Ar Externo - Máx.|Mín. (°C):</td>
				<td>{{ $data['ano_atual']['data']['umidade']['max'] }} | {{ $data['ano_atual']['data']['umidade']['min'] }}</td>
				<td>{{ $data['ano_anterior']['data']['umidade']['max'] }} | {{ $data['ano_anterior']['data']['umidade']['min'] }}</td>
			</tr>
		</tbody>
	</table>


	<table class="table">
		<thead>
			<tr>
				<th>Dados de Energia</th>
				<th>Período atual</th>
				<th>Ano anterior</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Consumo - Médio (kWh):</td>
				<td>{{ $data['ano_atual']['data']['consumo']['media'] }}</td>
				<td>{{ $data['ano_anterior']['data']['consumo']['media'] }}</td>
			</tr>
			<tr>
				<td>Consumo - Máx.|Mín. (kWh):</td>
				<td>{{ $data['ano_atual']['data']['consumo']['max'] }} | {{ $data['consumo']['temperatura']['min'] }}</td>
				<td>{{ $data['ano_anterior']['data']['consumo']['max'] }} | {{ $data['consumo']['temperatura']['min'] }}</td>
			</tr>
		</tbody>
	</table>

	<table class="table">
		<thead>
			<tr>
				<th>Performance</th>
				<th>Período atual</th>
				<th>Ano anterior</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Média (kW/Tr):</td>
				<td>{{ $data['ano_atual']['data']['performance']['media'] }}</td>
				<td>{{ $data['ano_anterior']['data']['performance']['media'] }}</td>
			</tr>
			<tr>
				<td>Máx.|Mín. (kW/Tr):</td>
				<td>{{ $data['ano_atual']['data']['performance']['max'] }} | {{ $data['performance']['temperatura']['min'] }}</td>
				<td>{{ $data['ano_anterior']['data']['performance']['max'] }} | {{ $data['performance']['temperatura']['min'] }}</td>
			</tr>
		</tbody>
	</table>

	<h3 class="card-title">Gráfico Comparativo</h3>

    <!-- <div class="col s6"></div>
    <div class="col s6"></div> -->
</div>