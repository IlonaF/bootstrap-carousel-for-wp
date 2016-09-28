<?php
	$projects_images 	= get_post_meta( $post->ID, '_sbw_project_images', true);
?>  
<div id="projects" class="section">
    <div class="container">
        <?php if( !empty($projects_images) ): ?>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel2" class="carousel slide">
                        <div class="carousel-inner">
                            <?php
                            $i = 1;
                            foreach( $projects_images as $pi => $value ):
                                if( $i == 1):?>
                                    <div class="item active">
                                        <div class="row">
                                <?php endif;?>
                                              <div class="col-md-4 col-sm-4 col-xs-4">
                                                  <a href="<?php echo $value; ?>">
                                                      <img src="<?php echo $value; ?>" alt="Test Monitoring And Logging">
                                                  </a>
                                              </div>
                                              <?php
                                              if( $i %3 == 0 ): ?>
                                          </div>
                                      </div>
                                      <div class="item">
                                          <div class="row">
                                              <?php endif;
                                $i++;
                            endforeach;?>
                                          </div>
                                      </div>
                        </div><!-- end .carousel-inner -->
                        <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><i class="icon-arrow-l"></i></a>
                        <a class="right carousel-control" href="#myCarousel2" data-slide="next"><i class="icon-arrow-r"></i></a>
                    </div><!-- end .carousel -->
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
