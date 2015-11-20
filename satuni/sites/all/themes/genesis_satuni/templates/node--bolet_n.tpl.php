<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="node-inner clearfix">

    <?php print render($title_prefix); ?>
    <?php if ($teaser): ?>
      <h2 class="node-title"<?php print $title_attributes; ?>>
        <a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a>
      </h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php print $user_picture; ?>

        <div class="node-date-author">
        <?php
                print format_date($created, 'short') . ' / ' . $name . ' / &nbsp;';
        ?>
        </div>
        <?php
                if ($content['field_boletin_etiquetas']):
                        print render($content['field_boletin_etiquetas']);
                endif;
        ?>
        <div class="full-view-node-teaser">
        <?php
                print render(text_summary($node->body['und'][0]['safe_value'],NULL,300));
        ?>
        </div>

    <div class="node-content"<?php print $content_attributes; ?>>
      <?php
        // Hide comments and links and render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content);
      ?>
    </div>

    <?php if ($content['links']): ?>
      <div class="node-links">
        <?php print render($content['links']); ?>
      </div>
    <?php endif; ?>

    <?php print render($content['comments']); ?>

  </div>
</div>

