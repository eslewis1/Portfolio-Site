<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width, initial-scale=1">
    <title> Erica Lewis</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <script src="https://use.fortawesome.com/41cb11fb.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400" rel="stylesheet">
    <!-- link to jQuery hosted by Google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- script to highlight active page -->



<!--java for active header -->
    <script>
        $(function () {
            // this will get the full URL at the address bar
            var url = window.location.href;
            // passes on every "a" tag
            $("nav a").each(function () {
                // checks if its the same on the address bar
                if (url == (this.href)) {
                    $(this).closest("a").addClass("active-page");
                }
            });
        });
    </script>

<!--moving to work -->
<script>
    $(document).ready(function(){
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
});
</script>

<title>Erica Lewis</title>


</head>

<body>
    <header id = "header-outer-wrapper">
        <div id= "header-inner-wrapper">
            <div id = "header-logo">
                        <a href="index.php">ERICA LEWIS</a>
            </div>
            <nav id = "header-navigation">
                        <p><a href=#total-work>WORK</a></p>
                        <p><a href="about.php">ABOUT</a></p>
                        <p><a href="resume.php">RESUME</a></p>
            </nav>
            <div style = "clear:both;"></div>
        </div>

    </header>