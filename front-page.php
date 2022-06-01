<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTRO PSD</title>

    <?php
    wp_head()
    ?>


</head>

<body>
    <main>
        
        <div class="main-logo">
            <article id="main_logo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/logo_1.svg'" class="logo">
            </article>
        </div>
        <div class="main-artc">
            <article id="main_wrd">
                <div class="container">
                    <h1 class="main-words">
                        BUTAI PRIE GILUŽIO EŽERO KRANTO
                    </h1>
                    <p class="p-words">
                        Registruokitės ir sužinokite pirmieji apie naujus butus.
                    </p>
                    <button id="btn" type="button" class="button">Sužinokite daugiau</button>
                </div>
        </div>
        </article>
        <div id="box">
            <form>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/logo_2.svg'" class="logo2">
                <a id="close"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/close.svg'" class="close"></a>
                <p class="form-words">Užsiregistruokites ir jums pirmiesiems papasakosim apie</p>
                <h2 class="form-title">"GILUŽIO RIVJERA"</h2>
                <?php echo apply_shortcodes( '[contact-form-7 id="50" title="Contact form 1"]' ); ?>
                
            </form>
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/wave.svg'" class="wave">
                <h3 class="name">Jurgita Kvasalaitė</h3>
                <p class="under-name">Pardavimų vadove</p>
            </div>
            <div class="container2">
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/phone.svg'" class="tele-ic">
                <a href="tel:+37065994202" class="tele">+370 659 94202</a>
                <img src="<?php bloginfo('template_directory'); ?>/assets/icons/mail.svg'" class="mail-ic">
                <a href="mailto:pardavimai@giluziorivjera.lt" class="mail">pardavimai@giluziorivjera.lt</a>
            </div>
        </div>



    </main>
    <?php
   wp_footer() 
    
    ?>
</body>

</html>