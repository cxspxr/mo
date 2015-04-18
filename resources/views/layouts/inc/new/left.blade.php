<div class="content">
	<div class="left">
		<div class="new">
			<div class="new-header">
				<div class="new-logo">
					<img src="http://0.gravatar.com/avatar/2712e2b275690a66493bc3c27bac2ef6?s=70&d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D70&r=G" alt="">
				</div>
				<div class="new-title">FULLY RESPONSIVE LAYOUT</div>
				<div class="new-data">
					<div class="new-date">
						<div class="date">
						<i class="fa fa-clock-o"></i>December 20, 2015</div>
					</div>
					<div class="new-features">
						<div class="features">
						<i class="fa fa-folder-open-o"></i>Features</div>
					</div>
					<div class="new-comments">
						<div class="comments">
						<i class="fa fa-comment-o"></i>3 Comments</div>
					</div>
				</div>
			</div>
			<div class="new-body">
				<div class="new-image">
					<img src="http://demo.mhthemes.com/cicero/wp-content/uploads/sites/3/2014/12/Bus-610x343.jpg" alt="">
				</div>
				<div class="new-description">
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita no sea takimata sanctus est Lorem ipsum dolor sit amet. Learn more about MH Cicero WordPress Theme.
					<div class="new-sub">
						<div class="sub-title">This is a custom Headline</div>
						<div class="sub-image">
							<img src="http://www.mhthemes.com/themes/files/2014/12/Responsive_MH_Cicero.png" alt="">
						</div>
						<div class="sub-description">
							At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
						</div>
					</div>
					<div class="new-sub">
						<div class="sub-title">This is another Headline</div>
						<div class="sub-description">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat augue duis dolore te feugait nulla facilisi. Here you can view more WordPress themes by MH Themes.</div>
					</div>
				</div>
			</div>
			<div class="new-footer">
				<div class="nav">
					<div class="prev-outer">
						<div class="logo"></div>
						<div class="prev">PREVIOUS POST</div>
					</div>
					<div class="next-outer">
						<div class="logo"></div>
						<div class="next">NEXT POST</div>
					</div>
				</div>
				<div class="spacer"></div>
			</div>
		</div>
		<div class="about">
			<div class="about-logo">
				<img src="http://0.gravatar.com/avatar/2712e2b275690a66493bc3c27bac2ef6?s=100&d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D100&r=G" alt="">
			</div>
			<div class="about-right">
				<div class="about-title">About MH Themes</div>
				<div class="about-description">MH Themes is specialized in high quality Premium WordPress Themes for online magazines, news websites, professional blogs and other editorial related projects.</div>
			</div>
			<div class="spacer"></div>
		</div>
		<div class="related">
			<div class="related-title">RELATED ARTICLES</div>
			<div class="related-articles">

				@for($i=0; $i<4; $i++)
					<div class="article">
						<div class="article-logo">
							<img src="http://demo.mhthemes.com/cicero/wp-content/uploads/sites/3/2014/12/Grumpy_Cat-70x70.jpg" alt="">
						</div>
						<div class="article-name">Social Functionality</div>
					</div>
				@endfor

			</div>
		</div>
		<div class="comments-outer">
			<div class="comments-title">3 Comments</div>
			<div class="comments">
				@for($i=0; $i<4; $i++)
					<div class="comment">
						<div class="comment-author">
							<img src="http://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=70" alt="">
						</div>
						<div class="comment-right">
							<div class="comment-right-data">
								<div class="comment-name">Harper</div>
								<div class="comment-date">December 22, 2015 at 5:34 pm</div>
							</div>
							<div class="comment-right-description">
								At vero eos et accusam et justo duo dolores et ea rebum. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
							</div>
							<div class="comment-right-reply">
								REPLY
							</div>
						</div>
					</div>
					<div class="own-comment">
						<div class="own-comment-tip">Your email address will not be published.</div>
						<input type="text" class="name" placeholder="Enter Name">
						<input type="text" class="email" placeholder = "Enter Email">
						<input type="text" class="url" placeholder = "Enter URL">
						<textarea name="" id="" cols="30" rows="10" class="comment" placeholder ="Leave Message Here"></textarea>
						<button class="send">Send Comment</button>
					</div>
				@endfor

			</div>
		</div>
	</div>
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
			<div class="widget-content">

				@for($i=0; $i<5; $i++)
					<div class="widget-post">
						<div class="widget-image">
							<img src="http://demo.mhthemes.com/cicero/wp-content/uploads/sites/3/2014/12/Band-70x70.jpg" alt="">
						</div>
						<div class="widget-data">
							<div class="latest-data-title">MULTI-LEVEL THREADED COMMENTS</div>
							<div class="latest-data-date">MAY 20, 2015</div>
						</div>
					</div>
				@endfor

			</div>
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

				@for($i=0; $i<4; $i++)
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

	
</div>