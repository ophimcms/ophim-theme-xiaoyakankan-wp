<?php

function add_theme_widgets() {
    $activate = array(
        'widget-footer' => array(
            'wg_footer-0',
        )
    );
    update_option('widget_wg_footer', array(
        0 => array('footer' => '
<footer id="footer">
    <div class="container">
        <div class="sub-container">
            <div class="row">
                <div class="col-md-3 ft-l">
                    <div class="z-license-logo clearfix"><span class="z-logo" style="width:250px"></span>
                    </div>
                </div>
                <div class="col-md-8 ft-r">
                    <p>
                        <strong style="color:orange">Phimmoii</strong> miễn phí chất lượng siêu nét với phụ đề tiếng Việt - thuyết minh - lồng tiếng tại BluPhim. Thư viện phim đa dạng, đặc sắc, cập nhật liên tục với những bộ phim hay nhất - mới nhất.
                    </p>
                    <p>
                        Truy cập  <strong style="color:orange">phimmoii.pro</strong>  ngay để trải nghiệm giao diện trực quan, tiện lợi và tốc độ tải nhanh, mang đến những trải nghiệm tuyệt vời cho người dùng.
                    </p>
                </div>

            </div>
        </div>
    </div>
</footer>')
    ));
    update_option('sidebars_widgets',  $activate);

}

add_action('after_switch_theme', 'add_theme_widgets', 10, 2);