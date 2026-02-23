<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Har Har Mahadev</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="forTheme">

    <header>this is header <br>
    <a href="index.html">home</a>
    <div>
        <?php
        // Set the default timezone to IST (Asia/Kolkata)
        date_default_timezone_set('Asia/Kolkata');

        // Get current date and time in IST
        $currentIST = date('Y-m-d H:i:s');

        // Display the result
        echo "Current Time: " . $currentIST;
        ?>
    </div>
    </header>
    <hr>
    <main>        
        हर हर महादेव! <br>
        हिंदी में कॉपी पेस्ट कर के लिखना अत्यंत कठिन है। नारायण नारायण। <br>
        <a href="/knowYourRoots.hhm/months/months.html">मास के नाम</a> <br>
        <a href="/knowYourRoots.hhm/politics/politics.html">raja ke darbaar ke bhitar</a> <br>
        <a href="/knowYourRoots.hhm/tithi/tithiMahima.html">tithi mahima</a> <br>
        <a href="/knowYourRoots.hhm/scriptures/scriptures.html">scriptures</a>
    </main>
    <hr>
    <footer>
        this is footer
    </footer>


    <script src="script.js"></script>
        
</body>
</html>