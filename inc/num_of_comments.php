<?php
	// Based on the number of comments, print using a different badge color.
	$num_of_comments = get_comments_number();
	$badge_types = array("success", "info", "warning", "important");
	$badge_class = "";
	
	if ($num_of_comments == 0) {
		$badge_class = "badge-" . $badge_types[0];
	} else if ($num_of_comments > 0 && $num_of_comments <= 2) {
		$badge_class = "badge-" . $badge_types[1];
	} else if ($num_of_comments > 2 && $num_of_comments <= 5) {
		$badge_class = "badge-" . $badge_types[2];
	} else {
		$badge_class = "badge-" . $badge_types[3];
	}
	
?>

<span class="badge <?php echo $badge_class ?>">
	<?php
		if ($num_of_comments == 1) {
			echo $num_of_comments . " comentário";
		} else {
			echo $num_of_comments . " comentários";
		}
	?>
</span>
