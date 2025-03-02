<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<!-- header logo -->
						<a href="index.html" class="header__logo">
							<img src="{{ asset('frontend/assets/img/logo11.png')}}" alt=""style="width: 340px; height: auto; margin-left: -65px;">
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav">
							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link" href="/" >Home </a>
							</li>
							<!-- end dropdown -->

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catalog  </a>
							</li>
							<!-- end dropdown -->

							<li class="header__nav-item">
								<a href="pricing.html" class="header__nav-link">Pricing plan</a>
							</li>

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages <i class="ti ti-chevron-down"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="login">login</a></li>
									<li><a href="register">register</a></li>
									<li><a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a></li>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   					   @csrf
                     				 </form>
								</ul>
							</li>
							<!-- end dropdown -->

							<!-- dropdown -->

							<!-- end dropdown -->
						</ul>
						<!-- end header nav -->

						<!-- header auth -->
						<div class="header__auth">
							<form action="#" class="header__search">
								<input class="header__search-input" type="text" placeholder="Search...">
								<button class="header__search-button" type="button">
									<i class="ti ti-search"></i>
								</button>
								<button class="header__search-close" type="button">
									<i class="ti ti-x"></i>
								</button>
							</form>

							<button class="header__search-btn" type="button">
								<i class="ti ti-search"></i>
							</button>


							<!-- dropdown -->
							<div class="header__profile">
								<a class="header__sign-in header__sign-in--user" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="ti ti-user"></i>
									<span>Profile</span>
								</a>

								<ul class="dropdown-menu dropdown-menu-end header__dropdown-menu header__dropdown-menu--user">
									<li><a href="profile.html"><i class="ti ti-ghost"></i>Profile</a></li>
									<li><a href="profile.html"><i class="ti ti-stereo-glasses"></i>Subscription</a></li>
									<li><a href="profile.html"><i class="ti ti-bookmark"></i>Favorites</a></li>
									<li><a href="profile.html"><i class="ti ti-settings"></i>Settings</a></li>
									<li><a href="#"><i class="ti ti-logout"></i>Logout</a></li>
								</ul>
							</div>
							<!-- end dropdown -->
						</div>
						<!-- end header auth -->

						<!-- header menu btn -->
						<button class="header__btn" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- end header menu btn -->
					</div>
				</div>
			</div>
		</div>
	</header>
