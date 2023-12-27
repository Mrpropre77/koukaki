<?php

get_header();
?>

    <main id="primary" class="site-main">

        <!-- Bannière -->
        <section class="banner">
            <img class="banner-bkg" src="<?php echo get_theme_file_uri() . '/assets/images/banner.png'; ?>" alt="bannière foce">
            <video class="banner-video" width="1440" autoplay="autoplay" muted=""
                    loop="infinite">
                    <source src="<?php echo get_theme_file_uri() . '/assets/video/Studio+Koukaki-vidéo+header+sans+son+(1).mp4'; ?>" type="video/mp4">
            </video>
            <img class="banner-logo" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="Logo fleurs d'oranger & chats errants">
        </section>

        <!-- Section story -->
        <section id="story" class="story hidden">
            <h2><span class="story-title hidden">L'histoire</span></h2>
            <article class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <!-- La partie 'Characters' a été déplacé dans 'characters-slider.php' -->
            <?php  
                get_template_part ( 'template-parts/characters' , 'slider' ); 
            ?>

            <article id="place">
            <!-- La partie clouds -->
                <img class="big_cloud" src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png'; ?>" alt="Gros nuage qui passe">
                <img class="little_cloud" src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png'; ?>" alt="Petit nuage qui passe">
                <div>
                    <h3><span class="place-title animtitre">Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>

        <!-- Section studio -->
        <section id="studio" class="studio hidden">
            <h2><span class="studio-title hidden">Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

        <!-- Section nomination -->
        <section id="nomination" class="nomination">
            <div class="nomination-title">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/orange_nomination_bg.png'; ?>" alt="fond du titre des nominations">
            <h3>Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</h3>
            </div>
            <img class="nomination-logo" src="<?php echo get_theme_file_uri() . '/assets/images/oscars-2021.png'; ?>" alt="Nomination aux Oscars 2022">
        </section>
    </main>

<?php
get_footer();
