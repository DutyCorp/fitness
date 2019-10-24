@foreach ($fitnesses as $fitness)
	<div>
		<div class="box">
			<p><b>{{ $fitness->FitnessName }}</b></p>
			<p>{{ $fitness->FitnessCategoryName }}</p>
			<p>{{ $fitness->FitnessCategoryDescription }}</p>
			<p>{{ $fitness->FitnessLocationName }}</p>
			<p>Rp. {{ $fitness->FitnessPrice }}/day</p><br>
			<button class="btn">Reserve</button>
		</div>
	</div>
@endforeach