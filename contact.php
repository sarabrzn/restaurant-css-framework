<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="BS5/css/bootstrap.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="style.css">

</head>
<body>
  
<!--  HEADER/NAVIGATION BAR -->
  <section class="container-fluid">
    <p class="text-white p-2">Call us at 0123 45 67 89</p>
    <header class="row">
      <div class="col-12">
        <div class= "border bg-light">
          <a href="index.php" class="navbar-brand">
            <img src="images/logo.png" alt="Logo" title="Logo"></a> 
      <div class="col-12">
        <div class="border bg-light">
          <nav class="nav flex-column nav flex-lg-row nav nav-tabs justify-content-end">
            <a class="nav-link" href="index.html">Home</a>
            <a class="nav-link" href="menu.html">Menu</a>
            <a class="nav-link" href="pictures.html">Pictures</a>
            <a class="nav-link" href="restaurants.html">Restaurants</a>
            <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
          </nav>  
        </div>
      </div>
    </header>
  </section>
  <br> 
  
  <!-- END OF HEADER/NAVIGATION BAR -->
 


 
  <!-- CONTACT -->
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="p-3 border bg-light">
        <h3>Write to us</h3>
        <img src="images/chat.png" class="img" alt="chat" width="200px" height="200px" > 
      </div>
    </div>

    
   
  <!-- CONTACT FORM -->
  <!-- The data will be sent to the file formData.php -->
      <form action="create.php" method="POST" class="col-12 col-lg-6">
        <div class="p-3 border bg-light">
          <input type="text" name="firstname" class="form-control" placeholder="First name" aria-label="First name" required><br>
          <input type="text" name="lastname" class="form-control" placeholder="Last name" aria-label="Last name" required><br>
          <input type="email" name="email" class="form-control" placeholder="name@example.com" aria-label="E-mail" required>
            <div class="mb-3">
              <label for="subject" class="form-label"></label>
              <select class="form-select" name="subject" id="subject" required>
                <option selected disabled value="">Subject</option> 
                <option>Make a reservation</option>
                <option>Ask a question</option>
                <option>Suggestions</option>
              </select>
              <label for="text area" class="form-label"></label>
              <textarea class="form-control" name="message"  rows="5" placeholder="Type your message" required></textarea> 
            </div>
          
    <!-- END OF CONTACT FORM -->
   <!--  SEND BUTTON WITH ICON  -->
          <button type="submit" name="submit" class="btn btn-primary">Send
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
              <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg>
          </button>
          
    <!-- END OF SEND BUTTON WITH ICON -->
        </div>
      </form>
    </div>
  </div>
  <br>

  

  <!-- END OF CONTACT FORM -->
  <!-- FOOTER -->
  <!-- <footer class="container-fluid">
    <div class="row">
      <div class="col-12 fixed-bottom">
        <div class="p-3 border bg-light">
          Footer
          <div>Icon made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
        </div>
      </div>
    </div>
  </footer> -->
  <!-- END OF FOOTER -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="BS5/js/bootstrap.js"></script>
  
</body>
</html>