<?php
require_once('config.php');

if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $addpost = $_POST['addpost'];
  AddPost($title, $addpost);
}

?>
<?php require 'header.php' ?>
<!-- add post -->
<div class="articles">
  <div class="container">
    <h4>Add Post</h4>
    <form action="addPost.php" method="post">
      <label>Title</label>
      <input type="text" placeholder="Enter title" name="title">
      <label>Post</label>
      <input type="text" placeholder="Enter a Post" name="addpost">
      <input type="submit" name="submit" value="AddPost">
    </form>
  </div>
</div>

<!--jquery-->
<script src="js/jquery-3.6.0.min.js"></script>
<!--materialize-->
<script src="js/materialize.min.js"></script>
<script>
  $(document).ready(function() {
    $('.sidenav').sidenav();
  });
</script>
</body>

</html>