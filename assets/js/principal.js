$(function() {
    $('.approve_sched').click(function(){
        var id = $(this).data('id');
        var grade = $(this).data('grade');
        var section = $(this).data('section');
        var base_url = $(this).data('url');
        var formData = {
            'id' : id,
            'grade' : grade,
        }

        $.ajax({
			type: "POST",
		  	url: base_url + "approve/sched",
		  	data: formData,
		  	dataType: "JSON",
		  	success: function(data){
		  		console.log(data);
                if (!data.success) {
                    alert('Error updating schedule');
                    location.reload();
                }else{
                    location.reload();
                }
			}
		});
    })

    $('#update_sched').click(function(){
        var grade = $(this).data('grade');
        var base_url = $(this).data('url');
        var formData = {
            'grade' : grade
        }

        $.ajax({
			type: "POST",
		  	url: base_url + "update/sched",
		  	data: formData,
		  	dataType: "JSON",
		  	success: function(data){
		  		console.log(data);
                if (!data.success) {
                    alert('No approved schedule to update');
                    location.reload();
                }else{
                    alert('Schedule status changed');
                    window.location.href= base_url + "principal";
                    // location.reload();
                }
			}
		});
    })
})
