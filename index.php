<?php

get_header();
?>



<section id="primary" class="content-area">
<?php 
if(have_posts()):while(have_posts()):the_post();
the_content();
the_author();
the_category();
the_tags();
the_post_thumbnail();
endwhile;
endif;
?>
    <main id="main" class="site-main">
        <section>
<header>
        <h2>Offical News</h2>
</header>
            <article>
    <header>
        <h2>Breaking News</h2>
    </header>
<p class="inline-text-box">Left</p>
<p class="inline-text-box">Right</p>
            </article>
        </section>
    </main>
</section>

<?php
get_sidebar();

get_footer();

?>