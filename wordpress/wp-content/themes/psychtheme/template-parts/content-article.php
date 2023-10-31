<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <span class="date">Updated on <?php the_date();?></span>
            <?php
    
                the_tags('',' | ','');
            ?>
            <span class="tag"><i class='fa fa-tag'></i> tag</span>
            <span class="tag"><i class='fa fa-tag'></i> category</span>
            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> 3 comments / <?php comments_number(); ?></a></span>
        </div>
    </header>
    <?php
        dynamic_sidebar('sidebar-1');
    ?>
    
<?php 
the_content();
?>
</div>