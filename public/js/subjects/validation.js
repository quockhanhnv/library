$('document').ready(function(){
	$('.subject-form').validate({
		rules:
		{
			subjects_name			: 'required',
			subjects_credits		: 'required',
		},
		messages:
		{
			subjects_name: {
				required: 'Vui lòng nhập tên môn học'
			},
			subjects_credits: {
				required: 'Vui lòng nhập số tín chỉ'
			},
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