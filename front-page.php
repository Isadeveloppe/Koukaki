<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner fade-down">
    <!-- Intégration de la vidéo à la place de l'image -->
        <video class="video" autoplay muted loop poster="<?php echo get_theme_file_uri() . '/assets/images/banner.png'; ?>">
                <source  type="video/mp4">
        </video>
        <img class="logo floating" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
        
    </section>
  <!-- Fin de l'intégration de la vidéo -->   
  
    <section id="#story" class="story" >
        <h2 class=".reveal-1 size">
            <span class=".reveal-1">L'</span>
            <span class=".reveal-1">histoire</span>
        </h2>
        <article id="" class="story__article .reveal-1">
             <p class=".p"><?php echo get_theme_mod('story'); ?></p>
        </article>
        
                <?php get_template_part('templates-parts/swiper-characters'); ?>
                  
        <article id="place">
            <div>
                <h3 class=".reveal-1" >Le Lieu</h3>                
                <p class=".p"><?php echo get_theme_mod('place'); ?></p>
                <img class="bigcloud" src="<?php echo get_theme_file_uri() . '/assets/images/bigcloud.png'; ?>" alt="Grand Nuage">
                <img class="littlecloud" src="<?php echo get_theme_file_uri() . '/assets/images/littlecloud.png'; ?>" alt="Petit Nuage">
            </div>

        </article>
    </section>

    <section id="studio">
        <h2 class=".reveal-1">
            <span class=".reveal-1">Studio</span>
            <span class=".reveal-1">Koukaki</span>
        </h2>   
        <div>
            <p class=".p">Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p class=".p">Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

    <section class=".reveal-1">
        <?php get_template_part('templates-parts/oscars-nomination'); ?>
    </section>

</main><!-- #main -->

<?php
get_footer();