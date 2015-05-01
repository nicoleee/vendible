$(document).ready(function(){

	//*this grabs all the poster pieces*//

	var posterPieces = $(".poster-piece");

	//*attach click event listener to all pieces*//

	posterPieces.on("click",function(event){
		var target = this.getAttribute('data-for');

		posterPieces.each(function(index) {
			if (target == this.getAttribute('data-name')) {
				$(this).removeClass('hidden');
			}
		});
	});

});