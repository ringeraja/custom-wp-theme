    <footer class="" style="background-color:#FFFBF0;">
        <div class="container text-center">
            <div class="row row-cols-2">
                <div class="col">
                    <?php
                    if(function_exists('the_custom_logo')){
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                        }
                    ?>
                    <img class="img-fluid " src="<?php echo $logo[0] ?>" alt="logo" >        
                </div>
                <div class="col">
                <?php
                    dynamic_sidebar('footer-1');
                ?>
                </div>
            </div>
        </div>
		<div class="container">
            <p class="copyright"><a href="#">Foooter content </a></p>
        </div>
          
    </footer>
   
   </div>

<?php
    wp_footer();
?>
    <!-- theme is compatible with -->
	<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
	<!-- <script src="js/main.js"></script> -->
    
</body>
</html> 