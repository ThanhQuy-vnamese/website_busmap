// function validateForm_nguoigui(){
//     var txttennguoigui =  document.getElementById("txttennguoigui").value;
//     if (txttennguoigui==null || txttennguoigui=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

function validateForm_phonenguoigui(){
    var txtsdtguihang =  document.getElementById("txtsdtguihang").value;
    // if (txtsdtguihang==null || txtsdtguihang=="") 
    //     alert('Vui lòng điền đầy đủ!'); 
    // else{
        
        var regExp = /^(0[234][0-9]{8}|1[89]00[0-9]{4})$/;
            if (regExp.test(txtsdtguihang) == false) 
                alert('SĐT không hợp lệ!');
            
                
    // }
}

// function validateForm_nguoinhan(){
//     var txttennguoinhan =  document.getElementById("txttennguoinhan").value;
//     if (txttennguoinhan==null || txttennguoinhan=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

function validateForm_phonenguoinhan(){
    var txtsdtnhanhang =  document.getElementById("txtsdtnhanhang").value;
    // if (txtsdtnhanhang==null || txtsdtnhanhang=="") 
    //     alert('Vui lòng điền đầy đủ!'); 
    // else{
        
        var regExp = /^(0[234][0-9]{8}|1[89]00[0-9]{4})$/;
            if (regExp.test(txtsdtnhanhang) == false) 
                alert('SĐT không hợp lệ!');
            
                
    // }
}

function guihang(){
    var txttennguoigui =  document.getElementById("txttennguoigui").value;
    var txtsdtguihang =  document.getElementById("txtsdtguihang").value;
    var txttennguoinhan =  document.getElementById("txttennguoinhan").value;
    var txtsdtnhanhang =  document.getElementById("txtsdtnhanhang").value;
    var txttramgui =  document.getElementById("txttramgui").value;
    var txttramnhan =  document.getElementById("txttramnhan").value;
    var txtkhoiluong =  document.getElementById("txtkhoiluong").value;
    var txtmota =  document.getElementById("txtmota").value;

    if (txttennguoigui==null || txttennguoigui==""
    || txtsdtguihang==null || txtsdtguihang==""
    || txttennguoinhan==null || txttennguoinhan==""
    || txtsdtnhanhang==null || txtsdtnhanhang==""
    || txttramgui==null || txttramgui==""
    || txttramnhan==null || txttramnhan==""
    || txtkhoiluong==null || txtkhoiluong==""
    || txtmota==null || txtmota=="") 
    {
        alert('Vui lòng điền đầy đủ!'); 
    }
    else{
        alert("Gửi hàng thành công!")
    }
    
}

// function validateForm_tramgui(){
//     var txttramgui =  document.getElementById("txttramgui").value;
//     if (txttramgui==null || txttramgui=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

// function validateForm_tramnhan(){
//     var txttramnhan =  document.getElementById("txttramnhan").value;
//     if (txttramnhan==null || txttramnhan=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

// function validateForm_khoiluong(){
//     var txtkhoiluong =  document.getElementById("txtkhoiluong").value;
//     if (txtkhoiluong==null || txtkhoiluong=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

// function validateForm_mota(){
//     var txtmota =  document.getElementById("txtmota").value;
//     if (txtmota==null || txtmota=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

