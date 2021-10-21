	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div><pre> <b> Welcome</b>  </pre>
		 <!--	<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
					
					</div>
				</form>
			</div> -->
		</div>
		<div class="header-right">
			
		{{-- 	<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										
										<h3>to do list</h3>
										<p></p>
									</a>
								</li>
								
									
							</ul>
						</div>
					</div>
				</div>
			</div> --}}
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon"  style="width: 0 !important;">
							{{-- <img src="vendors/images/photo1.jpg" alt=""> --}}
						</span>
						<span class="user-name"> {{ Auth::user()->name }}</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<!-- <a class="dropdown-item" href="#"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="#"><i class="dw dw-help"></i> Help</a> -->
						<a class="dropdown-item" href="/changepass"><i class="dw dw-key"></i>Change Password</a>

						<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                            <i class="dw dw-logout"></i>{{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

					</div>
				</div>
			</div>
					<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
		<!-- 	<div class="github-link">
				<a href="#" target="_blank"><img src="vendors/images/github.svg" alt=""></a>
			</div> -->

		</div>
	</div>