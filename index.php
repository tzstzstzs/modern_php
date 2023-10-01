<?php
// $dayOfYear = date('z') + 1; // TODO
$dayOfYear = 274;
require './' . $dayOfYear . '.php';
$totalVotes = array_sum($data['answers']);

require './template.php';