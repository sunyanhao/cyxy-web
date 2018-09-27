
      function check(form){

            if(form.username.value==''){
           	     confirm("请输入您的名字");
           	     // form.username.focus();
           	     return false;
            }

            var reg = /^[\u4E00-\u9FA5]{2,4}$/; 
            var str = form.username.value;
            if (!reg.test(str)) {
                 alert("姓名格式为2-4个汉字，请重新输入"); 
                 return false;
            }

            if(form.phone.value==''){
           	     alert("请输入您的手机号");
           	     form.phone.focus();
           	     return false;
            }
 
            var te = /^1\d{10}$/
            var pho = form.phone.value;
            if (!te.test(pho)) {
                 alert("您输入的手机号格式不对，请重新输入。"); 
                 return false;
            }

            if(form.message.value==''){
           	     alert("请输入您的留言信息");
           	     form.message.focus();
           	     return false;
            }

            alert("信息已提交，稍后会有客服与您取得联系。");
            

      } 