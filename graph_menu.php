<?php

    $menu['sidebar']['setup'][] = array(
        'text' => _("Graphs"),
        'path' => 'graph',
        'active'=>'graph',
        'icon' => 'show_chart',
        'order' => 2,
        'li_id' => 'graph-link',
        'data'=> array('sidebar' => '#sidebar_graph')
    );

    // sidebar
    $menu['sidebar']['includes']['setup']['graph'] = view('Modules/graph/Views/sidebar.php');