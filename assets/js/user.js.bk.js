$(function() {
	$('#check_sched').hide();
   $('#select_grade').change(function(){
   		$('#check_sched').show();
   		var grade = $(this).val();
   		var base_url = $(this).data('url');
   		var section = $('#section_select');
   		var formData = {
   			'grade' : grade
   		}

		$.ajax({
			type: "POST",
		  	url: base_url + "get_section",
		  	data: formData,
		  	dataType: "JSON",
		  	success: function(data){
		  		var option = '';

				for (var i = 0; i < data.length; i++) {
					option += '<option value='+ data[i].sec_id +'>'+ data[i].sectionName +'</option>';
				}
				section.html(option);
			}
		});
   })

   $('#add_sched_btn').hide();
   $('#check_sched').click(function(){
   		var base_url = $('#select_grade').data('url');
   		var grade = $('#select_grade').val();
   		var section = $('#section_select').val();
   		// var subject = $('#sub_id').val();
   		// var teacher = $('#teacher_id').val();
   		var schedule_table = $('#schedule_table');
   		var available_table = $('#available_table');
   		var available = '';
   		var item = '';
   		var day = '';
   		var formData = {
   			'grade' : grade,
   			'section' : section,
   			// 'subject' : subject,
   			// 'teacher' : teacher,
   		}

   		// Get Scheduled Subject
   		$.ajax({
			type: "POST",
		  	url: base_url + "get_schedule",
		  	data: formData,
		  	dataType: "JSON",
		  	success: function(data){
		  		item += '<thead><tr><th>Time</th><th>Day</th><th>Subject</th><th>Teacher</th></tr></thead>';
		  		if(data.length > 0){
		  			for (var i = 0; i < data.length; i++) {
						item += '<tbody><tr><td>' + data[i].time_start + '-' + data[i].time_end + '</td><td>'+ data[i].day_id +'</td><td>'+ data[i].subName +'</td><td>'+ data[i].title + '. '+ data[i].lname +'</td></tr></tbody>';
					}
		  		}else{
		  			item += '<tbody><tr><td colspan="4">No schedule found</td></tr></tbody>';
		  		}
				
				schedule_table.html(item);
			}
		});

		$.ajax({
			type: "POST",
		  	url: base_url + "get_available_hour",
		  	data: formData,
		  	dataType: "JSON",
		  	success: function(data){
		  		available += '<thead><tr><th>Time</th><th>Day</th></thead>';
		  		if(data.length > 0){
		  			for (var i = 0; i < data.length; i++) {


		  				var formData = {
		  					'time_id' : data[i].time_id,
		  					'grade' : grade,
   							'section' : section
		  				}
		  				
		  				$.ajax({
							type: "POST",
						  	url: base_url + "get_available_day",
						  	data: formData,
						  	dataType: "JSON",
						  	success: function(data){
						  		console.log(data);
							}
						});

						available += '<tbody><tr><td>' + data[i].time_start + '-' + data[i].time_end + '</td><td>day</td></tr></tbody>';
					}
		  		}else{
		  			available += '<tbody><tr><td colspan="2">No more schedule available</td></tr></tbody>';
		  		}
				
				available_table.html(available);
			}
		});

   })

});