<?php get_header(); ?>
<section id="about" class="s_about bg_light">
    <div class="section_header">
        <h2><?php echo get_cat_name(2); ?></h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php echo category_description(2); ?></div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">

            <div class="row">
                <?php if ( have_posts() ) : query_posts('p=7');
                    while (have_posts()) : the_post(); ?>
                <div class="col-md-4 col-md-push-4 animation_1">
                    <h3>Фото</h3>
                    <div class="person">
                        <?php if( has_post_thumbnail() ): ?>
                        <a class="popup" href="<?php
                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                        echo $large_image_url[0];
                        ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail(array(220, 220)); ?>
                            </a>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-md-4 col-md-pull-4 animation_2">
                    <h3> <?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
                    <?php endwhile; endif; wp_reset_query(); ?>

                <?php if ( have_posts() ) : query_posts('p=11');
                    while (have_posts()) : the_post(); ?>
                <div class="col-md-4 animation_3 personal_last_block">
                    <h3><?php the_title(); ?></h3>
                    <h2 class="personal_header"><?php echo get_bloginfo('name'); ?></h2>
                    <?php the_content(); ?>
                    <div class="social_wrap">
                        <ul>
                            <li><a href="https://vk.com/jd_2312" target="blank"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                            <li><a href="mailto:gulieva.gunka@gmail.com" target="blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.behance.net/gulievagunc7dc" target="blank"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                    <?php endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>
<section id="resume" class="s_resume">
    <div class="section_header">
        <h2><?php echo get_cat_name(4); ?></h2>
        <div class="s_descr_wrap"><div class="s_descr"><?php echo category_description(4); ?></div></div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="resume_container">
                <div class="col-md-6 col-sm-6 left">
                    <h3><?php echo get_cat_name(7); ?></h3>
                    <div class="resume_icon"><i class="icon-basic-case"></i></div>

                    <?php if ( have_posts() ) : query_posts('cat=7');
                        while (have_posts()) : the_post(); ?>
                            <div class="resume_item">
                                <div class="year"><?php echo get_post_meta($post->ID, 'resume_years', true); ?></div>
                                <div class="resume_discription"><?php echo get_post_meta($post->ID, 'resume_place', true); ?><strong><?php the_title(); ?></strong></div>
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; endif; wp_reset_query(); ?>
                </div>

                <div class="col-md-6 col-sm-6 right">
                    <h3><?php echo get_cat_name(8); ?></h3>
                    <div class="resume_icon"><i class="icon-basic-book-pen"></i></div>
                    <?php if ( have_posts() ) : query_posts('cat=8');
                        while (have_posts()) : the_post(); ?>
                            <div class="resume_item">
                                <div class="year"><?php echo get_post_meta($post->ID, 'resume_years', true); ?></div>
                                <div class="resume_discription"><?php echo get_post_meta($post->ID, 'resume_place', true); ?><strong><?php the_title(); ?></strong></div>
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; endif; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="s_portfolio bg_dark">
    <div class="section_header">
        <h2><?php echo get_cat_name(9); ?></h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php echo category_description(9); ?></div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
                <div class="filter_div controls">
                    <ul>
                        <li class="filter active" data-filter="all">Все работы</li>
                        <li class="filter" data-filter=".sites">Сайты</li>
                        <li class="filter" data-filter=".logo">Логотипы</li>
                    </ul>
                </div>
                <div id="portfolio_grid">

                    <?php if ( have_posts() ) : query_posts('cat=9');
                        while (have_posts()) : the_post(); ?>

                            <div class="mix col-md-3 col-sm-6 col-xs-12 portfolio_item<?php
                            $tags = wp_get_post_tags($post->ID);
                            if ($tags) {
                                foreach($tags as $tag) {
                                    echo ' '. $tag->name;
                                }
                            }
                            ?> ">
                                <?php the_post_thumbnail(array(400, 300)); ?>
                                <div class="port_item_cont">
                                    <h3> <?php the_title(); ?></h3>
                                    <?php the_excerpt(); ?>
                                    <button class="popup" a href="<?php
                                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                                    echo $large_image_url[0];
                                    ?>">Посмотреть</button>
                                </div>
                            </div>
                        <?php endwhile; endif; wp_reset_query(); ?>

                    </div>
                </div>
            </div>
        </div>
</section>
<section id="contacts" class="s_contacts bg_light">
    <div class="section_header">
        <h2>Контакты</h2>
        <div class="s_descr_wrap">
            <div class="s_descr">оставьте ваше сообщение</div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="contact_box">
                        <div class="contact_icons icon-basic-geolocalize-01">
                            <h3>Адрес:</h3>
                            <p>г. Санкт-Петербург</p>
                        </div>
                    </div>
                    <div class="contact_box">
                        <div class="contact_icons icon-basic-smartphone">
                            <h3>Телефон:</h3>
                            <p>+7 911 913-84-73</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <form action="https://formspree.io/gulieva.gunka@gmail.com" class="main_form" target="_blank" method="POST">
                        <label class="form-group">
                            <span class="star">*</span>Ваше имя:
                            <input type="text" name="name" placeholder="Ваше имя" data-validation-required-message=
                            "Вы не ввели имя!" required />
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            <span class="star">*</span>Ваш E-mail:
                            <input type="email" name="email" placeholder="Ваш E-mail"  data-validation-required-message=
                            "Вы НЕКОРРЕКТНО указали E-mail" required />
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            <span class="star">*</span>Вашe сообщение:
                            <textarea name="message" placeholder="Вашe сообщение"data-validation-required-message="Вы не ввели сообщение" required></textarea>
                            <span class="help-block text-danger"></span>
                        </label>
                        <button>Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>