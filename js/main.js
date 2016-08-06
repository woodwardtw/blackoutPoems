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
    console.log(theDiv);
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