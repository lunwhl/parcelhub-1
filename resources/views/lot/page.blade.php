@extends('layouts.app')

@section('content')
	<div class="container">
		<section class="section">
			<div class="columns">
				<div class="column is-one-quarter">
					@include('components.side-menu')
				</div>
				<div class="column">
					<lots-page can_manage="{{ auth()->user()->hasRole('admin') }}"></lots-page>
				</div>	
			</div>
		</section>
	</div>
@endsection