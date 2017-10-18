@extends('layouts.pagesliding')

@section('display')


	</div>
	<div class="pageslidin-content-wrapper">
		<div class="row">
			<div class="medium-8 columns medium-centered">
				<div class="main-content-wrapper">
					<div class="main-content-card">
						<div class="clearfix card-info">
							<div class="float-left">
								<div class="sub-item">
									<div>
										@if ($scenario->checkUser())
											<a href="/dashboard">{{$scenario->user->name}}</a>
										@else
											<a href="profile/{{$scenario->user->id}}">{{$scenario->user->name}}</a>
										@endif	
										
									</div>
									
											<div>{{ $scenario->created_at->diffForHumans() }}</div>
								</div>
							</div>
							<div class="float-right">
								<ul class="menu">
									<li><a href="/scenario/{{$scenario->id}}/addword" class="addword">Add a word</a></li>
									<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>12</a></li>
									<!-- PLACE USER AUTH HERE -->
									@if ($scenario->checkUser())
									<li><a href="/scenario/{{$scenario->id}}/edit"><i class="fa fa-edit" aria-hidden="true"></i></a></li>
									<li><a href="/scenario/{{$scenario->id}}/delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
									@endif
									<li class="ndropdown">
										<a href="#" data-rep-popover="share_popover"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="card-content-text-wrapper">
							<div class="card-content-text card-content">
									{{$scenario->content}}
							</div>
							<div class="card-keyword-wrapper">
								<div class="card-keyword">Keywords:</div>
								<ul class="menu card-keyword-list">
									<li><a href="#">Movie</a></li>
									<li><a href="#">Cinema</a></li>
									<li><a href="#">Video</a></li>
									<li><a href="#">Film</a></li>
								</ul>
							</div>
						</div>
						<div class="card-words-wrapper">
							<div class="row medium-up-2">
							@foreach ($scenario->words as $word)
								<div class="column column-block">
									<div class="card-words-card">
										@if ($word->checkUser() || Auth::id()==$scenario->user_id )
										<div class="card-words-title">
											<div class="float-left">
												{{$word->name}}
											</div>
												<div class="float-right">
												<ul class="menu">
													@if ($word->checkUser())
													<li><a href="/word/{{$word->id}}/edit"><i class="fa fa-edit" 
													aria-hidden="true"></i></a></li>
													@endif
													<li><a href="/word/{{$word->id}}/delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
												</ul>
												</div>
										</div><br>
										<div class="sub-item card-words-poster">
											<div>
													<a href="/dashboard">{{$word->user->name}}</a>
											</div>
											<div>{{ $word->created_at->diffForHumans() }}</div>
										</div>
										@else
											<div class="card-words-title">
												<div class="float-left">
													{{$word->name}}
												</div>
											</div>
											<div class="sub-item card-words-poster">
												<div>
													<a href="profile/{{$word->user_id}}">{{$word->user->name}}</a>
												</div>
											<div>{{ $word->created_at->diffForHumans() }}</div>
											</div>
										@endif	
											
										<div class="card-words-text">
											<p>
											{{$word->usage}}
											</p>
										</div>
										<div class="card-words-vote">
											<ul class="menu">
												<li><a href="#">28</a></li>
												<li><a href="#"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection