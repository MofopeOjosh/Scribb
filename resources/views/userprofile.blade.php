@extends('layouts.app')

@section('content')

	<!--Profile Section -->
	<div class="profile-wrapper">
		<div class="row">
			<div class="medium-8 columns">
				<div class="home-nav-wrapper menu-centered">
					<ul class="tabs menu" data-deep-link="true" id="user-tabs" data-tabs>
						<li class="tabs-title is-active"><a href="#situations" aria-selected="true">Scenarios <span>(234)</span></a></li>
						<li class="tabs-title"><a href="#wordsadded">Words Added <span>(234)</span></a></li>
					</ul>
				</div>
				<div class="main-content-wrapper">
					<div class="tabs-content" data-tabs-content="user-tabs">
						<div class="tabs-panel is-active" id="situations">
							@foreach ($scenarios as $scenario)
							<div class="situation-content-card">
								<div class="situation-content-item">
									<a href="/scenario/{{$scenario->id}}/" class="situation-content-text">
										@if ($scenario->type == 0)
										{{$scenario->content}}
									@else
										<div class="card-content-image card-content">
											<img data-rep-lazy="{{ asset('img/pages/'.$scenario->content)}}">
										</div>
									@endif
									</a>
									<div class="sub-item">
										<div><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 12</a></div>
										<div>12:30pm</div>
										<div><a href="#" class="view">View</a></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="tabs-panel" id="wordsadded">
							@foreach ($words as $word)
							<div class="wordsadd-content-card">
								<div class="wordsadd-content-item">
									<div class="wordsadd-content-title">
										{{$word->name}}
									</div>
									<div class="wordsadd-content-text">
										<p>
											{{$word->usage}}
										</p>
									</div>
									<div class="wordsadd-vote">
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
			<div class="medium-3 medium-offset-1 columns">
				<div class="sidebar-wrapper">
					<div class="side-item-wrapper">
						<div class="sidebar-user-profile">
							<div class="sidebar-user-image" data-rep-placeholder-avatar data-rep-background-uimage="img/pages/dante.jpg"></div>
							<div class="sidebar-user-info">
								<div class="sidebar-user-name">Dante Lex</div>
								<div class="sub-item">
									<div class="sidebar-user-edit-link"><a href="#notifications">Notifications <span class="note-count">4</span></a></div>
									<div class="sidebar-user-edit-link"><a href="#settings">Settings</a></div>
								</div>
							</div>
						</div>
					</div>
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
	<!-- </div> -->
@endsection