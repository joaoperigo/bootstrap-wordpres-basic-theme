<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: ".get_bloginfo('url'));
// wp_redirect(esc_url(home_url('/404-page-missing')), 301);
exit();
?>