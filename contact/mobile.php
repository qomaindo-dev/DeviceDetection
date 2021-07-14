<DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width-device-width, initial-scale-1"> 
</head>
<body>
    <div id="loadScreen"></div>
    <h1>
        MOBILE VIEW
    </h1>
    <script src="../jquery/jquery.min.js"></script>
<script>
        var _this = this;
    $(document).ready(function(){
        $(window).on('load', function(){ 
            _this.checkScreen();
        });
        $(window).resize(function(){
            _this.checkScreen();
        });
    });
function checkScreen() {
    if (window.screen.availWidth > 768) {
        console.log(window.screen.availWidth);
        window.location.href = "http://localhost/lpdesktop/contact/desktop.html";
    } else {
        // console.log(window.screen.availWidth);
    }
}
</script>

</body>
</html>
