Validator({
					form: '#fthemdanhmuc',
					errorSelector:'.thongbao',
					rules:[
						Validator.isRequired('#matl','Chưa nhập mã thể loại'),
						Validator.isRequired('#tentl','Chưa nhập tên thể loại'),
						Validator.isMatl('#matl','Yêu cầu Vd: TL1'),
						
					],
				});