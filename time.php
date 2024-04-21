<?php

// time functions


echo "<b>Hour is :</b> " . date('H') . '<br>';
echo "<b>Hour is :</b> " . date('h') . '<br>';
echo "<b>Hour is :</b> " . date('g') . '<br>';
echo "<b>Hour is :</b> " . date('G') . '<br><br>';

echo "<b>Minute is :</b> " . date('i') . '<br><br>';

echo "<b>Second is :</b> " . date('s') . '<br><br>';

echo "<b>Meridiem is :</b> " . date('a') . '<br>';
echo "<b>Meridiem is :</b> " . date('A') . '<br><br>';

echo "<b>Full Time is :</b> " . date('h:i:s a') . '<br><br>';

// to set default timexone use this function


date_default_timezone_set('Asia/Karachi');
echo "<b>Full Time is :</b> " . date('h:i:s a e') . '<br><br>';










?>