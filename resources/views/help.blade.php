@extends('layouts.pagesliding')

@section('display')

		<div class="pageslidin-title">
			Help
		</div>
	</div>
	<div class="pageslidin-content-wrapper">
		<div class="row">
			<div class="medium-8 columns medium-centered">
				<div class="main-first-content">
					<ul class="accordion" data-accordion data-allow-all-closed="true">
						<li class="accordion-item is-active" data-accordion-item>
							<a href="#" class="accordion-title">Accordion 1</a>
							<div class="accordion-content" data-tab-content>
								I would start in the open state, due to using the `is-active` state class.
							</div>
						</li>
						<li class="accordion-item" data-accordion-item>
							<a href="#" class="accordion-title">Accordion 1</a>
							<div class="accordion-content" data-tab-content>
								I would start in the open state, due to using the `is-active` state class.
							</div>
						</li>
						<li class="accordion-item" data-accordion-item>
							<a href="#" class="accordion-title">Accordion 1</a>
							<div class="accordion-content" data-tab-content>
								I would start in the open state, due to using the `is-active` state class.
							</div>
						</li>
						<li class="accordion-item" data-accordion-item>
							<a href="#" class="accordion-title">Accordion 1</a>
							<div class="accordion-content" data-tab-content>
								I would start in the open state, due to using the `is-active` state class.
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection