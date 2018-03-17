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

	$('#subject_select').change(function(){
   		var day = $('#day_select');
   		var base_url = $(this).data('url');

   		$.ajax({
			type: "GET",
			url: base_url + "day_select",
			dataType: "JSON",
			success: function(data){
				var option = '';
				option += '<option value="">Choose Day</option>';

				for (var i = 0; i < data.length; i++) {
					option += '<option value='+ data[i].days +'>'+ data[i].days +'</option>';
				}
				day.html(option);
			}
		});

   	})

   	$('#day_select').change(function(){
   		var time = $('#time_select');
   		var base_url = $(this).data('url');
   		var grade = $('#select_grade').val();
   		var section = $('#section_select').val();
   		var subject = $('#subject_select').val();
   		var day = $(this).val();
   		var formData = {
   			'grade' : grade,
   			'section' : section,
   			'subject' : subject,
   			'day' : day,
   		}

   		$.ajax({
			type: "POST",
			url: base_url + "time_select",
			data: formData,
			dataType: "JSON",
			success: function(data){
				var option = '';
				option += '<option value="">Choose Time</option>';

				for (var i = 0; i < data.length; i++) {
					option += '<option value='+ data[i].time_id +'>'+ data[i].time_start +' - '+ data[i].time_end +'</option>';
				}
				time.html(option);
			}
		});

   	})

   	$('#time_select').change(function(){
   		var time = $(this).val();
   		var base_url = $(this).data('url');
   		var grade = $('#select_grade').val();
   		var section = $('#section_select').val();
   		var subject = $('#subject_select').val();
   		var day = $('#day_select').val();
   		var teacher = $('#teacher_select');
   		var formData = {
   			'grade' : grade,
   			'section' : section,
   			'subject' : subject,
   			'day' : day,
   			'time' : time,
   		}

   		$.ajax({
			type: "POST",
			url: base_url + "teacher_select",
			data: formData,
			dataType: "JSON",
			success: function(data){
				var option = '';
				option += '<option value="">Choose Teacher</option>';

				for (var i = 0; i < data.length; i++) {
					option += '<option value='+ data[i].teacher_id +'>'+ data[i].lname +' - '+ data[i].fname +'</option>';
				}
				teacher.html(option);
			}
		});
   	})

   $('#add_sched_btn').hide();
   $('#check_sched').click(function(){
   		var base_url = $('#select_grade').data('url');
   		var grade = $('#select_grade').val();
   		var section = $('#section_select').val();
   		var subject = $('#subject_select');

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
			type: "GET",
			url: base_url + "get_subject",
			dataType: "JSON",
			success: function(data){
				var option = '';
				option += '<option value="">Choose Subject</option>';

				for (var i = 0; i < data.length; i++) {
					option += '<option value='+ data[i].sub_id +'>'+ data[i].subName +'</option>';
				}
				subject.html(option);
			}
		});
   })
   $('#teacher_select').change(function(){
   		$('#add_sched_btn').show();
   })

   $('#get_sched').click(function(){
   		var base_url = $('#select_grade').data('url');
   		var grade = $('#select_grade').val();
   		var section = $('#section_select').val();
   		var schedule_table = $('#my_schedule');
   		var available = '';
   		var item = '';
   		var day = '';
   		var formData = {
   			'grade' : grade,
   			'section' : section
   		}

   		// Get Scheduled Subject
   		$.ajax({
			type: "POST",
		  	url: base_url + "get_my_schedule",
		  	data: formData,
		  	dataType: "JSON",
		  	success: function(data){
				console.log(data);
		  		item += '<thead><tr><th>Time</th><th>Day</th><th>Subject</th><th>Teacher</th><th>Action</th></tr></thead>';
		  		if(data.length > 0){
		  			for (var i = 0; i < data.length; i++) {
						if (data[i].sched_status == '0') {
							var del = 'Delete';

						}else{
							var del = '';
						}
						item += '<tbody><tr><td>' + data[i].time_start + '-' + data[i].time_end + '</td><td>'+ data[i].day_id +'</td><td>'+ data[i].subName +'</td><td>'+ data[i].title + '. '+ data[i].lname + '</td><td><a href=' + base_url + 'schedule/delete/' +  data[i].id + '>' + del + '</a></td></tr></tbody>';
					}
		  		}else{
		  			item += '<tbody><tr><td colspan="4">No schedule found</td></tr></tbody>';
		  		}

				schedule_table.html(item);
			}
		});

   })

});
