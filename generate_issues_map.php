<?php

$issueMap = [];
// 'AGATE', 'OPAL', 'MK'
foreach (['AGATE'] as $project) {
    $issueMap = array_merge($issueMap, json_decode(file_get_contents('data/' . $project . '.issues.json'), true));
}

file_put_contents('data/issues.json', json_encode(['issue_map' => $issueMap], JSON_PRETTY_PRINT));
