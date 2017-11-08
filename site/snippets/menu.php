<nav role="navigation">

  <ul class="menu cf">
    <?php $index = 1; ?>
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a class="menu-link <?php e($p->isOpen(), ' active') ?>" href="<?php echo $p->url() ?>" ><?php echo $p->title()->html() ?> <?php if($index != count($pages->visible())):?>&mdash;<?php endif; ?></a>

      <?php /*if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif */ ?>

    </li>
     <?php $index++; ?>
    <?php endforeach ?>
  </ul>

</nav>
