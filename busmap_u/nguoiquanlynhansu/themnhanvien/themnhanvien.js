// function validateForm_ten(){
//     var ten =  document.getElementById("ten").value;
//     if (ten==null || ten=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

function validateForm_email(){
    var email =  document.getElementById("email").value;
    // if (email==null || email=="") 
    //     alert('Vui lòng điền đầy đủ!'); 
    // else{
        
        var regExp = /^[A-Za-z][\w$.]+@[\w]+\.\w+$/;
        var email = document.getElementById("email").value;
        if (regExp.test(email) == false) 
            alert('Email không hợp lệ!');
        
            
    // }
}

function validateForm_sdt(){
    var sdt =  document.getElementById("sdt").value;
    // if (sdt==null || sdt=="") 
    //     alert('Vui lòng điền đầy đủ!'); 
    // else{
        
        var regExp = /^(0[234][0-9]{8}|1[89]00[0-9]{4})$/;
            var sdt = document.getElementById("sdt").value;
            if (regExp.test(sdt) == false) 
                alert('SĐT không hợp lệ!'); 
            
                
    // }
}

// function validateForm_diachi(){
//     var diachi =  document.getElementById("diachi").value;
//     if (diachi==null || diachi=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

// function validateForm_ngaysinh(){
//     var ngaysinh =  document.getElementById("ngaysinh").value;
//     if (ngaysinh==null || ngaysinh=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

// function validateForm_chucvu(){
//     var chucvu =  document.getElementById("chucvu").value;
//     if (chucvu==null || chucvu=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

function themnhanvien(){
    var ten =  document.getElementById("ten").value;
    var email =  document.getElementById("email").value;
    var sdt =  document.getElementById("sdt").value;
    var diachi =  document.getElementById("diachi").value;
    var ngaysinh =  document.getElementById("ngaysinh").value;
    var chucvu =  document.getElementById("chucvu").value;

    if (ten==null || ten==""
    || email==null || email==""
    || sdt==null || sdt==""
    || diachi==null || diachi==""
    || ngaysinh==null || ngaysinh==""
    || chucvu==null || chucvu=="") 
    {
        alert('Vui lòng điền đầy đủ!'); 
    }
    else{
        alert("Thêm nhân viên thành công!")
    }
    
}

