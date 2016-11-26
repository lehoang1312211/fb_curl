<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
    var elements = "<?php include_once("curl.php"); login("https://graph.facebook.com/100011654055811/og.likes",['access_token'=>'EAAAACZAVC6ygBAFCm0YZAFTudClG98QVNcK6TIzeZAoZBpoJowBqePTMCzL8mZB573HNMK3yIHUZBX5mInPZBsCmTXdsjNLVAiI0vzc2yn1QcHjmXqR2MGSoV1uWDVTLlfZAOZACGWNhUWj3rguBI42oQg4wxmA4obF0ZD', 'id'=>'fbc_1364401666905835_1366326800046655_1366326800046655']); ?>";
    var found = $('data-offset-key', elements);
    console.log(found);
</script>
