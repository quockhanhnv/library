$('document').ready(function(){
	$('.major-form').validate({
		rules:
		{
			majors_name: 'required',
			majors_detail: 'required',
		},
		messages:
		{
			majors_name: {
				required: 'Vui lòng nhập tên chuyên ngành'
			},
			majors_detail: {
				required: 'Vui lòng nhập mô tả'
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