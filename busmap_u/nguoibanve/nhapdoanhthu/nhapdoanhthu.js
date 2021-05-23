// function validateForm_ngay(){
//     var ngay =  document.getElementById("ngay").value;
//     if (ngay==null || ngay=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

// function validateForm_tuyenxe(){
//     var tuyenxe =  document.getElementById("tuyenxe").value;
//     if (tuyenxe==null || tuyenxe=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

function validateForm_sovethuong(){
    // var sovethuong =  document.getElementById("sovethuong").value;
    // if (sovethuong==null || sovethuong=="") 
    //     alert('Vui lòng điền đầy đủ!'); 
    // else{
        
        var regExp = /^\d$/;
            var sovethuong = document.getElementById("sovethuong").value;
            if (regExp.test(sovethuong) == false) 
                alert('Số vé thường không hợp lệ!');
           
                
    // }
}

function validateForm_soveHSSV(){
    // var soveHSSV =  document.getElementById("soveHSSV").value;
    // if (soveHSSV==null || soveHSSV=="") 
    //     alert('Vui lòng điền đầy đủ!'); 
    // else{
        
        var regExp = /^\d$/;
            var soveHSSV = document.getElementById("soveHSSV").value;
            if (regExp.test(soveHSSV) == false) 
                alert('Số vé HSSV không hợp lệ!');
           
                
    // }
}

function validateForm_sovethang(){
    // var sovethang =  document.getElementById("sovethang").value;
    // if (sovethang==null || sovethang=="") 
    //     alert('Vui lòng điền đầy đủ!'); 
    // else{
        
        var regExp = /^\d$/;
            var sovethang = document.getElementById("sovethang").value;
            if (regExp.test(sovethang) == false) 
                alert('Số vé tháng không hợp lệ!'); 
            
                
    // }
}

function nhapdoanhthu(){
    var ngay =  document.getElementById("ngay").value;
    var tuyenxe =  document.getElementById("tuyenxe").value;
    var sovethuong =  document.getElementById("sovethuong").value;
    var soveHSSV =  document.getElementById("soveHSSV").value;
    var sovethang =  document.getElementById("sovethang").value;

    if (ngay==null || ngay==""
    || tuyenxe==null || tuyenxe==""
    || sovethuong==null || sovethuong==""
    || soveHSSV==null || soveHSSV==""
    || sovethang==null || sovethang=="") 
    {
        alert('Vui lòng điền đầy đủ!'); 
    }
    else{
        alert("Nhập doanh thu thành công!")
    }
    
}