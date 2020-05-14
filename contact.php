<!DOCTYPE html>
<html>
  <body>
  <form action="contactform.php" method="POST">
      <!-- First Name Field -->
      <label for="fname">First Name</label>
      <input type="text" required id="fname" name="fname">
      <!-- Last Name Field -->
      <label for="lname">Last Name</label>
      <input type="text" required id="lname" name="lname">
      <!-- Email Field -->
      <label for="email">Email</label>
      <input type="email" required id="email" name="email">
      <!-- Message Field -->
      <label for="message">Write me a message</label>
      <textarea required id="message" name="message">
      </textarea>
      <!-- Submit Input Field -->
      <input type="submit" name="submit" value="send">
  </form>	
  </body>
</html>