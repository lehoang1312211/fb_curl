
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
    var elements = "<?php include_once("curl.php"); login("http://lehoang.tk/",null); ?>";
    var found = $('data-offset-key', elements);
    console.log(found);
</script>
