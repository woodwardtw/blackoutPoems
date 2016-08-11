<ul class="flex-container">
	  <li class="flex-item" id="origin">
	  <?php 

	  $originText = explode(' ', get_the_content()); 
	  $length = count($originText);
	  $i = 0;
	  while ($i < $length) {
	  	echo ' <button id="btn'. $i .'" class="buttonProps button" onclick="blackOut(blackout'. $i .');highLight(btn'. $i .')">' . $originText[$i] .'</button>';
	  	$i++;
	  }

	  ?>	  	
	  </li>

	  <li class="flex-item" id="blackout">
	  <?php 

	  $originText = explode(' ', get_the_content()); 
	  $length = count($originText);
	  $i = 0;
	  while ($i < $length) {
	  	echo ' <div class="black" id="blackout'. $i .'">' . $originText[$i] . '</div>';
	  	$i++;
	  }
	  ?></li>	
	</ul>

		<button id="save_image_locally" >Download an Image</button>	
	    <button onclick="grabIt();">Grab It</button>	

    
