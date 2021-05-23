// function validateForm_email(){
//     var usename =  document.getElementById("usename").value;
//     // if (email==null || email=="") 
//     //     alert('Vui lòng điền đầy đủ!'); 
//     // else{
        
//         var regExp = /^[A-Za-z][\w$.]+@[\w]+\.\w+$/;
//         var email = document.getElementById("email").value;
//         if (regExp.test(email)) 
//             alert('Email hợp lệ!'); 
//         else 
//             alert('email không hợp lệ!');
//     // }
// }
// function validateForm_password(){
//     var password =  document.getElementById("password").value;
//     if (password==null || password=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

function login(){

    var usename =  document.getElementById("usename").value;
    var password =  document.getElementById("password").value;


    if (usename==null || usename==""
    || password==null || password=="") 
    {
        alert('Vui lòng điền đầy đủ!'); 
    }
    else{
        alert("Đăng nhập thành công!")
    }
    
}