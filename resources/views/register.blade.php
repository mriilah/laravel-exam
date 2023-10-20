<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,200&family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Form</h1>
        <h2>Buat Akun Baru!</h2>
        <form method="POST" action="/welcome">
            @csrf 
            <label for="first_name">First Name:</label><br>
            <input type="text" name="first_name" required><br>
            <label for="last_name">Last Name:</label><br>
            <input type="text" name="last_name" required><br>
            <label for="alamat_tinggal">alamat:</label><br>
            <input type="text" name="alamat_tinggal" required><br>
            <label for="hobby">hobi:</label><br>
            <input type="text" name="hobby" required><br>  
            <p>Gender:</p>

              <input type="radio" id="Male" name="fav_language">
              <label for="Male">Male</label><br>
              <input type="radio" id="Female" name="fav_language">
              <label for="Female">Female</label><br>
              <input type="radio" id="Order" name="fav_language">
              <label for="Other">Other</label><br>

            <p>Bio:</p>
            <textarea name="adawdaw" rows="10" cols="30"></textarea><br>
            <br/>
            <a href="/welcome" onclick="alert('Terima Kasih Telah Mendaftar')">
            <button>Daftar</button>
        </form>
    </body>
</html>