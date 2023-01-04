<?php include './inc/header.php'; ?>
  <img src="">
  <h2>Submit Your Feedback</h2>
  <p class="lead text-center">Leave feedback for Your Company</p>
  <form action="" class="mt-4 w-75">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
    </div>
    <div class="mb-3">
      <label for="feedback" class="form-label">Feedback</label>
      <input type="text" class="form-control" id="feedback" name="feedback" placeholder="Enter your feedback">
    </div>
    <div class="mb-3">
      <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
    </div>
  </form>
<?php include './inc/footer.php'; ?>