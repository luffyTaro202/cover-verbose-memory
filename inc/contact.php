<?php include 'header.php'; ?>
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Cover</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link " href="../index.php">Home</a>
            <a class="nav-link" href="features.php">Features</a>
            <a class="nav-link active" href="contact.php">Contact</a>
          </nav>
        </div>
      </header>
      <h1>Contact</h1>
<form action="submit_contact.php" method="post">
  <div style="margin: 10px 0;">
    <label for="name" style="display: inline-block; width: 120px;">Name:</label>
    <input type="text" id="name" name="name" style="display: inline-block; width: 300px;">
  </div>
  <div style="margin: 10px 0;">
    <label for="email" style="display: inline-block; width: 120px;">Email:</label>
    <input type="email" id="email" name="email" style="display: inline-block; width: 300px;">
  </div>
  <div style="margin: 10px 0;">
    <label for="message" style="display: inline-block; width: 120px;">Message:</label>
    <textarea id="message" name="message" style="display: inline-block; width: 300px;"></textarea>
  </div>
  <div style="margin: 10px 0;">
    <input type="submit" value="Submit" style="display: inline-block;">
  </div>
</form>

<?php include 'footer.php' ?>