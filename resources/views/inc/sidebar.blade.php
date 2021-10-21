

{{-- ************************************************************************************************ --}}
{{-- ************* DASHBORD RIGHT SIDE NAVE BASED ON USER PRIVELAGES ******************************** --}}
{{-- *********************** INCLUDES SETTING OPTIONS *********************************************** --}}
{{-- ************************************************************************************************ --}}

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="{{ route('/') }}">
				<img src="imgs/alp.svg" alt="" class="dark-logo">
				<img src="imgs/alp.svg" alt="" class="white-logo">
				CCVI
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					{{-- ****************************************************************************** --}}
					{{-- **************************** ADMIN  PRIVELAGES ******************************* --}}
					{{-- ****************************************************************************** --}}
					@if(( Auth::user()->role == "admin") || ( Auth::user()->role == "admin-subcity"))
					<li>
						<a href="/" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext"> Home</span>
						</a>
					</li>
					<li>
						<a href="{{ route('admin.index') }}" class="dropdown-toggle no-arrow">
							<!-- <i class="icon-copy fa fa-dashboard" aria-hidden="true"></i> -->
							<span class="micon fa fa-dashboard fa-2x"></span><span class="mtext">Admin Dashbord</span>
						</a>
					</li>
					<li>
						<a href="{{ route('users') }}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-edit2"></span><span class="mtext">Manage Users</span>
						</a>
					</li>

					@if( Auth::user()->role == "admin-subcity")

					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-flow"></span><span class="mtext">Encode Indicators</span>
						</a>
						<ul class="submenu">
							<li><a href="{{ route('manage_subcity') }}">Subcity</a></li>
							<li><a href="{{ route('manage_woreda') }}">Woreda</a></li>
							<li><a href="{{ route('manage_ketena') }}">Ketena</a></li>
						</ul>
					</li>
					@endif
					{{-- ******************************************************************************** --}}
					{{-- **************************** EXPERT  PRIVELAGES ******************************** --}}
					{{-- ******************************************************************************** --}}
		            @elseif( Auth::user()->role == "expert" )
					<li>
						<a href="/" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext"> Home</span>
						</a>
					</li>
					<li>
						<a href="{{ route('expert.index') }}" class="dropdown-toggle no-arrow">
							<!-- <i class="icon-copy fa fa-dashboard" aria-hidden="true"></i> -->
							<span class="micon fa fa-dashboard fa-2x"></span><span class="mtext"> Dashbord</span>
						</a>
					</li>
					{{-- <li>
						<a href="{{ route('indicator') }}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-flow"></span><span class="mtext">Manage Indicators</span>
						</a>
					</li> --}}
					<li>
						<a href="{{ route('subreview.index') }}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-writing"></span><span class="mtext">Manage Reviews</span>
						</a>
					</li>
					{{-- ******************************************************************************* --}}
					{{-- **************************** ENCODER  PRIVELAGES ****************************** --}}
					{{-- ******************************************************************************* --}}
		            @elseif( Auth::user()->role == "encoder")
		            <li>
						<a href="/" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext"> Home</span>
						</a>
					</li>
					<li>
						<a href="{{ route('incoder.index') }}" class="dropdown-toggle no-arrow">
							<!-- <i class="icon-copy fa fa-dashboard" aria-hidden="true"></i> -->
							<span class="micon fa fa-dashboard fa-2x"></span><span class="mtext"> Dashbord</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-flow"></span><span class="mtext">Encode Indicators</span>
						</a>
						<ul class="submenu">
							<li><a href="{{ route('manage_subcity') }}">Subcity</a></li>
							<li><a href="{{ route('manage_woreda') }}">Woreda</a></li>
							<li><a href="{{ route('manage_ketena') }}">Ketena</a></li>
						</ul>
					</li>
					
					{{-- ******************************************************************************* --}}
					{{-- **************************** OFFICE  PRIVELAGES ******************************* --}}
					{{-- ******************************************************************************* --}}
		            @elseif( Auth::user()->role == "setting")
					<li>
						<a href="/" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext"> Home</span>
						</a>
					</li>
					<li>
						<a href="{{ route('office.index') }}" class="dropdown-toggle no-arrow">
							<!-- <i class="icon-copy fa fa-dashboard" aria-hidden="true"></i> -->
							<span class="micon fa fa-dashboard fa-2x"></span><span class="mtext"> Dashbord</span>
						</a>
					</li>
					<li>
						<a href="{{ route('formdata') }}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-pen"></span><span class="mtext">Company Assessment</span>
						</a>
					</li>
					<li>
						<a href="{{ route('historydata') }}" class="dropdown-toggle no-arrow">
							<span class="micon 	 fa fa-history fa-2x"></span><span class="mtext">Assessment History</span>
						</a>
					</li>
					
					{{-- **************************************************************************** --}}
					{{-- **************************** OFFICIAL KETENA OFFICIAL PRIVELAGES *********** --}}
					{{-- **************************************************************************** --}}
					@elseif( Auth::user()->role == "guestcom")
		            <li>
						<a href="/" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext"> Home</span>
						</a>
					</li>
					<li>
						<a href="{{ route('official.index') }}" class="dropdown-toggle no-arrow">
							<!-- <i class="icon-copy fa fa-dashboard" aria-hidden="true"></i> -->
							<span class="micon fa fa-dashboard fa-2x"></span><span class="mtext"> Dashbord</span>
						</a>
					</li>
					<ul id="accordion-menu">
						
						<li class="dropdown 
									@if(isset($selected) )
										show
									@endif">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="mtext"><i class="micon icon-copy ion-chevron-down"></i> Data </span>
							</a>
							<ul class="submenu"
							@if(isset($selected) )
										style="display: block;"
									@endif>

								@foreach($subcities as $key=>$city)


								<li class="dropdown 
									@if(isset($selected) && $selected[0]->subcity_name == $city->subcity_name)
										show
									@endif
									">
									<a href="javascript:;" class="dropdown-toggle">
										<i class="micon dw dw-city"></i><span class="mtext">{{ $city->subcity_name }}</span>
									</a>
									<ul class="submenu child"
									@if(isset($selected) && $selected[0]->subcity_name == $city->subcity_name)
										style="display: block;"
									@endif
									>
										@foreach($woredas as $key=>$woreda)
											@if($woreda->subcity_id == $city->id)
												@if(isset($woreda_id) && $woreda_id == $woreda->id)

													<li><a class="active" href="{{ route('official.show',$woreda->id) }}">{{ $woreda->woreda_name }}</a></li>
													@php
													echo $woreda_id = $woreda->woreda_name;
													@endphp
												@else
													<li><a  href="{{ route('official.show',$woreda->id) }}">{{ $woreda->woreda_name }}</a></li>
												@endif
											@endif
										@endforeach
									</ul>
								</li>
								@endforeach
							</ul>
						</li>
						
					</ul>
		            @endif
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>