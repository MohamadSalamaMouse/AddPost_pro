<?php require 'header.php' ?>
<?php
require_once('config.php');
$res = showPost();
if (mysqli_num_rows($res) > 0) {
  while ($rows = mysqli_fetch_assoc($res)) { ?>
    <div class="article">
      <div class="contanier">
        <h5 style="color: darkblue;"><?php echo $rows['title']; ?></h5>
        <p><?php echo $rows['post']; ?></p>
        <a><button>Read More</button></a>
      </div>
    </div>
<?php
  }
}

?>

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