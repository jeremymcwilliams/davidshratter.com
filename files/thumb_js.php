<?php
  
?>


            
            
            $('.thumb').click(function(){
                
                var id = $(this).attr('id');
                var src=$(this).children('img').attr('src');
                var t=$(this).attr('title');                
                $("#big_image").fadeOut('slow', function(){
                $("#big_image").html("<div style='margin-left:200px;margin-top:180px;'><img src='images/ajax-loader.gif'></div>");
                $("#big_image").fadeIn('slow');
                    var n=(src.replace('_s.jpg','.jpg'));
                    var im="<img src='"+n+"'>"; 

                    $('<img />').attr('src', n).load(function(){                    
                         $("#big_image").fadeOut('fast', function(){
                               $('#big_image').html(im);   
                           // $('#big_image').html($(this));
                                $('#big_image').append("<span class='mbf-item'>#gallery "+id+"</span><div id='desc'>"+t+"</div>");
                            
                         });
                         $('#big_image').fadeIn('slow');
                        
                    });                
                });

            });   
