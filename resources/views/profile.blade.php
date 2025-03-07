<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/splide.min.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/slimselect.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/plyr.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/photoswipe.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/default-skin.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css')}}">

	<!-- Icon font -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/webfont/tabler-icons.min.css')}}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('frontend/assets/icon/favicon-32x32.png')}}" sizes="32x32">
	<link rel="apple-touch-icon" href="{{ asset('frontend/assets/icon/favicon-32x32.png')}}">

	<meta name="description" content="Online Movies, TV Shows & Cinema HTML Template">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>IYO FILMS</title>
</head>

<body>
	<!-- header -->
	@include('include.frontend.header')
	<!-- end header -->

	<!-- page title -->
	<section class="section section--first">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h1 class="section__title section__title--head">Profile</h1>
						<!-- end section title -->

						<!-- breadcrumbs -->
						<!-- end breadcrumbs -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- content -->
	<div class="content">
		<!-- profile -->
		<div class="profile">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="profile__content">
							<div class="profile__user">
								<div class="profile__avatar">
									<img src="img/user.svg" alt="">
								</div>
								<div class="profile__meta">
									<h3>John Doe</h3>
									<span>HOTFLIX ID: 78123</span>
								</div>
							</div>

							<!-- content tabs nav -->
							<ul class="nav nav-tabs content__tabs content__tabs--profile" id="content__tabs" role="tablist">
								<li class="nav-item" role="presentation">
									<button id="1-tab" class="active" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">Profile</button>
								</li>

								<li class="nav-item" role="presentation">
									<button id="3-tab" data-bs-toggle="tab" data-bs-target="#tab-3" type="button" role="tab" aria-controls="tab-3" aria-selected="false">Favorites</button>
								</li>
							</ul>
							<!-- end content tabs nav -->

							<!-- logout -->
							<button class="profile__logout" type="button">
								<i class="ti ti-logout"></i>
								<span>Logout</span>
							</button>
							<!-- end logout -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end profile -->

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab" tabindex="0">
					<div class="row">
						<!-- stats -->
						<div class="col-12 col-md-6 col-xl-3">
							<div class="stats">
								<span>Your comments</span>
								<p>2 573</p>
								<i class="ti ti-message-circle"></i>
							</div>
						</div>
						<!-- end stats -->

						<!-- stats -->
						<div class="col-12 col-md-6 col-xl-3">
							<div class="stats">
								<span>Your reviews</span>
								<p>1 021</p>
								<i class="ti ti-star-half-filled"></i>
							</div>
						</div>
						<!-- end stats -->
					</div>

					<div class="row">
						<!-- dashbox -->
						<div class="col-12 col-xl-6">
							<div class="dashbox">
								<div class="dashbox__title">
									<h3><i class="ti ti-movie"></i> Movies for you</h3>

									<div class="dashbox__wrap">
										<a class="dashbox__refresh" href="#"><i class="ti ti-refresh"></i></a>
										<a class="dashbox__more" href="catalog.html">View All</a>
									</div>
								</div>

								<div class="dashbox__table-wrap dashbox__table-wrap--1">
									<table class="dashbox__table">
										<thead>
											<tr>
												<th>ID</th>
												<th>TITLE</th>
												<th>CATEGORY</th>
												<th>RATING</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>
													<div class="dashbox__table-text dashbox__table-text--grey">241</div>
												</td>
												<td>
													<div class="dashbox__table-text"><a href="details.html">The Lost City</a></div>
												</td>
												<td>
													<div class="dashbox__table-text">Movie</div>
												</td>
												<td>
													<div class="dashbox__table-text dashbox__table-text--rate"><i class="ti ti-star"></i> 9.2</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- end dashbox -->

						<!-- dashbox -->
						<div class="col-12 col-xl-6">
							<div class="dashbox">
								<div class="dashbox__title">
									<h3><i class="ti ti-star-half-filled"></i> Latest reviews</h3>

									<div class="dashbox__wrap">
										<a class="dashbox__refresh" href="#"><i class="ti ti-refresh"></i></a>
										<a class="dashbox__more" href="#">View All</a>
									</div>
								</div>

								<div class="dashbox__table-wrap dashbox__table-wrap--2">
									<table class="dashbox__table">
										<thead>
											<tr>
												<th>ID</th>
												<th>ITEM</th>
												<th>AUTHOR</th>
												<th>RATING</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>
													<div class="dashbox__table-text dashbox__table-text--grey">824</div>
												</td>
												<td>
													<div class="dashbox__table-text"><a href="details.html">I Dream in Another Language</a></div>
												</td>
												<td>
													<div class="dashbox__table-text">Eliza Josceline</div>
												</td>
												<td>
													<div class="dashbox__table-text dashbox__table-text--rate"><i class="ti ti-star"></i> 7.2</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- end dashbox -->
					</div>
				</div>
    

				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab" tabindex="0">
					<div class="row">
						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<div class="item__cover">
									<img src="img/covers/cover.jpg" alt="">
									<a href="details.html" class="item__play">
										<i class="ti ti-player-play-filled"></i>
									</a>
									<span class="item__rate item__rate--green">8.4</span>
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
								</div>
								<div class="item__content">
									<h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end item -->
					</div>

					<div class="row">
						<!-- paginator -->
						<div class="col-12">
							<!-- paginator mobile -->
							<div class="paginator-mob">

								<ul class="paginator-mob__nav">
									<li>
										<a href="#">
											<i class="ti ti-chevron-left"></i>
											<span>Prev</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span>Next</span>
											<i class="ti ti-chevron-right"></i>
										</a>
									</li>
								</ul>
							</div>
							<!-- end paginator mobile -->

						</div>
						<!-- end paginator -->
					</div>
				</div>
			</div>
			<!-- end content tabs -->
		</div>
	</div>
	<!-- end content -->

	<!-- footer -->
	@include('include.frontend.footer')
	<!-- end footer -->

	<!-- JS -->
	<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('frontend/assets/js/splide.min.js')}}"></script>
	<script src="{{ asset('frontend/assets/js/slimselect.min.js')}}"></script>
	<script src="{{ asset('frontend/assets/js/smooth-scrollbar.js')}}"></script>
	<script src="{{ asset('frontend/assets/js/plyr.min.js')}}"></script>
	<script src="{{ asset('frontend/assets/js/photoswipe.min.js')}}"></script>
	<script src="{{ asset('frontend/assets/js/photoswipe-ui-default.min.js')}}"></script>
	<script src="{{ asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>
