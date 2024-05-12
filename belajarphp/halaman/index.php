<?php
//redirect dengan php
/* This will give an error. Note the output
 * above, which is before the header() call */
// header('Location: index1.php?page');
//exit;
?>

<!-- redirect dengan JavaScript -->
<!DOCTYPE html>
<html>
<body>

<script type="text/javascript">
//function myFunction() {
//    location.href = "index1.php?page";
//}

window.location = "index1.php?page";
</script>

</body>
</html>