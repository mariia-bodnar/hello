<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HEWO - Modern Newspaper/Publisher Template</title>
    <link rel="stylesheet" href="./assets/ws__main.css">
    <link rel="stylesheet" href="./style/style.css" />
    <link rel="stylesheet" type="text/css" href="./slick-master/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick-master/slick/slick-theme.css">
    <link rel="" href="./assets/font-awersome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" src="./assets/ws__main.css"> -->
    <script></script>
</head>

<?php $title = "HELLO WORLD"?>
<body>
<?php require_once('__include/left_menu.php') ?>
    <div class="container">
        <?php require_once('__include/header.php') ?>
        <!-- section 1 -->
        <section class="title___menu">
            <h1>
                <a class="main_title" href="./index.html"><?= $title?></a>
            </h1>
            <p>
                <img src="./style/images/patern-1.png" />
                NEWSPAPER/ MAGAZINE/ PUBLISHER
                <img src="./style/images/patern-1.png" />
            </p>
            <hr class="linear" />
            <ul class="menu">
                <li class="menu_list">
                    <div id="menu_list_1">
                        <a class="inline"><span class="menu_dot" id="dot_1"></span>HOME</a>
                        <div class="column_menu" id="column_menu_1">
                            <div class="inner-wrapper">
                                <a class="open_menu" href="">Default</a>
                                <a class="open_menu" href="">Grid</a>
                                <a class="open_menu" href="">Big slide</a>
                                <a class="open_menu" href="">Carausel</a>
                                <a class="open_menu" href="">Boxed layaut</a>
                                <a class="open_menu" href="">RTL layaut</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu_list">
                    <div id="menu_list_2">
                        <a class="inline"><span class="menu_dot" id="dot_2"></span>LAYOUT</a>
                        <div class="column_menu" id="column_menu_2">
                            <div class="inner-wrapper">
                                <a class="open_menu" id="secondary_menu_1" href="">Category</a>
                                <div class="secondary_menu" id="secondary_1">
                                    <div class="inner-wrapper__">
                                        <a class="open_menu" href="">Category</a>
                                        <a class="open_menu" href="">Posts</a>
                                        <a class="open_menu" href="">Pages</a>
                                    </div>
                                </div>
                                <a class="open_menu" id="secondary_menu_2" href="">Posts</a>
                                <div class="secondary_menu" id="secondary_2">
                                    <div class="inner-wrapper__">
                                        <a class="open_menu" href="">Category</a>
                                        <a class="open_menu" href="">Posts</a>
                                        <a class="open_menu" href="">Pages</a>
                                    </div>
                                </div>
                                <a class="open_menu" id="secondary_menu_3" href="">Pages</a>
                                <div class="secondary_menu" id="secondary_3">
                                    <div class="inner-wrapper__">
                                        <a class="open_menu" href="">Category</a>
                                        <a class="open_menu" href="">Posts</a>
                                        <a class="open_menu" href="">Pages</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu_list">
                    <a class="inline">NEWS</a>
                </li>
                <li class="menu_list"><a></a>ECONOMY</li>
                <li class="menu_list">
                    <div id="menu_list_3">
                        <a class="inline"><span class="menu_dot" id="dot_3"></span>ENTERTAIMENT</a>
                        <div class="column_menu" id="column_menu_3">
                            <div class="inner-wrapper">
                                <a class="open_menu" href="">Default</a>
                                <a class="open_menu" href="">Grid</a>
                                <a class="open_menu" href="">Big slide</a>
                                <a class="open_menu" href="">Carausel</a>
                                <a class="open_menu" href="">Boxed layaut</a>
                                <a class="open_menu" href="">RTL layaut</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu_list"><a></a>JOBS</li>
            </ul>
            <!-- menu button -->
            <div class="menu_button">
                <p>MENU</p>
                <div class="lines_menu">
                    <span class="line_menu"></span>
                    <span class="line_menu"></span>
                    <span class="line_menu"></span>
                </div>
            </div>
            <!-- menu_media -->
            <div class="display_none width" id="menu_media">
                <ul class="open_menu_m991">
                    <li class="open_menu_title">
                        <div id="home">
                            <span class="menu_title"><span>HOME</span><span>►</span></span>
                        </div>
                        <div class="display_none" id="home_menu">
                            <div class="open_menu_m991">
                                <a class="menu_title_slider" href="">Default</a>
                                <a class="menu_title_slider" href="">Grid</a>
                                <a class="menu_title_slider" href="">Big slide</a>
                                <a class="menu_title_slider" href="">Carausel</a>
                                <a class="menu_title_slider" href="">Boxed layaut</a>
                                <a class="menu_title_slider" href="">RTL layaut</a>
                            </div>
                        </div>
                    </li>
                    <li class="open_menu_title">
                        <div id="layout">
                            <a class="menu_title"><span>LAYOUT</span><span>►</span></a>
                        </div>

                    </li>
                    <div class="display_none" id="layout_menu">
                        <span class="menu_title_slider" id="category">Category<span>►</span></span>
                        <div class="display_none" id="category_menu">
                            <a class="menu_title_slider" href="">List</a>
                            <a class="menu_title_slider" href="">Grid</a>
                            <a class="menu_title_slider" href="">Masonry</a>
                            <a class="menu_title_slider" href="">Big</a>
                        </div>
                        <span class="menu_title_slider" id="posts" href="">Posts<span>►</span></span>
                        <div class="display_none" id="posts_menu">
                            <a class="menu_title_slider" href="">Default</a>
                            <a class="menu_title_slider" href="">Video</a>
                            <a class="menu_title_slider" href="">Audio</a>
                            <a class="menu_title_slider" href="">Gallery</a>
                            <a class="menu_title_slider" href="">Image</a>
                        </div>
                        <span class="menu_title_slider" id="pages" href="">Pages<span>►</span></span>
                        <div class="display_none" id="pages_menu">
                            <a class="menu_title_slider" href="">Autor</a>
                            <a class="menu_title_slider" href="">Search</a>
                            <a class="menu_title_slider" href="">404</a>
                            <a class="menu_title_slider" href="">Contact</a>
                            <a class="menu_title_slider" href="">Typography</a>
                        </div>
                    </div>
                    <li class="open_menu_title">
                        <a class="menu_title"><span class="" id="">NEWS</span></a>
                    </li>
                    <li class="open_menu_title">
                        <a class="menu_title"><span class="" id="">ECONOMY</span></a>
                    </li>
                    <li class="open_menu_title">
                        <div id="entertaiment">
                            <span class="menu_title"><span class="" id="">ENTERTAIMENT</span><span>►</span></span>
                        </div>
                        <div class="display_none" id="entertaiment_menu">
                            <div class="open_menu_m991">
                                <a class="menu_title_slider" href="">Festival</a>
                                <a class="menu_title_slider" href="">Music</a>
                                <a class="menu_title_slider" href="">Movie</a>
                                <a class="menu_title_slider" href="">Cinema</a>
                            </div>
                        </div>
                    </li>
                    <li class="open_menu_title">
                        <a class="menu_title"><span class="" id="">JOBS</span></a>
                    </li>
                </ul>
            </div>
            <hr class="linear_bold" />
        </section>
        <!-- section 2 -->
        <!-- slider -->
        <section>
            <div class="slider">
                <div class="item">
                    <figure><img src="./style/images/thumb_small_4.png" alt="img" /></figure>
                    <div class="blocks__text">
                        <a class="strong" href="/index.html">Lorem ipsum dolor sit amet</a>
                        <p class="blocks__text_span_slider">
                            <span>2 Sep, 2021</span>
                            <span>90 views</span>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <figure><img src="./style/images/thumb_small_2.png" alt="img" /></figure>
                    <div class="blocks__text">
                        <a class="strong" href="/index.html">Lorem ipsum dolor sit amet</a>
                        <p class="blocks__text_span_slider">
                            <span>2 Sep, 2021</span>
                            <span>90 views</span>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <figure><img src="./style/images/thumb_small_3.png" alt="img" /></figure>
                    <div class="blocks__text">
                        <a class="strong" href="/index.html">Lorem ipsum dolor sit amet</a>
                        <p class="blocks__text_span_slider">
                            <span>2 Sep, 2021</span>
                            <span>90 views</span>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <figure><img src="./style/images/thumb_small_1.png" alt="img" /></figure>
                    <div class="blocks__text">
                        <a class="strong" href="/index.html">Lorem ipsum dolor sit amet</a>
                        <p class="blocks__text_span_slider">
                            <span>2 Sep, 2021</span>
                            <span>90 views</span>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <figure><a><img src="./style/images/thumb_small_2.png" alt="img" /></a></figure>
                    <div class="blocks__text">
                        <a class="strong" href="/index.html">Ut enim ad minima veniam </a>
                        <p class="blocks__text_span_slider">
                            <span>28 Aug, 2021</span>
                            <span>78 views</span>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <figure><img src="./style/images/thumb_small_3.png" alt="img" /></figure>
                    <div class="blocks__text">
                        <a class="strong" href="/index.html">Quis autem vel eum iure reprerit</a>
                        <p class="blocks__text_span_slider">
                            <span>16 Aug, 2021</span>
                            <span>112 views</span>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <figure><img src="./style/images/thumb_small_1.png" alt="img" /></figure>
                    <div class="blocks__text">
                        <a class="strong" href="/index.html">At vero eos et accu samus et iusto</a>
                        <p class="blocks__text_span_slider">
                            <span>15 Jun, 2021</span>
                            <span>328 views</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- left -->
        <section>
            <div class="big_sec__3">
                <div class="left-side">
                    <div class="slider_1">
                        <div id="slide_1">
                            <figure> <img src="./images/slideshow-2.jpg"></figure>
                            <p class="tile_2"><a href="/" class="tile_2">Lorem ipsum dui sollic itudin praesent ut
                                    mollis
                                    primis
                                    eros
                                    torquent fames</a></p>
                            <div class="info_about_autor">
                                <div class="autor_block">
                                    <a href="">
                                        <img src="style/images/author-avatar.png" alt="avatar">
                                    </a>
                                    <a>
                                        <span class="strong">Steven Jobs</span>
                                    </a>
                                    <span c>23 Sep, 2021</span>
                                </div>
                                <div class="text_about_autor">
                                    <p>Is very common and rather normal for blogging beginners to be highly perplexed
                                        when
                                        it
                                        comes
                                        to selecting a theme for their blog. There are a plethora of free as well as
                                        paid
                                        options.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="slide_2">
                            <figure> <img src="./images/slideshow-3.jpg"></figure>
                            <p class="tile_2"><a href="/" class="tile_2">Lorem ipsum dui sollic itudin praesent ut
                                    mollis
                                    primis
                                    eros
                                    torquent fames</a></p>
                            <div class="info_about_autor">
                                <div class="autor_block">
                                    <a href="">
                                        <img src="style/images/author-avatar.png" alt="avatar">
                                    </a>
                                    <a>
                                        <span class="strong">Steven Jobs</span>
                                    </a>
                                    <span c>23 Sep, 2021</span>
                                </div>
                                <div class="text_about_autor">
                                    <p>Is very common and rather normal for blogging beginners to be highly perplexed
                                        when
                                        it
                                        comes
                                        to selecting a theme for their blog. There are a plethora of free as well as
                                        paid
                                        options.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="slide_3">
                            <figure> <img src="./images/slideshow-1.jpg"></figure>
                            <p class="tile_2"><a href="/" class="tile_2">Lorem ipsum dui sollic itudin praesent ut
                                    mollis
                                    primis
                                    eros
                                    torquent fames</a></p>
                            <div class="info_about_autor">
                                <div class="autor_block">
                                    <a href="">
                                        <img src="style/images/author-avatar.png" alt="avatar">
                                    </a>
                                    <a>
                                        <span class="strong">Steven Jobs</span>
                                    </a>
                                    <span c>23 Sep, 2021</span>
                                </div>
                                <div class="text_about_autor">
                                    <p>Is very common and rather normal for blogging beginners to be highly perplexed
                                        when
                                        it
                                        comes
                                        to selecting a theme for their blog. There are a plethora of free as well as
                                        paid
                                        options.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add_padding_bottom">
                        <p class="center">
                            <img src="./style/images/patern-1.png" /><img class="img_in_one"
                                src="./style/images/patern-1.png" /><img class="img_in_one"
                                src="./style/images/patern-1.png" />
                            <a href="" class="main_title_2">Recent Posts</a>
                            <img src="./style/images/patern-1.png" /><img class="img_in_one"
                                src="./style/images/patern-1.png" /><img class="img_in_one"
                                src="./style/images/patern-1.png" />
                        </p>
                    </div>
                    <div class="block__2">
                        <figure><a><img class="block_images_medium" src="./style/images/thumb_medium_1.png"
                                    alt="img" /></a>
                        </figure>
                        <div class="blocks__text_2">
                            <a class="strong" href="/index.html">Ut enim ad minima veniam </a>
                            <p class="blocks__text_a">
                                <a href="">
                                    <img src="style/images/author-avatar.png" alt="avatar">
                                </a>
                                <a>Politics, News</a>
                                <span>28 Aug, 2021</span>
                            </p>
                        </div>
                    </div>
                    <div class="block__2">
                        <figure><a><img class="block_images_medium" src="./style/images/thumb_medium_2.png"
                                    alt="img" /></a>
                        </figure>
                        <div class="blocks__text_2">
                            <a href="/" class="strong">Letraset sheets containing Lorem Ipsum passages, and more
                                recently</a>
                            <p class="blocks__text_a">
                                <a href="">
                                    <img src="style/images/author-avatar.png" alt="avatar">
                                </a>
                                <a>Politics, News</a>
                                <span>28 Aug, 2021</span>
                            </p>
                        </div>
                    </div>
                    <div class="block__2">
                        <figure><a><img class="block_images_medium" src="./style/images/thumb_medium_3.png"
                                    alt="img" /></a>
                        </figure>
                        <div class="blocks__text_2">
                            <a class="strong" href="/index.html">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered </a>
                            <p class="blocks__text_a">
                                <a href="">
                                    <img src="style/images/author-avatar.png" alt="avatar">
                                </a>
                                <a>Politics, News</a>
                                <span>28 Aug, 2021</span>
                            </p>
                        </div>
                    </div>
                    <div class="block__2">
                        <figure><a><img class="block_images_medium" src="./style/images/thumb_medium_4.png"
                                    alt="img" /></a>
                        </figure>
                        <div class="blocks__text_2">
                            <a class="strong" href="/index.html">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered </a>
                            <p class="blocks__text_a">
                                <a href="">
                                    <img src="style/images/author-avatar.png" alt="avatar">
                                </a>
                                <a>Politics, News</a>
                                <span>28 Aug, 2021</span>
                            </p>
                        </div>
                    </div>
                    <div class="block__2">
                        <figure><a><img class="block_images_medium" src="./style/images/thumb_medium_5.png"
                                    alt="img" /></a>
                        </figure>
                        <div class="blocks__text_2">
                            <a class="strong" href="/index.html">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered </a>
                            <p class="blocks__text_a">
                                <a href="">
                                    <img src="style/images/author-avatar.png" alt="avatar">
                                </a>
                                <a>Politics, News</a>
                                <span>28 Aug, 2021</span>
                            </p>
                        </div>
                    </div>
                    <div class="block__2">
                        <figure><a><img class="block_images_medium" src="./style/images/thumb_medium_6.png"
                                    alt="img" /></a>
                        </figure>
                        <div class="blocks__text_2">
                            <a class="strong" href="/index.html">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered </a>
                            <p class="blocks__text_a">
                                <a href="">
                                    <img src="style/images/author-avatar.png" alt="avatar">
                                </a>
                                <a href="#">Politics, News</a>
                                <span>28 Aug, 2021</span>
                            </p>
                        </div>
                    </div>
                    <div>
                        <ul class="numbers_pages">
                            <li><img src="./style/images/icon-prev.png" class="arrow"><a>PREV</a></li>
                            <li class="number_page" ><a href="//localhost/test/">1.</a></li>
                            <li class="number_page"><a href="//localhost/test/">2.</a></li>
                            <li class="number_page"><a href="//localhost/test/">3.</a></li>
                            <li class="number_page"><a href="//localhost/test/">4.</a></li>
                            <li><a class="arrow">NEXT</a><img class="arrow" src="./style/images/icon-next.png"></li>
                        </ul>
                    </div>

                </div>
                <!-- right -->
                <div class="article_2">
                    <div class="blocks_bigger">
                        <h4 class="widjet__title"><span class="span_dot"></span><span>Popular Articles</span>
                            <div class="line_width">
                                <span class="span_line"></span>
                            </div>
                        </h4>
                        <div class="block__1">
                            <div class="numero"><span>1.</span></div>
                            <div class="blocks__text">
                                <a class="strong" href="/index.html" href="#">Ut enim ad minima veniam </a><br />
                                <p class="blocks__text_span"><span>28 Aug, 2021</span>
                                    <span>78 views</span>
                                </p>
                            </div>
                            <figure class="block_images"><a><img src="./style/images/thumb-square-1.png"
                                        alt="img" /></a>
                            </figure>
                        </div>
                        <div class="block__1">
                            <div class="numero"><span>2.</span></div>
                            <div class="blocks__text">
                                <a href="#" class="strong">Ut enim ad minima veniam </a><br />
                                <p class="blocks__text_span"><span>28 Aug, 2021</span>
                                    <span>78 views</span>
                                </p>
                            </div>
                            <figure class="block_images"><a href="#"><img src="./style/images/thumb-square-2.png"
                                        alt="img" /></a>
                            </figure>
                        </div>
                        <div class="block__1">
                            <div class="numero"><span>3.</span></div>
                            <div class="blocks__text">
                                <a class="strong" href="/index.html">Ut enim ad minima veniam </a><br />
                                <p class="blocks__text_span"><span>28 Aug, 2021</span>
                                    <span>78 views</span>
                                </p>
                            </div>
                            <figure class="block_images"><a><img src="./style/images/thumb-square-3.png"
                                        alt="img" /></a>
                            </figure>
                        </div>
                        <div class="block__1">
                            <div class="numero"><span>4.</span></div>
                            <div class="blocks__text">
                                <a class="strong" href="/index.html">Ut enim ad minima veniam </a><br />
                                <p class="blocks__text_span"><span>28 Aug, 2021</span>
                                    <span>78 views</span>
                                </p>
                            </div>
                            <figure class="block_images"><a><img src="./style/images/thumb-square-4.png"
                                        alt="img" /></a>
                            </figure>
                        </div>
                        <div class="block__1 , border_none">
                            <div class="numero"><span>5.</span></div>
                            <div class="blocks__text">
                                <a class="strong" href="/index.html">Ut enim ad minima veniam </a><br />
                                <p class="blocks__text_span"><span>28 Aug, 2021</span>
                                    <span>78 views</span>
                                </p>
                            </div>
                            <figure class="block_images"><a><img src="./style/images/thumb-square-5.png"
                                        alt="img" /></a>
                            </figure>
                        </div>
                        <h4 class="widjet__title"><span class="span_dot"></span>
                            <span>Search</span>
                            <div class="line_width">
                                <span class="span_line"></span>
                            </div>
                        </h4>
                        <div><input class="input_area" type="text" placeholder="Search..."><button
                                class="input_button">SEARCH</button>
                        </div>
                        <h4 class="widjet__title"><span class="span_dot"></span>
                            <span>TRENDING</span>
                            <div class="line_width">
                                <span class="span_line"></span>
                            </div>
                        </h4>
                        <div class="blocks_with_img1">
                            <img class="backGround" src="./style/images/thumb-large.jpg">
                            <p>Nor again is there anyone who loves or pursues or desires to obtain</p>
                        </div>
                        <div class="block_2">
                            <figure class="block_images"><a href="#"><img src="./style/images/thumb-square-1.png"
                                        alt="img" /></a>
                            </figure>
                            <div class="blocks__text">
                                <a class="strong" href="/index.html">At vero eos et accu samus et iusto</a><br />
                                </p>
                            </div>
                        </div>
                        <div class="block_2">
                            <figure class="block_images"><a href="#"><img src="./style/images/thumb-square-2.png"
                                        alt="img" /></a>
                            </figure>
                            <div class="blocks__text">
                                <a class="strong" href="/index.html">At vero eos et accu samus et iusto</a><br />
                                </p>
                            </div>
                        </div>
                        <div class="block_2">
                            <figure class="block_images"><a><img src="./style/images/thumb-square-3.png"
                                        alt="img" /></a>
                            </figure>
                            <div class="blocks__text">
                                <a class="strong" href="/index.html">At vero eos et accu samus et iusto</a><br />
                                </p>
                            </div>
                        </div>
                        <h4 class="widjet__title"><span class="span_dot"></span>Tags cloud<span
                                class="span_line_2"></span>
                        </h4>
                    </div>
                    <div class="themes">
                        <a href="#" class="tags_cloud">Business</a>
                        <a href="#" class="tags_cloud">Technology</a>
                        <a href="#" class="tags_cloud">Sport</a>
                        <a href="#" class="tags_cloud">Art</a>
                        <a href="#" class="tags_cloud">Lifestyle</a>
                        <a href="#" class="tags_cloud">Three</a>
                        <a href="#" class="tags_cloud">Photography</a>
                        <a href="#" class="tags_cloud">Lifestyle</a>
                        <a href="#" class="tags_cloud">Art</a>
                        <a href="#" class="tags_cloud">Education</a>
                        <a href="#" class="tags_cloud">Social</a>
                        <a href="#" class="tags_cloud">Three</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="info-blocks">
            <div class="media_block">
                <div class="info-block">
                    <h4 class="widjet__title"><span class="span_dot"></span>
                        <span>MOST COMMENTS</span>
                        <div class="line_width">
                            <span class="span_line"></span>
                        </div>
                    </h4>
                    <div class="comments_1">
                        <div class="numero_1"><span>1.</span></div>
                        <div class="blocks__text">
                            <a class="strong" href="#">Frtuitous spluttered unlike ouch vivid blinked far
                                inside</a><br />
                        </div>
                    </div>
                    <div class="comments_1">
                        <div class="numero_1"><span>2.</span></div>
                        <div class="blocks__text">
                            <a class="strong" href="/index.html">Against and lantern where a and gnashed
                                nefarious</a><br />
                        </div>
                    </div>
                    <div class="comments_1">
                        <div class="numero_1"><span>3.</span></div>
                        <div class="blocks__text">
                            <a class="strong" href="/index.html">Ouch oh alas crud unnecessary invaluable some</a><br />
                        </div>
                    </div>
                    <div class="comments">
                        <div class="numero_1"><span>4.</span></div>
                        <div class="blocks__text">
                            <a class="strong" href="/index.html">And far hey much hello and bashful one save
                                less</a><br />
                        </div>
                    </div>
                </div>
                <div class="info-block">
                    <h4 class="widjet__title"><span class="span_dot"></span>
                        <span>LATEST</span>
                        <div class="line_width">
                            <span class="span_line"></span>
                        </div>
                    </h4>
                    <div class="comments_1">
                        <div class="img_coments"><img src="./style/images/thumb-square-1.png" class="tiny_img_size"></div>
                        <div class="blocks__text">
                            <a class="strong" href="/index.html">Magna aliqua ut enim ad minim veniam</a><br />
                        </div>
                    </div>
                    <div class="comments_1">
                        <div class="img_coments"><img src="./style/images/thumb-square-2.png" class="tiny_img_size"></div>
                        <div class="blocks__text">
                            <a class="strong" href="/index.html">Magna aliqua ut enim ad minim veniam</a><br />
                        </div>
                    </div>
                    <div class="comments">
                        <div class="img_coments"><img src="./style/images/thumb-square-3.png" class="tiny_img_size"></div>
                        <div class="blocks__text">
                            <a class="strong" href="/index.html">Magna aliqua ut enim ad minim veniam</a><br />
                        </div>
                    </div>
                </div>
            </div>
            <div class="media_block">
                <div class="info-block">
                    <h4 class="widjet__title"><span class="span_dot"></span><span>CATEGORIES</span>
                        <div class="line_width">
                            <span class="span_line"></span>
                        </div>
                    </h4>
                    <div>
                        <ul class="block_list">
                            <li class="list_id"><a>></a><a>Business</a></li>
                            <li class="list_id"><a>></a><a>Entertainment</a></li>
                            <li class="list_id"><a>></a><a>Environment</a></li>
                            <li class="list_id"><a>></a><a>Health</a></li>
                        </ul>
                        <ul class="block_list">
                            <li class="list_id"><a>></a><a>Life style</a></li>
                            <li class="list_id"><a>></a><a>Politics</a></li>
                            <li class="list_id"><a>></a><a>Technology</a></li>
                            <li class="list_id"><a>></a><a>World</a></li>
                        </ul>
                    </div>
                </div>
                <div class="info-block">
                    <h4 class="widjet__title"><span class="span_dot"></span>
                        <span>INSTAGRAM</span>
                        <div class="line_width">
                            <span class="span_line"></span>
                        </div>
                    </h4>
                    <div class="info_images">
                        <div><img src="./style/images/thumb-square-1.png" class="tiny_img_size"></div>
                        <div><img src="./style/images/thumb-square-2.png" class="tiny_img_size"></div>
                        <div><img src="./style/images/thumb-square-3.png" class="tiny_img_size"></div>
                        <div><img src="./style/images/thumb-square-4.png" class="tiny_img_size"></div>
                        <div><img src="./style/images/thumb-square-5.png" class="tiny_img_size"></div>
                        <div><img src="./style/images/thumb-square-2.png" class="tiny_img_size"></div>
                        <div><img src="./style/images/thumb-square-1.png" class="tiny_img_size"></div>
                        <div><img src="./style/images/thumb-square-3.png" class="tiny_img_size"></div>
                        <div><img src="./style/images/thumb-square-5.png" class="tiny_img_size"></div>

                    </div>
                </div>
            </div>
        </section>
        <?php require_once ('__include/footer.php') ?>
        <div class="gototop">
            <a href="#"><span>Take Me Top</span></a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./slick-master/slick/slick.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>