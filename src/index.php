<?php include './inc/header.php'; ?>

  <?php
    $name = $email = $body = '';
    $nameError = $emailError = $bodyError = '';

    // submit form
    if (isset($_POST['submit'])) {
      // name
      if (empty($_POST['name'])) {
        $nameError = 'Name is required.';
      } else {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      }
      // email
      if (empty($_POST['email'])) {
        $emailError = 'Email is required.';
      } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      }
      // body
      if (empty($_POST['body'])) {
        $bodyError = 'Feedback is required.';
      } else {
        $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      }

      if (empty($nameError) && empty($emailError) && empty($bodyError)) {
        $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";
        if (mysqli_query($conn, $sql)) {
          // successful
          header("Location: feedback.php");
        } else {
          echo 'Error' . mysqli_error($conn);
        }
      }
    }
  ?>

  <img src="">
  <h2>Submit Your Feedback</h2>
  <p class="lead text-center">Leave feedback for Your Company</p>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mt-4 w-75" method="POST" >
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control <?php echo $nameError ? 'is-invalid' : null; ?>" id="name" name="name" placeholder="Enter your name">
      <div class="invalid-feedback">
        <?php echo $nameError; ?>
      </div>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control <?php echo $emailError ? 'is-invalid' : null; ?>" id="email" name="email" placeholder="Enter your email">
      <div class="invalid-feedback">
        <?php echo $emailError; ?>
      </div>
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Feedback</label>
      <input type="text" class="form-control <?php echo $bodyError ? 'is-invalid' : null; ?>" id="body" name="body" placeholder="Enter your feedback">
      <div class="invalid-feedback">
        <?php echo $bodyError; ?>
      </div>
    </div>
    <div class="mb-3">
      <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
    </div>
  </form>
<?php include './inc/footer.php'; ?>