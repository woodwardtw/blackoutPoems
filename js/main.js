function blackOut(div) {
    var className = div.getAttribute("class");
    if (className == "black") {
        div.className = "white";
    } else {
        div.className = "black";
    }
}

function highLight(div) {
    var className = div.getAttribute("class");
    if (className == "black") {
        div.className = "white";
    } else {
        div.className = "black";
    }
}

function grabIt() {
    var theDiv = document.getElementById('blackout');
    var chosenWords = theDiv.getElementsByClassName('white');
    var chosenLength = chosenWords.length;
    var i = 0;
    var thePoem = [];
    var theString ='';
    while (i < chosenLength) {
    	 var plainText = chosenWords.item(i).innerHTML;
    	 thePoem.push(plainText);      	
    	 theString = theString + ' ' + plainText;
    	 	if (i == 6 || chosenLength) {
    	 		var theTitle = theString;
    	 	}
    	 console.log(thePoem);
    	 console.log(theString);
    	 console.log('the title -' + theTitle);
    	i++;
    };    
}


jQuery('#save_image_locally').click(function() {
    html2canvas(jQuery('#blackout'), {
        onrendered: function(canvas) {
            var a = document.createElement('a');
            // toDataURL defaults to png, so we need to request a jpeg, then convert for file download.
            a.href = canvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
            a.download = 'blackoutpoem.jpg';
            a.click();
        }
    });
});