<?php

// to check default timexone activated

echo '<b>Default Timezone :</b> ' . date_default_timezone_get() . '<br>';

// set default new timezone of choice
echo date_default_timezone_set("Asia/Karachi") . '<br>';
echo '<b>New Timezone :</b> ' . date_default_timezone_get() . '<br>';



echo '<pre>';
print_r(timezone_identifiers_list());
echo '</pre>' . '<br>';

echo '<pre>';
print_r(timezone_identifiers_list(16));
echo '</pre>' . '<br>';












?>