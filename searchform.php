<form role="search" method="get" id="searchform" class="searchform form-inline" action="<?php echo home_url(); ?>">
				<div>
					<label class="screen-reader-text" style="left: -99999px; position: absolute;" for="s">Search for:</label>
					<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
					<input type="submit" id="searchsubmit" value="Search" class="btn btn-outline-light my-2 my-sm-0">
				</div>
			</form>