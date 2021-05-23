// function validateForm_username(){
//     var username =  document.getElementById("username").value;
//     if (username==null || username=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

function validateForm_email(){
    var email =  document.getElementById("email").value;
    // if (email==null || email=="") 
    //     alert('Vui lòng điền đầy đủ!'); 
    // else{
        
        var regExp = /^[A-Za-z0-9][\w$.]+@[\w]+\.\w+$/;
        var email = document.getElementById("email").value;
        if (regExp.test(email) == false) 
            alert('Email không hợp lệ!');
        
            
    // }
}

function validateForm_phone(){
    var phone =  document.getElementById("phone").value;
    // if (phone==null || phone=="") 
    //     alert('Vui lòng điền đầy đủ!'); 
    // else{
        
        var regExp = /^(0[234][0-9]{8}|1[89]00[0-9]{4})$/;
            var phone = document.getElementById("phone").value;
            if (regExp.test(phone) == false) 
                alert('SĐT không hợp lệ!');
            
                
    // }
}

// function validateForm_address(){
//     var address =  document.getElementById("address").value;
//     if (address==null || address=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }


// function validateForm_password(){
//     var password =  document.getElementById("password").value;
//     if (password==null || password=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

function validateForm_repassword(){
    var password = document.getElementById("password").value;
    var repassword = document.getElementById("repassword").value;
    // if (repassword==null || repassword=="") 
    //     alert('Vui lòng điền đầy đủ!'); 
    // else{
       
        if(password!==repassword){
            alert("Nhập lại mật khẩu không chính xác!")
        }
        
    // }
}

function capnhat(){
    var username =  document.getElementById("username").value;
    var email =  document.getElementById("email").value;
    var phone =  document.getElementById("phone").value;
    var address =  document.getElementById("address").value;
    var password =  document.getElementById("password").value;
    var repassword =  document.getElementById("repassword").value;

    if (username==null || username==""
    || email==null || email==""
    || phone==null || phone==""
    || address==null || address==""
    || password==null || password==""
    || repassword==null || repassword=="") 
    {
        alert('Vui lòng điền đầy đủ!'); 
    }
    else{
        alert("Cập nhật thông tin thành công!");
    }
    
}

