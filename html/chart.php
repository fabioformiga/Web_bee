<!-- este programa apenas mostra os graficos e faz o contacto com a base de dados  -->
<!DOCTYPE html>		

<?php include "database.php" ?>

	<div id="peso" class="collapse show">
		<canvas id="chart2" style="width: 100% ; height: 65vh; border: 1px solid #555652; margin-top: 10px;"></canvas>
	</div>

	<div id="temp" class="collapse show">
		<canvas id="chart" style="width: 100% ; height: 65vh; border: 1px solid #555652; margin-top: 10px;"></canvas>
	</div>
	<div id="hum" class="collapse show">
		<canvas id="chart1" style="width: 100% ; height: 65vh; border: 1px solid #555652; margin-top: 10px;"></canvas>
	</div>

	<script>
		
		var ctx = document.getElementById("chart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [<?php echo $hora; ?>],
				datasets: 
				[{
					label: 'Temperatura',
					data: [<?php echo $temperature; ?>],
					backgroundColor: 'transparent',
					borderColor:'rgba(255,198,119)',
					borderWidth: 3
				}
			]
			},
		
			options: {
				scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
				tooltips:{mode: 'index'},
				legend:{display: true, position: 'top', labels: {fontColor: 'rgb(0,0,0)', fontSize: 16}}
			}
		});


	</script>
	
	<script>
		var ctx = document.getElementById("chart1").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [<?php echo $hora; ?>],
				datasets: 
				[{
					label: 'Humidade',
					data: [<?php echo $hum; ?>],
					backgroundColor: 'transparent',
					borderColor:'rgba(255,198,119)',
					borderWidth: 3
				}
			]
			},
		
			options: {
				scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
				tooltips:{mode: 'index'},
				legend:{display: true, position: 'top', labels: {fontColor: 'rgb(0,0,0)', fontSize: 16}}
			}
		});

	</script>
	<script>
		var ctx = document.getElementById("chart2").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [<?php echo $hora; ?>],
				datasets: 
				[{
					label: 'Peso',
					data: [<?php echo $wheigh; ?>],
					backgroundColor: 'transparent',
					borderColor:'rgba(255,198,119)',
					borderWidth: 3
				}
			]
			},
		
			options: {
				scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
				tooltips:{mode: 'index'},
				legend:{display: true, position: 'top', labels: {fontColor: 'rgb(0,0,0)', fontSize: 16}}
			}
		});

	</script>



	<br>
	<br>
</main>		

</div>
</div>


</body>
