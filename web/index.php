<?php
// Tells WordPress to load the WordPress theme and output it.
define('WP_USE_THEMES', true);

// Loads the WordPress Environment and Template
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );

<?php
// index.php

// Your existing PHP code goes here...

// For example, some basic PHP code might be:
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Home Page</title>";
echo "</head>";
echo "<body>";
echo "<h1>Welcome to the Home Page</h1>";
echo "<p>This is the home page of the site.</p>";
echo "<a href='newpage.php'>Go to the New Page</a>";
echo "</body>";
echo "</html>";
