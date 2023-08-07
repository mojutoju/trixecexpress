
$("#ImageMedias").change(function () {
	if (typeof (FileReader) != "undefined") {
		var dvPreview = $("#divImageMediaPreview");
		dvPreview.html("");            
		$($(this)[0].files).each(function () {
			var file = $(this);                
				var reader = new FileReader();
				reader.onload = function (e) {
					var img = $("<img class='img-fluid' />");
					img.attr("style", "width: 500px; height:500px; padding: 10px");
					img.attr("src", e.target.result);
					dvPreview.append(img);
				}
				reader.readAsDataURL(file[0]);                
		});
	} else {
		alert("This browser does not support HTML5 FileReader.");
	}
});
