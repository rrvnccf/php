var deleteData = function(nik){

	$.ajax({
		type: "GET",
		url: "delete-data.php",
		dataType: "json",
		data: {deleteId:nik},
		success : function (data) {
			
			$('#msg').html(data);
		  $('#table-container').load('fetch-data.php');
		}
	})
	
};