<body>

<footer>
    <div class="container fixed-bottom bg-dark mt-2">
        <div class="row">
            <div class="col-md-6 text-white text-center ">  Paginas que podrian ser de tu interes</div>
            <div class="col-md-3">
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'temazo_footer_1',
                    )
                ); ?>
            </div>
            <div class="col-md-3">
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'temazo_footer_2',
                    )
                ); ?>
            </div>

        </div>
    </div>

</footer>


<?php wp_footer(); ?>
</html>