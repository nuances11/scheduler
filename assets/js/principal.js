$(function() {
    $('.approve_sched').click(function(){
        var id = $(this).data('id');
        var grade = $(this).data('grade');
        var section = $(this).data('section');
        var base_url = $(this).data('url');
        var formData = {
            'id' : id,
            'grade' : grade,
            'section' : section,
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
})
