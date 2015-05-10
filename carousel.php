<div id="myCarousel" class="carousel slide">
  <div class='carousel-inner'>

<?php
  $recent_posts = wp_get_recent_posts(array('numberposts' => 7));
  $has_active = false;
  foreach($recent_posts as $recent) {
    $recent_id = $recent["ID"];
    if (has_post_thumbnail($recent_id) && $recent["post_status"] == "publish") {
      // Necessary to start.
      if ($has_active) {
        echo "<div class='item'>";
      } else {
        echo "<div class='item active'>";
        $has_active = true;
      }

      echo "<a href='" . get_permalink($recent_id) . "'>";
      // Thumbnails.
      echo get_the_post_thumbnail($recent_id, 'large', array('class' => 'center'));

      // Description.
      echo "<div class='carousel-caption'>";
      echo "<h4>" . $recent["post_title"] . "</h4>";
      echo "<p>" . wp_trim_words($recent["post_content"], 25) . "</p>";
      echo "</div>";
      echo "</a>";
      echo "</div>";
    }
  }
?>

</div>

<!-- Carousel nav -->
<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>

</div>
