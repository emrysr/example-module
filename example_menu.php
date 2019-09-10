<?php
// Gettext translation domain
// --------------------------
    $domain = "messages";

    // ADD CUSTOM TOP NAV LINK 
    // --------------------------
    $menu['tabs'][] = array(
        'icon'=>'example',
        'text'=> _("Example"),
        'path'=> 'example',
        'data'=> array('sidebar' => '#sidebar_example')
    );


    // ADD TO CUSTOM SIDEBAR 
    // --------------------------
    $menu['sidebar']['example'][] = array(
        'text' => _("Menu Item 1"),
        'path' => 'example/view/1'
    );
    $menu['sidebar']['example'][] = array(
        'text' => _("Menu Item 2"),
        'path' => 'example/view/2'
    );
    $menu['sidebar']['example'][] = array(
        'text' => _("Menu Item 3"),
        'path' => 'example/view/3'
    );
    $menu['sidebar']['example'][] = array(
        'text' => _("New"),
        'icon' => 'plus',
        'path' => 'example/new'
    );


// ----------------------------------------------------
// CUSTOM SIDEBAR OR ADD TO EXISTING SIDEBAR (not both)
// ----------------------------------------------------

/*

    // ADD TO EMONCMS SIDEBAR 
    // --------------------------
    $menu['sidebar']['emoncms'][] = array(
        'text' => _("Example"),
        'path' => 'example/view',
        'icon' => 'example',
        'order' => 'xyz9',
        'data' => array(
            'sidebar'=>'#sidebar_example' // always starts with '#sidebar_'
        )
    );

    // SIDEBAR 3RD LEVEL LINKS
    // --------------------------

    $menu['sidebar']['includes']['emoncms']['example'][] = array(
        'text' => _("Menu Item 1"),
        'path' => 'example/view/1'
    );
    $menu['sidebar']['includes']['emoncms']['example'][] = array(
        'text' => _("Menu Item 2"),
        'path' => 'example/view/2'
    );
    $menu['sidebar']['includes']['emoncms']['example'][] = array(
        'text' => _("Menu Item 3"),
        'path' => 'example/view/3'
    );
    $menu['sidebar']['includes']['emoncms']['example'][] = array(
        'text' => _("New"),
        'icon' => 'plus',
        'path' => 'example/new'
    );

 */

// CUSTOM SVG ICONS ADDED TO ALL VIEWS
// --------------------------

$menu['includes']['icons'][] = <<<EOT
<symbol id="icon-example" viewBox="0 0 32 32">
    <!--<title>power</title>-->
    <path d="M21.375 9.313c1.313 0 2.625 1.375 2.625 2.688v7.313l-4.688 4.688v4h-6.625v-4l-4.688-4.688v-7.313c0-1.313 1.313-2.688 2.625-2.688h0.063v-5.313h2.625v5.313h5.375v-5.313h2.625z"></path>
</symbol>
EOT;
