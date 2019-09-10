<?php

// no direct access
defined('EMONCMS_EXEC') or die('Restricted access');

function example_controller() {

    global $session, $route, $mysqli, $path;
    
    // Default route format
    $route->format = 'json';
    
    // Result can be passed back at the end or part way in the controller
    $result = false;
    
    require "Modules/example/example_model.php";
    $example = new Example($mysqli);
    
    // GNU GetText translations available from 'locale/[lang]/LC_MESSAGES/messages.mo'
    // these translations will be passed as view data and can also be available to <script> via getTranslations() </script>
    $translations = array(
        'Example Module' => _('Example Module'),
        'Menu Item 1' => _('Menu Item 1'),
        'Menu Item 2' => _('Menu Item 2'),
        'Menu Item 3' => _('Menu Item 3'),
    );
   
    // Write access
    //   requires ?apikey=[your write api key]  to appended to url if not logged in
    if ($session['write']) {
        if ($route->action == "view") {
            $route->format = 'html';
            return view("Modules/example/example_view.php", array(
                'v' => 1,
                'translations' => $translations,
                'path' => $path,
                'module_version' => $example->version(),
                'locale' => setlocale(LC_ALL,0)
            ));
        } elseif ($route->action == "new") {
            $route->format = 'html';
            return '<h2>New</h2><p>Create a view for this endpoint and return the html here</p>';
        }

    // Read access
    //   requires ?apikey=[your read api key]  to appended to url if not logged in
    } elseif ($session['read']) {
        // just text response
        return 'read only access';
    }

    // Pass back result if no return statement in above controller code
    return array('content' => $result);
}
