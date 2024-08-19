<script src="js/jQuery.js"></script>
<script src="js/jquery.liveType.js"></script>
<script src="js/wow.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.example').liveType({
            typeSpeed          : 100,
            pauseEvery         : 40,
            pauseTime          : 1500,
            pauseOnPunctuation : true,
            punctuationChars   : ['.', '.', '?', '!', ':', ';'],
            cursorEffect       : true,
            cursorSpeed        : 1000,
            cursor             : '',
            cursorClass        : 'cursor'
        });
    })
    new WOW().init();
</script>
