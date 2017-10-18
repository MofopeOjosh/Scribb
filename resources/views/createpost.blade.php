
@extends('layouts.pagesliding')

@section('display')
	</div>
	<div class="pageslidin-content-wrapper">
		<div class="row">
			<div class="medium-5 columns medium-centered">
				<div class="main-first-content">
					<ul class="tabs menu" data-deep-link="true" id="create-tabs" data-tabs>
						<li class="tabs-title is-active"><a href="#normal" aria-selected="true">Normal Scenario</a></li>
						<li class="tabs-title"><a href="#picture">Picture Scenario</span></a></li>
					</ul>

					<div class="tabs-content" data-tabs-content="create-tabs">
						<div class="tabs-panel is-active" id="normal">
							<form data-abide novalidate method="post" action="/scenario/createpost">
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
												Your scenarios
											</div>
                        					<input type="hidden" name="type" value="0">
											<textarea rows="3" placeholder="Start writing a scenario...." name="content" required></textarea>
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
												Keywords
											</div>
											<input type="text" placeholder="e.g max, john, wordmax">
										</label>
									</div>
								</div>
								<div class="row">
									<div class="medium-5 columns medium-centered">
										<button type="submit" class="button small expanded mt-20">Submit</button>
									</div>
								</div>
							</form>
						</div>
						<div class="tabs-panel" id="picture">
							<form data-abide novalidate method="post" action="/scenario/newpost">
                        		{{ csrf_field() }}
								<div class="row">
									<div class="medium-12 columns">
										<label for="fileUpload" class="button small">
											<div class="form-title">
												Upload scenarios
											</div>
										</label>
                        				<input type="hidden" name="type" value="1">
										<input type="file" id="fileUpload" class="show-for-sr" name="content" required>
										<span class="form-error">
											This is required!
										</span>
									</div>
								</div>
								<div class="row">
									<div class="medium-12 columns">
										<label>
											<div class="form-title">
												Keywords
											</div>
											<input type="text" placeholder="e.g max, john, wordmax">
										</label>
									</div>
								</div>
								<div class="row">
									<div class="medium-5 columns medium-centered">
										<button type="submit" class="button small expanded mt-20">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection