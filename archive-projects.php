

<h1>All projectss</h1

<?php
if(have_posts()) : while(have_posts()) : the_post();
    echo "<h1>";
    the_title();
    echo "</h1>";
    echo '<div>';
    the_content();
    // get_the_term_list();
    echo '</div>';
 


endwhile; endif;

?>