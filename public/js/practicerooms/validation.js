$('document').ready(function(){
	$('.practiceroom-form').validate({
		rules:
		{
			practicerooms_name			: 'required',
			practicerooms_computer_numbers		: 'required',
		},
		messages:
		{
			practicerooms_name: {
				required: 'Vui lòng nhập tên'
			},
			practicerooms_computer_numbers: {
				required: 'Vui lòng nhập số lượng máy'
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