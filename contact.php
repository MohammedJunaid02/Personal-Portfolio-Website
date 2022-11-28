<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mohammed Junaid</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="sidebar sidebarGo">
        <nav>
          <ul>
            <li><a href="/">Home</a> </li>
            <li><a href="/intro.html">About</a> </li>
            <li><a href="/services.html">Services</a> </li>
            <li><a href="/blog.html">Blog</a> </li>
            <li><a href="/contact.html">Contact Me</a> </li>
          </ul>
        </nav>
      </div>
      <div class="main">
        <div class="hamBurger">
          <img class="ham" src="/ham.png" alt="" width="23">
          <img class="cross" src="/cross.png" alt="" width="23">
        </div>
        <div class="contactform">
            <h1>Contact Me</h1>
            <form action="contact.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="name" class="form-control" id="Email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="Email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email and Ph.No with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="clientphone" class="form-label">Phone</label>
                  <input type="phone" class="form-control" id="clientphone">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Enquiry</label>
                  <input type="name" class="form-control" id="Email" aria-describedby="emailHelp">
                </div> 
                <div class="mb-3"  id=" form-check">
                  <input type="checkbox" class="form-check-input" id="isclient">
                  <label class="form-check-label" for="isclient">Contact Me for More Details</label>
                </div>
                <button type="submit" class="btn btn-sm">Submit</button>
              </form>
        </div>
      </div>
    </div>
<script src="script.js"></script>

</body>
</html>
