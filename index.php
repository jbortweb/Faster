<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', 'true', 'right');?></title>
    <?php wp_head();?>
</head>
<body>
    <header class="Header">

        <div class="Logo">
            <a href="" class="Logo">Logo</a>
        </div>

        <nav class="Menu">

            <ul>
                <li><a href="">Sección1</a></li>
                <li><a href="">Sección2</a></li>
                <li><a href="">Sección3</a></li>
                <li><a href="">Sección4</a></li>
                <li><a href="">Sección5</a></li>
            </ul>

        </nav>

    </header>

    <main class="Main">

        <article class="Content">

            <h1>Creación de Temas</h1>
            <h2>Contenido</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis laboriosam soluta impedit id totam? Aliquam, quae veniam aspernatur, adipisci ex sunt, dolor ratione saepe nostrum reiciendis odio. Blanditiis, consectetur sunt?</p>
        
        </article>

        <aside class="Sidebar">

            <h2>Sidebar</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis accusamus quidem nesciunt magnam repudiandae eius placeat, dolores architecto illum id maiores ducimus unde similique vel eveniet. Illo odit architecto iusto!</p>
        
        </aside>

    </main>

    <footer class="Footer">

        <nav class="SocialMedia">
            <ul>
                <li><a href="">Redes 1</a></li>
                <li><a href="">Redes 1</a></li>
                <li><a href="">Redes 1</a></li>
                <li><a href="">Redes 1</a></li>
                <li><a href="">Redes 1</a></li>
            </ul>
        </nav>

        <div>
            <small>&copy,2021 by tuwebentrelineas.es</small>
        </div>

    </footer>
    <?php wp_footer();?>

</body>
</html>