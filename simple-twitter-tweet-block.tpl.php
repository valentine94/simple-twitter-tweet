<?php
/**
 * @file
 * Template for Simple Twitter tweet block.
 */
?>
<?php if (!empty($url)) : ?>
<div class="simple-twitter-tweet">
  <a href="<?php print $url; ?>" target="_blank">
    <i class="btn-icon"></i>
    <span class="btn-text">Tweet</span>
  </a>
</div>
<?php endif; ?>
