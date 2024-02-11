<?php
$countFile = 'visitor_count.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Increment the count and save it to the file.
    $currentCount = (int)file_get_contents($countFile);
    $currentCount++;
    file_put_contents($countFile, $currentCount);
    echo $currentCount;
} else {
    // Output the current count.
    echo (int)file_get_contents($countFile);
}
?>
