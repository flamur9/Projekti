<?php

include('dbconnect.php'); // Include the database connection script

$news = [
    ['SHPALLET FITUESI I TOPIT TE ARTE', 'Messi fiton topin e arte', 'Flamur', '2024-01-30'],
    ['BELLINGHAM FITON \'\'THE GOLDEN BOY\'\'', 'Bellingham fiton the golden boy', 'Yll', '2024-01-31'],
    ['SHQIPERIA KUALIFIKOHET \'\'EURO 2024\'\'', 'Shqiperia kualifikohet euro 2024', 'Yll', '2024-02-01'],
    ['SHQIPERIA NE \'\'GRUPIN E VDEKJES\'\'', 'Shqiperia ne grupin e vdekjes', 'Yll', '2024-02-02'],
    ['LEBRON NDIHMON NE FITOREN E LAKERS', 'Lebron ndihmon ne fitoren e Lakers', 'Flamur', '2024-02-03'],
    ['ALL-STAR TEAM PER VITIN 2023', 'ALL-STAR TEAM PER VITIN 2023', 'Flamur', '2024-02-04'],
    ['FINALET PER VITIN 2023', 'FINALET PER VITIN 2023', 'Flamur ', '2024-02-05'],
    ['GIANNIS ME ROL KRUCIAL NE EKIPIN E TIJ', 'Giannis me rol crucial ne ekipin e tij', 'Yll', '2024-02-06'],
    ['MAKHACHEV FITON KUNDER \'\'THE VOLK\'\'', 'Makhachev fiton kunder \'\'The Volk\'\'', 'Yll', '2024-02-07'],
    ['MARKU, GATI PER SFIDEN E RADHES', 'Marku gati per sfiden e radhes', 'Flamur', '2024-02-08'],
    ['JOSHUA SFIDON TYSON FURYN', 'Joshua sfidon Tyson Fury', 'Yll', '2024-02-09'],
    ['JON JONES GATI PER RIKTHIM', 'Jon Jones gati per rikthim', 'Flamur', '2024-02-10']
];


foreach ($news as $article) {
    $title = $article[0];
    $content = $article[1];
    $author = $article[2];
    $publication_date = $article[3];

    $sql = "INSERT INTO sports_news (title, content, author, publication_date) 
            VALUES ('$title', '$content', '$author', '$publication_date')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>
