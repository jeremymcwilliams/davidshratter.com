 <div class="yui-gd" style='display:none;margin-top:2em;'>
        <div class="yui-u first">

                        <div class='home_image' style="margin-top:4em;">
          
<ul id='homeimages' >
	<li><img src='images/cowboyish boots.jpg'></li>
     <li><img src='images/3ppsquash.jpg'></li>
     <li><img src='images/poppy 9.jpg'></li>
 <li><img src='images/bertie.jpg'></li>
<li><img src='images/se10salmon.jpg'></li>
    <li><img src='images/feet.jpg'></li>
    <li><img src='images/ls2.jpg'></li>
    <li><img src='images/tulips_rug.jpg'></li>
    <li><img src='images/bird.jpg'></li>
    <li><img src='images/david.jpg'></li>
    <!--<li><img src='images/tulip300.jpg'></li>-->
</ul>

          
          
          
          
          
            </div>
        </div>

        
        <div class="yui-u" style="margin-top:5em;">
          <h2>david shratter</h2>
          <div style="min-height:2em;"></div>
          
          <h3>drawings & paintings</h3>

           <div style="min-height:2em;"></div>
          
          <h4>portland, or</h4>
        </div>        
        
        
        <div class="yui-u" style='margin-top:30px;'>
                <h4><span class='nav' title='2015_exhibit' style='color:#cd5106;'>March 2015 exhibit</span></h4>
                <h5 style="margin-top:1em;">"Poppies, My Self, and other things of mine"</h5>
               

        </div>


    </div>
   

    <script>
         $('#david').fadeIn('slow');
         $('.yui-gd').fadeIn('slow');
		 
		 
		 
		       $('.nav').click(function(){
      var id=$(this).attr('title');
      var file='files/'+id+'.php';
     // var file='files/'+id+'.html';
      /*alert(file); */
     
    $('#content').load(file, function(){
        
            $('#homeimages').innerfade({
              speed: 750,
              timeout: 4000,
              type: 'sequence',
              containerheight: '300px', 
              runningclass: 'x'

            });        
    
    
    });

          
            
      });
		 
		 
		 
    </script>
