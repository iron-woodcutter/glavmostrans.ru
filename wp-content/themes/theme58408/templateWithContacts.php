<?php
/*
Template Name: С контактами
*/
?>
<div class="row">
    <div class="container">
        <div class="row row-edge">
            <div class="col-md-12">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        do_action('cherry_entry_before');
                        do_action('cherry_entry');
                        do_action('cherry_entry_after');
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="spacer"></div>
<div class="row upper">
    <div class="cherry-box">
        <div class="inner" style="background-color: #f3f4f3;">
            <div class="container">
                <div class="row row-edge">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
                        <div class="row row-edge  ">
                            <div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
                                <div class="cherry-spacer   hidden-xs hidden-sm" style="height:60px;"></div>
                                <div class="cherry-spacer   visible-sm-block" style="height:60px;"></div>
                                <div class="cherry-spacer   visible-xs-block" style="height:60px;"></div>
                            </div>
                        </div>
                        <div class="row row-edge  ">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0 addr_link">
                                <div class="motopress-code-obj">
                                    <div class="alignleft"><span
                                            class="material-design-map103 cherry-icon   icon-118"></span></div>
                                    <h3><span style="color: #2b2f2b;">АДРЕС</span></h3>
                                    <p><a href="https://yandex.ru/maps/-/CZHAZ2iK" target="_blank">Москва. Шмитовский
                                            пр-д., вл. 39А</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
                        <div class="row row-edge  ">
                            <div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
                                <div class="cherry-spacer   hidden-xs hidden-sm" style="height:60px;"></div>
                                <div class="cherry-spacer   visible-sm-block" style="height:60px;"></div>
                                <div class="cherry-spacer   visible-xs-block" style="height:60px;"></div>
                            </div>
                        </div>
                        <div class="row row-edge  ">
                            <div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
                                <div class="motopress-code-obj">
                                    <div class="alignleft"><span
                                            class="material-design-phone370 cherry-icon   icon-569"></span></div>
                                    <h3><span style="color: #2b2f2b;">ТЕЛЕФОНЫ</span></h3>
                                    <h4 style="color: #888888;"><a href="callto:+79250922279">+7 (925) 092-22-79</a><br>
                                        <a href="callto:+74992560783">+7 (499) 256-07-83</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
                        <div class="row row-edge  ">
                            <div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
                                <div class="cherry-spacer   hidden-xs hidden-sm" style="height:60px;"></div>
                                <div class="cherry-spacer   visible-sm-block" style="height:60px;"></div>
                                <div class="cherry-spacer   visible-xs-block" style="height:60px;"></div>
                            </div>
                        </div>
                        <div class="row row-edge  ">
                            <div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
                                <div class="motopress-code-obj">
                                    <div class="alignleft"><span
                                            class="material-design-write20 cherry-icon   icon-483"></span></div>
                                    <div class="cherry-spacer   hidden-xs hidden-sm" style="height:4px;"></div>
                                    <div class="cherry-spacer   visible-sm-block" style="height:4px;"></div>
                                    <div class="cherry-spacer   visible-xs-block" style="height:4px;"></div>
                                    <h3><span style="color: #2b2f2b;">e-mail</span></h3>
                                    <div class="cherry-spacer   hidden-xs hidden-sm" style="height:5px;"></div>
                                    <div class="cherry-spacer   visible-sm-block" style="height:5px;"></div>
                                    <div class="cherry-spacer   visible-xs-block" style="height:5px;"></div>
                                    <p><a href="mailto:liza1@mail.ru">liza1@mail.ru</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="row row-edge  ">
                            <div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
                                <div class="cherry-spacer   hidden-xs hidden-sm" style="height:60px;"></div>
                                <div class="cherry-spacer   visible-sm-block" style="height:60px;"></div>
                                <div class="cherry-spacer   visible-xs-block" style="height:60px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


