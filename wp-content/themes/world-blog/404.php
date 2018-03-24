 <?php get_header(); ?>		
		
		<div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3><?php esc_html_e( '404', 'world-blog' ); ?></h3> 
                    </div>
                </div>
            </div>
        </div>
		
		<div class="container">
		    <div class="row">
		        <div class="text-center col-md-12">
		           <div class="message">
		             <h1><?php esc_html_e( 'THIS PAGE NOT FOUND', 'world-blog' ); ?></h1>
				     <p><?php esc_html_e( 'Sorry this page can not be found. If you are having trouble with the page you are looking for, please contact your administrator. Go back to the homepage below ', 'world-blog' ); ?></p>
				     <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn"><?php esc_html_e( 'HOME RETURN', 'world-blog' ); ?></a>			  
				  </div> 
		        </div>
		    </div>
		</div>
		
<?php get_footer(); ?>		
		