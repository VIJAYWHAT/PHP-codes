<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vj web</title>
  <link rel="icon" type="image/x-icon" href="./image/vj.png">
 
</head>

<function>
<style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  /* Style the header */
  header {
    background-color: gray;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
    border-image: auto;
  }

  /* Create two columns/boxes that floats next to each other */
  nav {
    float: left;
    width: 30%;
    height: 300px;
    /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
    border-image: auto;
  }

  /* Style the list inside the menu */
  nav ul {
    list-style-type: none;
    padding: 0;
  }

  article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 300px;
    /* only for demonstration, should be removed */
  }

  /* Clear floats after the columns */
  section::after {
    content: "";
    display: table;
    clear: both;
  }

  /* Style the footer */
  footer {
    background-color: #0002;
    padding: 10px;
    text-align: center;
    color: black;


  }

  form {
    text-align: center;

  }

  /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
  @media (max-width: 600px) {

    nav,
    article {
      width: 100%;
      height: auto;
    }
  }
</style>

<body>

  <h2>PHP</h2>


  <header>

    
    <a href="https://www.google.com/">
        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="image">
        <?php
    echo "hello world !";
    ?>
    <br>
  </header>

  <section>
    <nav>


      
      <a href="https://github.com/techatpark/gurukulam"><img src="/image/github.png" alt="image"></a>

      <a href="https://drive.google.com/drive/my-drive"><img src="/image/drive.png" alt="image"></a>
      
        <a href="https://www.youtube.com/"><img src="/image/images.jpeg" alt="image"></a>
      
    </nav>

    <article>

      <a href="https://www.w3schools.com/">
        <img src="https://www.w3schools.com/html/w3schools.jpg" alt="image">
      </a>
      <form action="/action_page.php">
        <label for="fname">check time:</label><br>
        <input type="datetime-local" id="fname" name="fname"> <br>
        <input type="button" value="Submit">
      </form>

    </article>
  </section>

  <footer>
    <p>@vj-2000</p>
    <p>created By Vijay</p>
    <input type="button" onclick="alert('Thanks For visiting!')" value="Click Me!">

  </footer>
</body>