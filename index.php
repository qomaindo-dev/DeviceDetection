<div id = "hidden" style = "display:none"></div>
<script src="jquery/jquery.min.js"></script>
<script>
    $( document ).ready(function() {
    $('#hidden').load('index.php', function() {
        if( /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            window.location.href = "https://fabil.co.id/contactv3/lpmobile/fabil-natural/";
        } else {
            window.location.href = "https://fabil.co.id/contactv3/desktop";
        }
        });
    });
</script>