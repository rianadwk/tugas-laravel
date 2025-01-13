<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form Ragil Albana</title>
  </head>
  <body>
    <h1>Buat Account Baru</h1>
    <h3>sign up form</h3>
    
    <form action="http://localhost/laravel-XI-RPL-2-RAGIL/resources/views/tugas3.blade.php" method="get">

      <label for="fname">First name:</label><br />
      <input type="text" id="fname" name="fname" /><br />
      <label for="lname">Last name:</label><br />
      <input type="text" id="lname" name="lname" />

      <p>Gender</p>
      <input type="radio" id="Gender" name="Gender" />
      <label for="Male">Male</label>
      <input type="radio" id="Gender" name="Gender" />
      <label for="Female">Female</label>

      <p>Nationality</p>
      <select id="Nationality" name="Nationality">
        <option value="Indonesia">Indonesia</option>
        <option value="Amerika">Amerika</option>
        <option value="Inggris">Inggris</option>
      </select>

      <p>Language Spoken</p>
      <input type="checkbox"id="Bahasa1" name="Bahasa1" value="Bahasa Indonesia"/>
      <label for="Bahasa1">Bahasa Indonesia</label><br />
      <input type="checkbox" id="Bahasa2" name="Bahasa2" value="English" />
      <label for="Bahasa2">English</label><br />
      <input type="checkbox" id="Bahasa3" name="Bahasa3" value="Other" />
      <label for="Bahasa3">Other</label><br />

      <p>Bio</p> 
      <textarea id="message" name="message" rows="10" cols="30"></textarea>
      <br></br>
     <input type="submit" value="Sign up">
    </form>  
    
    



  </body>
</html>
