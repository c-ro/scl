<?php if (diarjolite_template('span') == "col-md-8" ) :  ?>

    <div class="col-md-4">
        
        <div class="row">
    
            <div id="sidebar" class="post-container col-md-12">
                
                <div class="sidebar-box">

					<?php if ( is_active_sidebar('side-sidebar-area')) { 
                    
                        dynamic_sidebar('side-sidebar-area');
                    
					}  ?>
        
                    <?php dynamic_sidebar(diarjolite_postmeta('diarjolite_sidebar')) ?>
                
                </div>
                
            </div>
    
        </div>
            
    </div>

<?php endif; ?>