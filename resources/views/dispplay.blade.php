<div id="auth" class="auth-wrapper pageslidin">
	<div class="pageslidin-header clearfix">
		<a href="#!" class="pageslidin-back">
			<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
		</a>
		<div class="pageslidin-title">
			Authentication
		</div>
	</div>
	<div class="pageslidin-content-wrapper">
		<div class="row">
			<div class="medium-3 columns medium-centered">
				<div class="main-first-content login">
					<div class="auth-text-content">
						Login to enjoy more benefits
					</div>
					<form data-abide novalidate>
						<div class="row">
							<div class="medium-12 columns">
								<label>
									<div class="form-title">
										Email Address
									</div>
									<input type="email" placeholder="Email Address" required>
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
										Password
									</div>
									<input type="password" placeholder="xxxxxxxxxx" required>
									<span class="form-error">
										This is required!
									</span>
								</label>
							</div>
						</div>
						<div class="row">
							<div class="medium-6 columns">
								<a href="forgotpassword.html" class="auth-forgot-link">Forgot Password?</a>
							</div>
							<div class="medium-6 columns text-right">
    						<input id="rememberMe"type="checkbox"><label for="rememberMe" class="auth-forgot-link" >Remember Me</label>
							</div>
						</div>
						<div class="row">
							<div class="medium-9 columns medium-centered">
								<button type="submit" class="button small expanded mt-20">Login</button>
							</div>
						</div>
					</form>
					<div class="row">
						<div class="medium-12 columns">
							<a href="signup" class="auth-signup-link">Don't have an account? Sign Up</a>
						</div>
					</div>
					<div class="row">
						<div class="medium-9 columns medium-centered">
							<button type="submit" class="button small expanded prof-btn mt-20">Login With Prof</button>
							<button type="submit" class="button small expanded fb">Login With Facebook</button>
							<button type="submit" class="button small expanded tw">Login With Twitter</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="createPost" class="createpost-wrapper pageslidin">
	<div class="pageslidin-header clearfix">
		<a href="#!" class="pageslidin-back">
			<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
		</a>
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
							<form data-abide novalidate>
								<div class="row">
									<div class="medium-12 columns">
										<label>
											<div class="form-title">
												Your scenarios
											</div>
											<textarea rows="3" placeholder="Start writing a scenario...." required></textarea>
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
							<form data-abide novalidate>
								<div class="row">
									<div class="medium-12 columns">
										<label for="fileUpload" class="button small">
											<div class="form-title">
												Upload scenarios
											</div>
										</label>
										<input type="file" id="fileUpload" class="show-for-sr" required>
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
</div>
<div id="addWord" class="addword-wrapper pageslidin">
	<div class="pageslidin-header clearfix">
		<a href="#!" class="pageslidin-back">
			<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
		</a>
	</div>
	<div class="pageslidin-content-wrapper">
		<div class="row">
			<div class="medium-5 columns medium-centered">
				<div class="main-first-content">
					<form data-abide novalidate>
						<div class="row">
							<div class="medium-12 columns">
								<label>
									<div class="form-title">
										Word
									</div>
									<input type="text" placeholder="Word" required>
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
									<textarea rows="3" placeholder="Use it in an example...." required></textarea>
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
</div>
<div id="help" class="help-wrapper pageslidin">
	<div class="pageslidin-header clearfix">
		<a href="#!" class="pageslidin-back">
			<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
		</a>
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
</div>
<div id="terms" class="terms-wrapper pageslidin">
	<div class="pageslidin-header clearfix">
		<a href="#!" class="pageslidin-back">
			<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
		</a>
		<div class="pageslidin-title">
			Terms
		</div>
	</div>
	<div class="pageslidin-content-wrapper">
		<div class="row">
			<div class="medium-12 columns medium-centered">
				<div class="main-first-content">
					<div class="row">
						<div class="medium-12 columns large-6 large-centered">
							<div class="terms-alert-wrapper">
								<div class="callout" data-closable>
									<div class="row">
										<div class="medium-9 columns medium-centered large-10 large-centered">
											<div class="cookie-message-content">
												By using Repools’s services you agree to our Cookie Use. We
												use cookies for for analytics, personalisation, and ads.
											</div>
											<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="terms-page-content-wrapper">
						<div class="terms-page-content-main">
							<h3 class="terms-page-content-main-title">Wordit Terms of  Service <span>-</span> <a href="#">wordit.pdf</a></h3>
							<p class="terms-page-content-main-text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
								dolore eu fug iat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
								dolore eu fug iat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div class="terms-page-content-sub">
							<h5 class="terms-page-content-sub-title">
								<span class="terms-page-content-sub-count">1.</span>
								Basic Terms
							</h5>
							<p class="terms-page-content-sub-text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
								dolore eu fug iat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div class="terms-page-content-sub">
							<h5 class="terms-page-content-sub-title">
								Basic Terms
							</h5>
							<p class="terms-page-content-sub-text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
								dolore eu fug iat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="about" class="about-wrapper pageslidin">
	<div class="pageslidin-header clearfix">
		<a href="#!" class="pageslidin-back">
			<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
		</a>
		<div class="pageslidin-title">
			About
		</div>
	</div>
	<div class="pageslidin-content-wrapper">
		<div class="row">
			<div class="medium-10 columns medium-centered large-6 columns large-centered">
				<div class="main-first-content about-content-wrapper">
					<div class="about-content-mission">
						Our mission: To give everyone the power to create, rep and share
						tools usage stories instantly, without barriers.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="privacy" class="privacy-wrapper pageslidin">
	<div class="pageslidin-header clearfix">
		<a href="#!" class="pageslidin-back">
			<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
		</a>
		<div class="pageslidin-title">
			Privacy
		</div>
	</div>
	<div class="pageslidin-content-wrapper">
		<div class="row">
			<div class="medium-12 columns medium-centered">
				<div class="main-first-content">
					<div class="row">
						<div class="medium-12 columns large-6 large-centered">
							<div class="terms-alert-wrapper">
								<div class="callout" data-closable>
									<div class="row">
										<div class="medium-9 columns medium-centered large-10 large-centered">
											<div class="cookie-message-content">
												By using Repools’s services you agree to our Cookie Use. We
												use cookies for for analytics, personalisation, and ads.
											</div>
											<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="terms-page-content-wrapper">
						<div class="terms-page-content-main">
							<h3 class="terms-page-content-main-title">Wordit Terms of  Service <span>-</span> <a href="#">wordit.pdf</a></h3>
							<p class="terms-page-content-main-text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
								dolore eu fug iat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
								dolore eu fug iat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div class="terms-page-content-sub">
							<h5 class="terms-page-content-sub-title">
								<span class="terms-page-content-sub-count">1.</span>
								Basic Terms
							</h5>
							<p class="terms-page-content-sub-text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
								dolore eu fug iat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div class="terms-page-content-sub">
							<h5 class="terms-page-content-sub-title">
								Basic Terms
							</h5>
							<p class="terms-page-content-sub-text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
								dolore eu fug iat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="postPage" class="post-page-wrapper pageslidin">
	<div class="pageslidin-header clearfix">
		<a href="#!" class="pageslidin-back">
			<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
		</a>
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
										<a href="#">Dante Lex</a>
									</div>
									<div>12:30pm</div>
								</div>
							</div>
							<div class="float-right">
								<ul class="menu">
									<li><a href="#addWord" class="addword">Add a word</a></li>
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
							<div class="row medium-up-2medium-up-1">
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
