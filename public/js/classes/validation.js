$('document').ready(function(){
	$('.class-form').validate({
		rules:
		{
			classes_name: 'required',
			classes_student_numbers: 'required',
			classes_course: 'required',
		},
		messages:
		{
			classes_name: {
				required: 'Vui lòng nhập tên lớp'
			},
			classes_student_numbers: {
				required: 'Vui lòng sĩ số'
			},
			classes_course: {
				required: 'Vui lòng khóa'
			}
		},
		errorPlacement: function(error, element)
		{
			// error là lable thông báo lỗi
			// element là thẻ input tương ứng
			//debugger;
			$(error).addClass('text-danger');
			error.insertAfter(element);// chèn lable thông báo lỗi sau element
			
		}

	});
});