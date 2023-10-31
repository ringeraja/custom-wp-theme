<div class="mb-5">
				    <div class="media">
					    <img class="" src="<?php the_post_thumbnail_url('thumbnail');?>" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
						    <div class="meta mb-1"><span class="date"><?php the_date();?></span>
						    <div class="">
                                <a href="<?php the_permalink();?>"> 
                                    <?php 
                                        // the_content();
                                            the_excerpt();
                                        ?>  
                                </a>
                            </div>
						    <a class="more-link" href="post.html">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div>

</div>