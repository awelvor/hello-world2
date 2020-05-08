<?php get_header(); ?>
<body>
<div class="container">

<?php
get_search_form();
echo "is_home: ".is_home()."<br>";
echo "is_frontpage: ".is_front_page()."<br>";

echo "name: ";bloginfo('name'); echo "<br>";
echo "description: ";bloginfo('description'); echo "<br>";

echo "wpurl: ";bloginfo('wpurl'); echo "<br>";

echo "url: ";bloginfo('url'); echo "<br>";
wp_nav_menu()






?>
  
</div>
</body>
<?php 
get_footer(); 



?>