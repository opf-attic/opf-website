<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">

<!--
<?php if ($page == 0): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>
-->
  <div class="content clear-block">

  <div class="member-logo" style="text-align: center; margin-bottom: 1em;"><a href="<?php print $field_link[0]['url'] ?>"><?php print $field_logo[0]['view'] ?></a></div>

<?php
 print $node->content['body']['#value'];
?>

<?php
  if ($terms) {
    print '<div style="float:left;">'. $terms .'</div>';
  }
?>

<?php
  if ($links) {
    print '<div class="node-links">'. $links .'</div>';
  }
?>

  </div>

</div>
