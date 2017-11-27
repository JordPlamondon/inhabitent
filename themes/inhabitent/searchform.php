<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<span class="icon-search" aria-hidden="true">
		<i id="search-button" class="fa fa-search"></i>
		</span>
		<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		<label>
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
			<!-- <button class="search-submit"> -->
		</label>
	</fieldset>
</form>
