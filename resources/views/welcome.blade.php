<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,200&family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1 style="font-size:40px">Terima Kasih Telah bergabung bersama Garuda Cyber Institude</h1>
        <p>Welcome, {{ $firstName }} {{ $lastName }}!</p>
        <h2> </h2>
        
        <p>sepertinya kamu tinggal di {{ $alamat }}!</p>
        <p>kamu sangat suka sekali {{ $hobby }}, kurasa itu kegiatan yang bagus!</p>
        
        <a href="/">Back to Home</a>
    </body>
</html>