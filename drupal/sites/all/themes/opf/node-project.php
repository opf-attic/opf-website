<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">

<?php if ($page == 0): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

<?php if ($submitted || $terms): ?>
  <div class="meta">
  <?php if ($submitted): ?>
    <div class="submitted"><?php print $submitted ?></div>
  <?php endif; ?>

  <?php if ($terms): ?>
    <div class="terms"><?php print $terms ?></div>
  <?php endif;?>
  </div>
<?php endif; ?>

  <div class="content clear-block">

  <div style="float:right"><a href="<?php print $field_link[0]['url'] ?>"><?php print $field_logo[0]['view'] ?></a></div>

<?php
 print $node->content['body']['#value'];
?>

<p>
<b>Date:</b>
<?php
 print content_format('field_date', $field_date[0]);
?>
</p>
<p>
<?php
 print content_format('field_location', $field_location[0]);
?>
</p>
<p>
<b>Link:</b>
<?php
 print content_format('field_link', $field_link[0]);
?>
</p>

  </div>

<?php
  if ($links) {
    print '<div class="node-links">'. $links .'</div>';
  }
?>

</div>
