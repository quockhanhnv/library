$('document').ready(function(){
	$('.user-form').validate({
		rules:
		{
			email			: 'required',
			name			: 'required',
			password		: 'required',
			confirmpassword	: 'required',
		},
		messages:
		{
			email: {
				required: 'Vui lòng nhập email'
			},
			name: {
				required: 'Vui lòng nhập tên'
			},
			password: {
				required: 'Vui lòng nhập mật khẩu'
			},
			confirmpassword: {
				required: 'Vui lòng xác nhận mật khẩu'
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