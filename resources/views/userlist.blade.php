@foreach ($users as $user)
	<div>
		<div class="shortbox">
			<p><b>{{ $user->Name }}</b></p>
			<span>{{ $user->Email }}</span>
		</div>
	</div>
@endforeach