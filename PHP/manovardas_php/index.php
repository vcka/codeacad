<?php
// Load all functions here
require_once 'functions/core.php';

// Enable/Disable Debugging
$debug = false;

/**
 * Default $page array:
 * Array of all page variables
 * and settings
 */
$page = [
    'title' => 'Error: 404',
    'stylesheet' => 'css/main.css',
    'content' => [
        // Šitas variable 'rendered' bus sukurtas controllerio
        // Tai bus ilgas HTML'o stringas sukurtas funkcijos
        // render_page()
        'rendered' => 'Tokio puslapio nerasta'
    ],
    'show_header' => true,
    'show_footer' => true,
];

/**
 * This is our "Router'is"
 * Kiekvienam page iškviečiame
 * jo controllerį
 */
if (isset($_GET['page'])) {
    $page_name = $_GET['page'];
    switch ($page_name) {
        case 'home':
            $CURRENT_PAGE = "home";
            run_controller($page, home);
            break;
        case 'showcase':
            $CURRENT_PAGE = "showcase";
            run_controller($page, showcase);
            break;
        case 'cv':
            $CURRENT_PAGE = "cv";
            run_controller($page, cv);
            break;
        default:
            $CURRENT_PAGE = "home";
            run_controller($page, home);
    }
}
//print $page_name;
?>
<html>
    <head>
        <title><?php print $page['title']; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php print $page['stylesheet']; ?>">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://v4-alpha.getbootstrap.com/examples/narrow-jumbotron/narrow-jumbotron.css" rel="stylesheet">
    </head>
    <body>
        <!-- Debug Output !-->
        <?php if ($debug) var_dump($page); ?>
        <div class="container">
            <!-- Menu !-->
            <?php if ($page['show_menu']): ?>

                    <?php include ('templates/objects/menu.tpl.php'); ?>

            <?php endif; ?>
            <!-- Header !-->
            <?php if ($page['show_header']): ?>
                <div class="header-wrapper">
                    <?php include ('templates/objects/header.tpl.php'); ?>
                </div>
            <?php endif; ?>
    
            <!-- Content !-->
            <?php if (isset($page['content']['rendered'])): ?>
                <div class="content-wrapper">
                    <?php print $page['content']['rendered']; ?>
                </div>
            <?php endif; ?>

            <!-- Footer !-->
            <?php if ($page['show_footer']): ?>
                <div class="footer-wrapper">
                    <?php include ('templates/objects/footer.tpl.php'); ?>
                </div>
            <?php endif; ?>
        </div>
    </body>
</html>