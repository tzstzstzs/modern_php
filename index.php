<?php
// $dayOfYear = date('z') + 1; // TODO
$dayOfYear = 274;
require './' . $dayOfYear . '.php';
$totalVotes = array_sum($data['answers']);

if ($_POST['vote']) {
    if (in_array($_POST['vote'], array_keys($data['answers']))) {
        // növeljük
        $data['answers'][$_POST['vote']]++;
        var_dump($data);
    }
    // TODO ha olyanra szavazott ami nem létezik, logoljuk a választ és az IP címet
}

require './template.php';