<?php

function add_theme_widgets() {
    $activate = array(
        'widget-footer' => array(
            'wg_footer-0',
        )
    );
    update_option('widget_wg_footer', array(
        0 => array('footer' => '
<footer class="gm-foot">
<p>
    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mọi khiếu nại về bản quyền vui lòng gửi thư về địa chỉ email bên dưới, chúng tôi sẽ giải quyết sớm, xin cảm ơn.</font></font><br></p>
</footer>')
    ));
    update_option('sidebars_widgets',  $activate);

}

add_action('after_switch_theme', 'add_theme_widgets', 10, 2);