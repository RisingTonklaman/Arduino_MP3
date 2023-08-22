<?php

$mp3FilePath = 'C:\Users\jp\Documents\GitHub\Arduino_MP3\X2Download.app - 【蔡程昱_CaiChengyu】Praise The Fool《赞美愚者》 (完整版) -「代号诡秘」诡秘之主 - 游戏化PV首曝 - FULL - Lyrics_Pinyin_Engsub (128 kbps).mp3'; // Replace with the actual path to your MP3 file

// Check if the file exists
if (file_exists($mp3FilePath)) {
    // Read the binary contents of the MP3 file
    $mp3Contents = file_get_contents($mp3FilePath);

    // Display the length of the MP3 file in bytes
    $fileSize = strlen($mp3Contents);
    echo "MP3 file size: {$fileSize} bytes";
} else {
    echo "File not found.";
}

?>
