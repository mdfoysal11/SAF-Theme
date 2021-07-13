<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-8">
			<div class="pagination">
				<?php the_posts_pagination( 

				 array(
				 	"screen_reader_text" =>" ",
				 	"prev_text" => __("latest posts","saf"),
				 	"next_text" => __("old posts","saf"),


				)

				 )?>
			</div>
		</div>

	</div>

</div>