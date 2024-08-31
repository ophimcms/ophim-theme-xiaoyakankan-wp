<div class="gm-head">
    <div class="wrap">
        <a class="logo tw" href="/" title="">   <?php op_the_logo('width:50px') ?></a>
        <div class="nav">
            <ul>
                <?php
                $menu_items = op_get_menu_array('primary-menu');
                foreach ($menu_items as $key => $item) : ?>
                    <?php if (empty($item['children'])) { ?>
                        <li><a href="<?= $item['url'] ?>"><i class="t10"></i><span><?= $item['title'] ?></span></a></li>
                    <?php } else { ?>
                        <li><a href="<?= $item['url'] ?>"><i class="t10"></i><span><?= $item['title'] ?></span></a></li>
                    <?php } ?>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="search">
            <form action="/">
                <input name="s" type="text" placeholder="Tìm kiếm" value="<?php echo "$s"; ?>" autocomplete="off">
                <button type="submit"></button>
            </form>
        </div>
        <div id="btn-nav" class="btn-nav"></div>
        <div id="btn-search" class="btn-search"></div>
    </div>
</div>