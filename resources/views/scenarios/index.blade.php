@extends('layouts.app')

@section('content')

	<!--Home Section -->
	<div class="home-wrapper">
		<div class="row">
			<div class="medium-8 columns">
				<div class="home-nav-wrapper menu-centered">
					<ul class="tabs menu" data-deep-link="true" id="home-tabs" data-tabs>
						<li class="tabs-title is-active"><a href="#latest" aria-selected="true">Latest <span>(234)</span></a></li>
						<li class="tabs-title"><a href="#normal">Normal <span>(234)</span></a></li>
						<li class="tabs-title"><a href="#picture">Picture <span>(234)</span></a></li>
						<li class="tabs-title"><a href="#random">Random <span>(234)</span></a></li>
					</ul>
				</div>
				<div class="main-content-wrapper">
					<div class="tabs-content" data-tabs-content="home-tabs">
						<div class="tabs-panel is-active" id="latest">
						@foreach ($scenarios as $scenario)
							<div class="main-content-card">
								<div class="clearfix card-info">
									<div class="float-left">
										<div class="sub-item">
											<div>
												@if ($scenario->checkUser())
												<a href="/dashboard">{{$scenario->user->name}}</a>
												@else
												<a href="profile/{{$scenario->user_id}}">{{$scenario->user->name}}</a>
												@endif
											</div>
											<div>{{ $scenario->created_at->diffForHumans() }}</div>
										</div>
									</div>
									<div class="float-right">
										<ul class="menu">
											<li><a href="/scenario/{{$scenario->id}}/addword" class="addword">Add a Word</a></li>
											<li><a href="/scenario/{{$scenario->id}}/likes"><i class="fa fa-heart" aria-hidden="true"></i>12</a></li>
											<li class="ndropdown">
												<a href="#" data-rep-popover="share_popover"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card-content-text-wrapper">
									<a href="/scenario/{{$scenario->id}}/" class="card-content-text card-content">
									@if ($scenario->type == 0)
										{{$scenario->content}}
									@else
										<div class="card-content-image card-content">
											<img data-rep-lazy="{{ asset('img/pages/'.$scenario->content)}}">
										</div>
									@endif
									</a>
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
										@foreach ($scenario->words->slice(0, 4) as $word)
										<div class="column column-block">
										<div class="card-words-card">
											<div class="card-words-title">
												{{$word->name}}
											</div>
											<div class="sub-item card-words-poster">
												<div>
												@if ($word->checkUser())
													<a href="/dashboard">{{$scenario->user->name}}</a>
												@else
													<a href="profile/{{$word->user_id}}">{{$word->user->name}}</a>
												@endif	
													
												</div>
												<div>12:30pm</div>
											</div>
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
									<a href="/scenario/{{$scenario->id}}" class="see-more">See more words</a>
							</div>
						@endforeach
							<!-- <div class="pagination"> </div> -->
						</div>
						<div class="tabs-panel" id="normal">
							@foreach ($texts as $text)
 							<div class="main-content-card">
								<div class="clearfix card-info">
									<div class="float-left">
										<div class="sub-item">
											<div>
												@if ($text->checkUser())
													<a href="/dashboard">{{$text->user->name}}</a>
												@else
													<a href="profile/{{$text->user_id}}">{{$text->user->name}}</a>
												@endif	
											</div>
											<div>12:30pm</div>
										</div>
									</div>
									<div class="float-right">
										<ul class="menu">
											<li><a href="/scenario/{{$text->id}}/addword" class="addword">Add a Word</a></li>
											<li><a href="/scenario/{{$text->id}}/likes"><i class="fa fa-heart" aria-hidden="true"></i>12</a></li>
											<li class="ndropdown">
												<a href="#" data-rep-popover="share_popover"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card-content-text-wrapper">
									<a href="/scenario/{{$text->id}}/" class="card-content-text card-content">
										{{$text->content}}
									</a>
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
												@foreach ($text->words->slice(0, 4) as $word)
												<div class="column column-block">
													<div class="card-words-card">
														<div class="card-words-title">
															{{$word->name}}
														</div>
														<div class="sub-item card-words-poster">
															<div>
															@if ($word->checkUser())
																<a href="/dashboard">{{$word->user->name}}</a>
															@else
																<a href="profile/{{$word->user_id}}">{{$word->user->name}}</a>
															@endif
																
															</div>
															<div>12:30pm</div>
														</div>
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
								<a href="/scenario/{{$text->id}}" class="see-more">See more words</a>
							</div>
							@endforeach
							<!-- <div class="pagination"> </div> -->
						</div>
						<div class="tabs-panel" id="picture">
							@foreach ($pictures as $picture)
 							<div class="main-content-card">
								<div class="clearfix card-info">
									<div class="float-left">
										<div class="sub-item">
											<div>
												@if ($picture->checkUser())
													<a href="/dashboard">{{$picture->user->name}}</a>
												@else
													<a href="profile/{{$word->user_id}}">{{$picture->user->name}}</a>
												@endif	
											</div>
											<div>12:30pm</div>
										</div>
									</div>
									<div class="float-right">
										<ul class="menu">
											<li><a href="/scenario/{{$picture->id}}/addword" class="addword">Add a Word</a></li>
											<li><a href="/scenario/{{$picture->id}}/likes"><i class="fa fa-heart" aria-hidden="true"></i>12</a></li>
											<li class="ndropdown">
												<a href="#" data-rep-popover="share_popover"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card-content-text-wrapper">
									<a href="/scenario/{{$picture->id}}" class="card-content-text card-content">
										<div class="card-content-image card-content">
											<img data-rep-lazy="{{ asset('img/pages/'.$picture->content)}}">
										</div>
									</a>
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
											@foreach ($picture->words->slice(0, 4) as $word)
											<div class="column column-block">
												<div class="card-words-card">
													<div class="card-words-title">
															{{$word->name}}
													</div>
													<div class="sub-item card-words-poster">
														<div>
														@if ($word->checkUser())
															<a href="/dashboard">{{$word->user->name}}</a>
														@else
															<a href="profile/{{$word->user_id}}">{{$word->user->name}}</a>
														@endif	
														</div>
														<div>12:30pm</div>
													</div>
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
								<a href="/scenario/{{$picture->id}}" class="see-more">See more words</a>
							</div>
							@endforeach
							<!-- <div class="pagination"> </div> -->
						</div>
						<div class="tabs-panel" id="random">
							<div class="main-content-card">
								<div class="clearfix card-info">
									<div class="float-left">
										<div class="sub-item">
											<div>
												<a href="#">Dante Lex</a>
											</div>
											<div>12:30pm</div>
										</div>
									</div>
									<div class="float-right">
										<ul class="menu">
											<li><a href="#addword" class="addword">Add a word</a></li>
											<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>12</a></li>
											<li class="ndropdown">
												<a href="#" data-rep-popover="share_popover"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card-content-text-wrapper">
									<a href="#postPage" class="card-content-text card-content">
										Looking for food in the fridge multiple times within a short time frame, while knowing that no food is in there
									</a>
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
										<div class="column column-block">
											<div class="card-words-card">
												<div class="card-words-title">
													Inspiration Expiration
												</div>
												<div class="sub-item card-words-poster">
													<div>
														<a href="#">Dante Lex</a>
													</div>
													<div>12:30pm</div>
												</div>
												<div class="card-words-text">
													<p>
													"That cop just gave me *the fuzz*... I know I'm not doing anything wrong, but I don't want him to catch me slippin"
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
										<div class="column column-block">
											<div class="card-words-card">
												<div class="card-words-title">
													Inspiration Expiration
												</div>
												<div class="sub-item card-words-poster">
													<div>
														<a href="#">Dante Lex</a>
													</div>
													<div>12:30pm</div>
												</div>
												<div class="card-words-text">
													<p>
													"That cop just gave me *the fuzz*... I know I'm not doing anything wrong, but I don't want him to catch me slippin"
													</p>
													<p>
													the fuss is that feeling of being caught by the cops doing something wrong, even if you don't know what it is yet
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
									</div>
								</div>
								<a href="#postPage" class="see-more">See more words</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="medium-3 medium-offset-1 columns">
				<div class="sidebar-wrapper">
					<div class="side-item-wrapper">
						<div class="sidebar-title clearfix">
							<div class="float-left">
								Top Scenarios
							</div>
							<div class="float-right">
								<a href="#">Refresh</a>
							</div>
						</div>
						<div class="sidebar-content-wrapper sidebar-item">
							<div class="sidebar-content-text">
								<a href="#">Looking for food in the fridge multiple times within a short time frame...</a>
							</div>
							<div class="sub-item">
								<div><a href="#">Dante Lex</a></div>
								<div>12:30pm</div>
							</div>
						</div>
						<div class="sidebar-content-wrapper sidebar-item">
							<div class="sidebar-content-text">
								<a href="#">Looking for food in the fridge multiple times within a short time frame...</a>
							</div>
							<div class="sub-item">
								<div><a href="#">Dante Lex</a></div>
								<div>12:30pm</div>
							</div>
						</div>
						<div class="sidebar-content-wrapper sidebar-item">
							<div class="sidebar-content-text">
								<a href="#">Looking for food in the fridge multiple times within a short time frame...</a>
							</div>
							<div class="sub-item">
								<div><a href="#">Dante Lex</a></div>
								<div>12:30pm</div>
							</div>
						</div>
					</div>
					<div class="side-item-wrapper">
						<div class="invite-card">
							<div class="invite-content-header">
								<div class="invite-content-title">Invite your friend</div>
							</div>
							<div class="invite-content">
								<form class="ui form">
									<div class="field">
										<input type="email" name="email" placeholder="Enter your email">
										<a href="#" class="secondary button expanded">Send Invite</a>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="side-item-wrapper footer">
						<ul class="">
						
						<li><a href="#">@worditt</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#help">Help</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#terms">Terms</a></li>
						<li><a href="#privacy">Privacy</a></li>
						
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Site footer starts -->
@endsection


