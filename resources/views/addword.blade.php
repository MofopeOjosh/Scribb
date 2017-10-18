
@extends('layouts.pagesliding')

@section('display')

	</div>
	<div class="pageslidin-content-wrapper">
		<div class="row">
			<div class="medium-5 columns medium-centered">
				<div class="main-first-content">
					<form data-abide novalidate method="POST" action="/scenario/{{$scenario->id}}/addword">
                        {{ csrf_field() }}
                        
						@if (count($errors))
							@foreach ($errors->all() as $error)
								<span class="validate-error">
									{{ $error }}
								</span>
							@endforeach
						@endif
						<div class="row">
							<div class="medium-12 columns">
								<label>
									<div class="form-title">
										Word
									</div>
									<input type="text" placeholder="Word" required name="name">
									<span class="form-error">
										This is required!
									</span>
								</label>
							</div>
						</div>
						<div class="row">
							<div class="medium-12 columns">
								<label>
									<div class="form-title">
										Use case
									</div>
									<textarea rows="3" placeholder="Use it in an example...." required name="usage"></textarea>
									<span class="form-error">
										This is required!
									</span>
								</label>
							</div>
						</div>
						<div class="row">
							<div class="medium-5 columns medium-centered">
								<button type="submit" class="button small expanded mt-20">Add word</button>
							</div>
						</div>
					</form>
			</div>
			</div>
		</div>
	</div>
@endsection