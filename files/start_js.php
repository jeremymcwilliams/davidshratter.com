<?php
  
?>
            $('#big_image').html("<div style='margin-left:200px;margin-top:180px;'><img src='images/ajax-loader.gif'></div>");
            $('#big_image').fadeIn('slow');
            var im="<img src='"+ img +"' class='fb'>";
            $('<img />').attr('src', img).load(function(){
                    $('#big_image').fadeOut('fast', function(){
                        $('#big_image').html(im);
                        $('#big_image').append("<span class='mbf-item'>#gallery "+ fid +"</span><div id='desc'>"+ title +"</div>");
                        $('#big_image').fadeIn('slow');
                    });                
                });
