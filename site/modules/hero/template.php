<div class="hero hero--align-<?php echo $module->options->position->value() ?>"
     <?php if($module->image->value()): ?>style="background-image:url(<?php echo $module->image->toFile()->url() ?>);"<?php endif; ?>>
  <h1><?php echo $module->title->value() ?></h1>
  <?php if(!$module->subtitle->empty()): ?>
    <?php echo $module->subtitle->kirbytext() ?>
  <?php endif; ?>
  <?php if(isset($module->content)): ?>
    <?php echo $module->content->modules() ?>
  <?php endif; ?>
</div>