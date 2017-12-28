    <div class='header'>
    <h3>drawings: 2015 exhibit</h3>
    <p><a href='http://anniemeyerartwork.com/2015/02/march-exhibit-david-shratter-poppies-my-self-and-other-things-of-mine/' target='_blank'>about the exhibit</a> </p>
    </div>
    <div class="yui-gd" style='min-height:530px;'>
        <div class="yui-u first">
            
            <div id="thumbnails">

            </div>
       
        </div>
        
        
        <div class="yui-u">
            <div id='big_image'>
             
             <div style='margin-left:200px;margin-top:180px;'><img src='images/ajax-loader.gif'></div>

            </div>
        </div>
    </div>

     <script>
        //$('.yui-gd').fadeIn('slow'); 
        $('#thumbnails').load('files/2015a.php', function(){
            
            var img="images/medium/poppy 1.jpg";
            var fid="16469729367";
            var title="Poppy 1 | 2014 | pen and ink on Kitakata paper | 7\”H x 5\”W";
            
            <? #include ("start_js.php");?>
            <? include ("thumb2_js.php");?>
            start(img, title, fid);
        });
    </script> 

