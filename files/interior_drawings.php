	
    <div class='header'>
        <h3>drawings: interiors</h3>
    </div>
    <div class="yui-gd" style='display:none;min-height:530px;'>
        <div class="yui-u first">
	        <div id="thumbnails">

            </div>
       
        </div>
        
        
        <div class="yui-u" id='second'>
            <div id='big_image'>
	             
            </div>
	    </div>
    </div>

     <script>
        $('.yui-gd').fadeIn('slow'); 
        $('#thumbnails').load('files/id_1.php', function(){
            
            var img="http://farm4.static.flickr.com/3565/3405651714_10d0d618b2.jpg";
            var fid="3405651714";
            var title="bubby and zadie | 2007 | pen and ink on rice paper";
            
            <? include ("start_js.php");?>
            <? include ("thumb_js.php");?>

        });
    </script>     