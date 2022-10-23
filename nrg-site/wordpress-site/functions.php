<?php
add_action("wp_enqueue_scripts", "theme_name_scripts");

function theme_name_scripts()
{
  wp_enqueue_style(
    "fonts",
    "https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap"
  );

  wp_enqueue_style(
    "global",
    get_template_directory_uri() . "/assets/style/global.min.css"
  );

  wp_enqueue_style(
    "normalize",
    get_template_directory_uri() . "/assets/style/normalize.min.css"
  );

  wp_enqueue_style(
    "header",
    get_template_directory_uri() . "/assets/style/header.min.css"
  );

  wp_enqueue_style(
    "footer",
    get_template_directory_uri() . "/assets/style/footer.min.css"
  );
}

add_action("wp_enqueue_scripts", function () {
  global $post;
  if ($post->ID === 9893) {
    wp_enqueue_style(
      "index",
      get_template_directory_uri() . "/assets/style/index.min.css"
    );
  }
});

add_action("wp_enqueue_scripts", function () {
  global $post;
  if ($post->ID === 9896) {
    wp_enqueue_style(
      "benefits",
      get_template_directory_uri() . "/assets/style/benefits.min.css"
    );
  }
});

add_action("wp_enqueue_scripts", function () {
  global $post;
  if ($post->ID === 9898) {
    wp_enqueue_style(
      "sales",
      get_template_directory_uri() . "/assets/style/sales.min.css"
    );
  }
});

add_action("wp_enqueue_scripts", function () {
  global $post;
  if ($post->ID === 9900) {
    wp_enqueue_style(
      "support",
      get_template_directory_uri() . "/assets/style/support.min.css"
    );
  }
});

add_action("wp_enqueue_scripts", function () {
  global $post;
  if ($post->ID === 9902) {
    wp_enqueue_style(
      "location",
      get_template_directory_uri() . "/assets/style/location.min.css"
    );
  }
});

add_action("wp_enqueue_scripts", function () {
  global $post;
  if ($post->ID === 9904) {
    wp_enqueue_style(
      "start",
      get_template_directory_uri() . "/assets/style/start.min.css"
    );
  }
});

add_action("wp_enqueue_scripts", function () {
  global $post;
  if ($post->ID === 9906) {
    wp_enqueue_style(
      "learn",
      get_template_directory_uri() . "/assets/style/learn.min.css"
    );
  }
});

add_theme_support("post-thumbnails");
add_theme_support("title-tag");
add_theme_support("custom-logo");

?>
