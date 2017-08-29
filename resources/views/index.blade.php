@extends('layouts.website')

@section('content')
<div class="body home">
				<div>
					<div class="featured" height="100" width="100">
						<img class="img-responsive" src="uploads/{{$image}}" alt="">
						<div class="featured-text">
							<h2>We Are The <br> Champions</h2>
							<p>
								Aliquam at neque diam. Nulla facilisi. Donec cursus lacus id urna mattis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</p>
						</div>
					</div>
					<div>


	<div>
		<h3>Some Memories..</h3>
		<!-- <span><a href="videos.html">View More Videos</a></span> -->
		<ul>
			<li>
				<img src="images/video1.jpg" alt="">
				<h4>Proin pellentesque convallis sapien a congue.</h4>
				<p>
					Aliquam at neque diam. Nulla facilisi. Donec cursus lacus id urna mattis vestibulum.
				</p>
			</li>
			<li>
				<img src="images/video2.jpg" alt="">
				<h4>Lorem ipsum consectetur adipiscing elit.</h4>
				<p>
					Donec cursus lacus id urna mattis vestibulum. Turpis ac malesuada aliquet, est tellus blandit tellus, eu dignissim arcu diam non orci.
				</p>
			</li>
			<li>
				<img src="images/video3.jpg" alt="">
				<h4>Donec cursus lacus id urna mattis vestibulum.</h4>
				<p>
					Fusce sagittis, turpis ac malesuada aliquet, est tellus blandit tellus, eu dignissim arcu diam non orci.
				</p>
			</li>
		</ul>
	</div>



						<div>
							<h3>More..</h3>
							<!-- <span><a href="news">View More Featured</a></span> -->
							<ul>
								<li>
									<img src="images/featured1.jpg" alt="">
									<h4>Proin pellentesque convallis sapien a congue.</h4>
									<p>
										Aliquam at neque diam. Nulla facilisi. Donec cursus lacus id urna mattis vestibulum.
									</p>
								</li>
								<li>
									<img src="images/featured2.jpg" alt="">
									<h4>Lorem ipsum consectetur adipiscing elit.</h4>
									<p>
										Donec cursus lacus id urna mattis vestibulum. Turpis ac malesuada aliquet, est tellus blandit tellus, eu dignissim arcu diam non orci.
									</p>
								</li>
								<li>
									<img src="images/featured3.jpg" alt="">
									<h4>Donec cursus lacus id urna mattis vestibulum.</h4>
									<p>
										Fusce sagittis, turpis ac malesuada aliquet, est tellus blandit tellus, eu dignissim arcu diam non orci.
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
        @endsection
