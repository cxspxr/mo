<div class="right">
	<div class="search widget">
		<input type="text" class="search-input">
		<div class="search-button">SEARCH</div>
	</div>
	<div class="about widget">
		<div class="widget-title">ABOUT ME</div>
		<div class="about-logo">
			<img src="http://0.gravatar.com/avatar/2712e2b275690a66493bc3c27bac2ef6?s=150&d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D150&r=G" alt="">
		</div>
		<div class="about-description">
			MH Themes is specialized in high quality Premium WordPress Themes for online magazines, news websites, professional blogs and other editorial related projects.
		</div>
	</div>
	{{-- <div class="follow widget">
		<div class="widget-title">FOLLOW ON FACEBOOK</div>
	</div> --}}
	<div class="popular widget">
		<div class="widget-title">POPULAR POSTS</div>
		<div class="widget-content">

			@for($i=0; $i<5; $i++)
				<div class="widget-post">
					<div class="widget-image">
						<img src="http://demo.mhthemes.com/cicero/wp-content/uploads/sites/3/2014/12/Band-70x70.jpg" alt="">
					</div>
					<div class="widget-data">
						<div class="popular-data-title">MULTI-LEVEL THREADED COMMENTS</div>
						<div class="popular-data-date">MAY 20, 2015</div>
					</div>
				</div>
			@endfor

		</div>
	</div>
	<div class="latest widget">
		<div class="widget-title">LATEST POSTS</div>

		@for($i=0; $i<5; $i++)
			<div class="widget-content">
				<div class="widget-post">
					<div class="widget-image">
						<img src="http://demo.mhthemes.com/cicero/wp-content/uploads/sites/3/2014/12/Band-70x70.jpg" alt="">
					</div>
					<div class="widget-data">
						<div class="latest-data-title">MULTI-LEVEL THREADED COMMENTS</div>
						<div class="latest-data-date">MAY 20, 2015</div>
					</div>
				</div>
			</div>
		@endfor

	</div>
	{{-- <div class="topics widget">
		<div class="widget-title">TOPICS</div>
	</div>
	<div class="authors widget">
		<div class="widget-title">AUTHORS</div>
	</div> --}}
	<div class="comments widget">
		<div class="widget-title">RECENT COMMENTS</div>

		<div class="widget-content">

			@for($i=0; $i<3; $i++)
				<div class="widget-post">
					<div class="widget-image">
						<img src="http://demo.mhthemes.com/cicero/wp-content/uploads/sites/3/2014/12/Band-70x70.jpg" alt="">
					</div>
					<div class="widget-data">
						<div class="comments-data-title">Brooklyn on</div>
						<div class="comments-data-post">TRANSLATION READY</div>
					</div>
				</div>
			@endfor

		</div>
	</div>
</div>