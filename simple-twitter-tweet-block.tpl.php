<?php
/**
 * @file
 * Template for Simple Twitter tweet block.
 */
?>
<?php if (!empty($url) && !empty($text)) : ?>
<div class="simple-twitter-tweet">
  <a href="https://twitter.com/intent/tweet?url=<?php print $url; ?>&amp;text=<?php print $text; ?>" target="_blank">
    <i class="btn-icon"></i>
    <span class="btn-text">Tweet</span>
  </a>
</div>
<?php endif; ?>
