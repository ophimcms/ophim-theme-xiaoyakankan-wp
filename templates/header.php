<div class="gm-head">
    <div class="wrap">
        <a class="logo tw" href="/" title="">
            <?php op_the_logo('width:50px') ?>
        </a>
        <div class="nav">
            <ul>
                <?php
                $menu_items = op_get_menu_array('primary-menu');
                foreach ($menu_items as $key => $item) : ?>
                    <?php if (!empty($item['children'])) { ?>
                        <li data-meta="gm-meta-<?= $key ?>" class="has-meta"><a href="<?= $item['url'] ?>"><i
                                        class="t10"></i><span><?= $item['title'] ?></span></a></li>
                    <?php } else { ?>
                        <li><a href="<?= $item['url'] ?>"><i class="t11"></i><span><?= $item['title'] ?></span></a></li>
                    <?php } ?>
                <?php endforeach; ?>

            </ul>
        </div>
        <div class="search">
            <form action="/">
                <input name="s" type="text" id="navbar-search" placeholder="Tìm kiếm"
                       value="<?php echo "$s"; ?>" autocomplete="off">
                <button type="submit"></button>
            </form>
        </div>
        <div id="btn-nav" class="btn-nav"></div>
        <div id="btn-search" class="btn-search"></div>
    </div>
</div>

<div id="pop-nav" class="mi-pop-nav">
    <ul>
        <?php
        $menu_items = op_get_menu_array('primary-menu');
        foreach ($menu_items as $key => $item) : ?>
            <?php if (!empty($item['children'])) { ?>
                <li data-meta="gm-meta-<?= $key ?>" class="has-meta"><a href="<?= $item['url'] ?>"><i
                                class="t10"></i><span><?= $item['title'] ?></span></a></li>
            <?php } else { ?>
                <li><a href="<?= $item['url'] ?>"><i class="t11"></i><span><?= $item['title'] ?></span></a></li>
            <?php } ?>
        <?php endforeach; ?>
    </ul>
</div>

<div id="pop-search" class="mi-pop-search">
    <div class="wrap">
        <form action="/" target="">
            <input name="s" type="text" placeholder="Tìm kiếm" value="<?php echo "$s"; ?>">
            <button type="submit"></button>
        </form>
    </div>
</div>

<div class="gm-main">
    <?php
    $menu_items = op_get_menu_array('primary-menu');
    foreach ($menu_items as $key => $item) : ?>
        <?php if (empty($item['children'])) { ?>
        <?php } else { ?>
            <div class="gm-meta gm-meta-item none" id="gm-meta-<?= $key ?>">
                <a href="<?= $item['url'] ?>" class="on"><?= $item['title'] ?></a>
                <?php foreach ($item['children'] as $k => $child): ?>
                    <a href="<?= $child['url'] ?>"><?= $child['title'] ?></a>
                <?php endforeach; ?>
            </div>
        <?php } ?>
    <?php endforeach; ?>

</div>

<script>
    document.querySelectorAll('.has-meta').forEach((li) => {
        li.addEventListener('click', function (event) {
            event.preventDefault();
            const meta = this.dataset.meta;
            var metaElm = document.getElementById(meta);
            var isShow = metaElm.classList.contains('none');
            document.querySelectorAll('.gm-meta-item').forEach(function (item) {
                item.classList.add('none');
            });
            if (isShow) {
                metaElm.classList.remove('none');
            } else {
                metaElm.classList.add('none');
            }
        });
    });
</script>