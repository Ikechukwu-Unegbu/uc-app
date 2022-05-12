<div class="top-area">
			<div class="auto-container">
				<div class="row">
					<div class="col-lg-8 col-md-12 col-sm-12 col-12">
						<div class="info-menu">
							<ul>
								<li><a href="#"><i class="icofont icofont-time"></i> Opening Hours - Mon to Sat: 9AM to 5PM</a></li>
							</ul>
						</div>
					</div>
					<!-- end col -->
					<div class="col-lg-4 col-md-12 col-sm-12 col-12">
						<div class="info-menu">
							<ul>
								@if(Auth::check())
								<li>
									<form action="">
										<button class="btn btn-sm">Log Out</button>
									</form>
								</li>
							
								@else
								<li><a href="/login"><i class="icofont icofont-login"></i> Login </a></li>
								<li><a href="/register"><i class="icofont icofont-user-alt-5"></i> Register </a></li>
								@endif
						
								<!-- <li><a href="#"><i class="icofont icofont-hand-drag2"></i> Help </a></li> -->
								<li><a href="/contact"><i class="icofont icofont-live-support"></i> Support </a></li>
							</ul>
						</div>
					</div> 
					<!-- end col -->
				</div>
			</div>
		</div>