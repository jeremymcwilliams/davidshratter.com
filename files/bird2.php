
<a class='thumb' id='3391098554' title='bird 19 | 2006-2007 | pencil on paper | 7 1/4"x8"'><img src='http://farm4.static.flickr.com/3649/3391098554_11107bdd87_s.jpg'></a>
<div id='thumb_nav'><span class='nav' id='prev'>previous</span></div>


<script>
    $('#prev').click(function(){
        $('#big_image').fadeOut('slow', function(){    
            $('#thumbnails').load('files/bird1.php', function(){
                var img="http://farm4.static.flickr.com/3639/3391097280_e090033b9f.jpg";
                var fid="3391097280";
                var title="bird 1 | 2006-2007 | pencil on paper | 7 1/4\"x8\"";
                <? include ("start_js.php");?> 
                <? include ("thumb_js.php");?>
            });       
        });
    }); 
    
</script>
