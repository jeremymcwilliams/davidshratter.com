<?php
  
  

  $url="https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=e5c8401f6f446e6efe06efd7c8df296b&photoset_id=72157651125616585&format=rest";
  $xml=simplexml_load_file($url);
  $set=$xml->photoset;
  foreach($set->photo as $photo){
      $id=$photo->attributes()->id;
      $secret=$photo->attributes()->secret;
      $farm=$photo->attributes()->farm;
      $server=$photo->attributes()->server;
      $title=$photo->attributes()->title;
      
	  
	  $sz="https://api.flickr.com/services/rest/?method=flickr.photos.getSizes&api_key=e5c8401f6f446e6efe06efd7c8df296b&photo_id=$id&format=rest";
	  echo $sz."<br>";
	  $x=simplexml_load_file($sz);
	  $sizes=$x->sizes;
	  foreach ($sizes->size as $size){
	  	$label=$size->attributes()->label;
		if ($label=="Medium"){
			$source=$size->attributes()->source;
		}
	  
	  
	  
	  
	  
	  }
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
      $thumb="http://farm".$farm.".static.flickr.com/".$server."/".$id."_".$secret."_s.jpg";
      
      if (backup_image($source, $title)){
          echo "$title worked<br>";
      }
      else{echo "$title didn't work<br>";}
      
  }
  
      function backup_image($src, $title){
          
            $im="$title.jpg";

            $handle = fopen($src, "r");
            $rawdata = stream_get_contents($handle);

            $path="/home6/catalogr/public_html/davidshratter/images/medium";



            $fp = fopen("$path/$im",'w');
            
            if (fwrite($fp, $rawdata)){
                fclose($fp);
                fclose($handle);
                return true;
            }
            else{
                fclose($fp);
                fclose($handle);                
                return false;
            }

      } 
    
?>
