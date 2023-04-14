function Validator(options){


	var selectorRules = {};

	// hàm thực hiện validate

	function validate(inputElement, rule){	
							var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
							var errorMessage;
							// lấy ra các rules của selector 
							var rules = selectorRules[rule.selector];
							// lập qua từng rules và kiểm tra
							for(var i = 0 ; i < rules.length; ++i){
								errorMessage = rules[i](inputElement.value);
								if (errorMessage) break;
							}
							if(errorMessage){

								errorElement.innerText = errorMessage;
								inputElement.parentElement.classList.add('invalid');

							}
							else{
								errorElement.innerText = '';
								inputElement.parentElement.classList.remove('invalid');
							}
							return !errorMessage;


	}


		// tên form
		var formElement = document.querySelector(options.form);


		// console.log(options.rules);
		if(formElement){

			// khi submit form  khong submit được
			formElement.onsubmit = function(e){
				var isFormValid;
				// Lặp qua từng rule và validate
				options.rules.forEach(function (rule){

					var inputElement = formElement.querySelector(rule.selector);
					var isValid = validate(inputElement, rule);
					if (!isValid){
						isFormValid = false;
						e.preventDefault();
					}

				});

					 	//  var enableInputs = formElement.querySelectorAll('[name]:not([disabled])');
						 // console.log(enableInputs.reduce);
						
				if (isFormValid){
					// trường hợp submit với javascript
					if(typeof options.onSubmit === 'function'){

						var enableInputs = formElement.querySelectorAll('[name]');

						var formValues = Array.from(enableInputs).reduce(function (values, input){
							values[input.name] = input.value;
							return values;
						}, {});


					options.onSubmit(formValues);
		
					}
					//Trường hợp submit với hanh vi mặc định
				else{
					 

					 formElement.submit();

					}
				}



			}

			// Lặp qua mỗi rule và xử lý

			options.rules.forEach(function (rule){
				// lưu lại các rules trong input

				// console.log(selectorRules[rule.selector]);
				if(Array.isArray(selectorRules[rule.selector])){

					selectorRules[rule.selector].push(rule.test);

				}else{
					selectorRules[rule.selector] = [rule.test];
				}
				


				var inputElement = formElement.querySelector(rule.selector);
				if (inputElement) {
					// xử lý trường blur ra khỏi input
					inputElement.onblur = function (){
						validate(inputElement, rule);
					}

					// xử lý trường hợp người dùng nhập vào input
					inputElement.oninput = function(){
						var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
						errorElement.innerText = '';
						inputElement.parentElement.classList.remove('invalid');
					}

				}





			});

			 
	
		}



}


// Định nghĩa rule
// Nguyên tắc của rule 
// khi có lỗi thì trả ra message lỗi 
// khi không có lỗi thì trả undefined

Validator.isRequired = function(selector,message){
	return {
		selector: selector,
		test: function(value){
			return value.trim() ? undefined: message ||'Vui lòng nhập trường này ';
		}
	};
}




Validator.isMasp = function(selector,message){
	return {
		selector: selector,
		test: function(value){
		 // var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			 var regex = /^SP[0-9]\d{1}/;
		return regex.test(value) ? undefined : message || 'Vui lòng nhập lại mã sản phẩm';
		}
	};

}

Validator.isMatl = function(selector,message){
	return {
		selector: selector,
		test: function(value){
		 // var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			 // var regex = /^TL[0-9]\d{1}/;
			var regex = /^TL[0-9]/;
		return regex.test(value) ? undefined : message || 'Vui lòng nhập lại mã thể loại';
		}
	};

}



		Validator.minLength = function(selector, min,message){
	return {
		selector: selector,
		test: function(value){
		 
		return value.length >= min ? undefined : message || `Vui lòng nhập lại tên có ít nhất 4 kí tự sản phẩm`;
		}
	};
}