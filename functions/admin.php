<?php
add_action('admin_menu', 'add_custom_submenu_page');
function add_custom_submenu_page()
{
    add_submenu_page('options-general.php', 'Google Analytics設定', 'Google Analytics設定', 'manage_options', 'custom_submenu_page', 'add_custom_menu_page', 7);
}

function add_custom_menu_page()
{
    ?>
<div class="wrap">
    <h2>Google Analytics設定</h2>
		<form method="post" action="options.php">
</div>
<?php
}
