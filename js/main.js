////////////////////////////////////////////////////////////////// JOIN

	$(function(){
		$("#joinform").submit(function(){
			if(  $("#username").val() == "" ){  
				alert("이름으 빈칸입니다.\n확인해 주세요"); //1. 알림창
				$("#username").focus(); //2. 커서가기
				return false;  //3. stop
			}
			// 1. 아이디	
			if(  $("#userid").val() == "" ){  
				alert("아이디가 빈칸입니다.\n확인해 주세요"); //1. 알림창
				$("#userid").focus(); //2. 커서가기
				return false;  //3. stop
			}
			// 2. 비밀번호 빈칸확인
			if(  $("#userpass").val() == "" ){  
				alert("비밀번호가 빈칸입니다.\n확인해 주세요"); //1. 알림창
				$("#userpass").focus(); //2. 커서가기
				return false;  //3. stop
			}
			// 3. 비밀번호 확인칸이 빈칸인지 확인
			if(  $("#userpassre").val() == "" ){  
				alert("비밀번호 확인칸이 빈칸입니다.\n확인해 주세요"); //1. 알림창
				$("#userpassre").focus(); //2. 커서가기
				return false;  //3. stop
			}
			// 4. 이메일이 빈칸인지 확인
			if(  $("#useremail").val() == "" ){  
				alert("이메일이 빈칸입니다.\n확인해 주세요"); //1. 알림창
				$("#useremail").focus(); //2. 커서가기
				return false;  //3. stop
			}
		});
	});
// VER-2
$(function(){
	$("#joinform").submit(function(){
		var joinid= ["#userid" , "#userpass" , "#userpassre" , "#useremail" ];
		var joinidvalue= ["아이디가" , "비밀번호가" , "비밀번호 확인칸이" , "이메일이" ];
		
		for(  var i=0;  i<joinid.length; i++)
		{
			if(  $(joinid[  i  ]).val() == "" ){  
				alert(joinidvalue[  i  ]+" 빈칸입니다.\n확인해 주세요"); 
				$(joinid[  i  ]).focus();
				return false;   
			}
		}

	});
});

////////////////////////////////////////////////////////////////// LOGIN
$(function(){
	$("#loginform").submit(function(){
		// 1. 아이디	
		if(  $("#userid").val() == "" ){  
			alert("아이디가 빈칸입니다.\n확인해 주세요"); //1. 알림창
			$("#userid").focus(); //2. 커서가기
			return false;  //3. stop
		}
		// 2. 비밀번호 빈칸확인
		if(  $("#userpass").val() == "" ){  
			alert("비밀번호가 빈칸입니다.\n확인해 주세요"); //1. 알림창
			$("#userpass").focus(); //2. 커서가기
			return false;  //3. stop
		}
	});
});