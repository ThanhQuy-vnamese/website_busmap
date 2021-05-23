function validateForm_txtsdtguihang(){
    var txtsdtguihang =  document.getElementById("txtsdtguihang").value;
    // if (sdt==null || sdt=="") 
    //     alert('Vui lòng điền đầy đủ!'); 
    // else{
        
        var regExp = /^(0[234][0-9]{8}|1[89]00[0-9]{4})$/;
            var txtsdtguihang = document.getElementById("txtsdtguihang").value;
            if (regExp.test(txtsdtguihang) == false) 
                alert('SĐT không hợp lệ!'); 
            
                
    // }
}

function validateForm_txtsdtnhanhang(){
    var txtsdtnhanhang =  document.getElementById("txtsdtnhanhang").value;
    // if (sdt==null || sdt=="") 
    //     alert('Vui lòng điền đầy đủ!'); 
    // else{
        
        var regExp = /^(0[234][0-9]{8}|1[89]00[0-9]{4})$/;
            var txtsdtnhanhang = document.getElementById("txtsdtnhanhang").value;
            if (regExp.test(txtsdtnhanhang) == false) 
                alert('SĐT không hợp lệ!'); 
            
                
    // }
}

function guithemhang(){
    var txttennguoigui =  document.getElementById("txttennguoigui").value;
    var txtsdtguihang =  document.getElementById("txtsdtguihang").value;
    var txttennguoinhan =  document.getElementById("txttennguoinhan").value;
    var txtsdtnhanhang =  document.getElementById("txtsdtnhanhang").value;
    var txttuyenduong =  document.getElementById("txttuyenduong").value;
    var txttramnhan =  document.getElementById("txttramnhan").value;
    var txtkhoiluong =  document.getElementById("txtkhoiluong").value;
    var txtmota =  document.getElementById("txtmota").value;

    if (txttennguoigui==null || txttennguoigui==""
    || txtsdtguihang==null || txtsdtguihang==""
    || txttennguoinhan==null || txttennguoinhan==""
    || txtsdtnhanhang==null || txtsdtnhanhang==""
    || txttuyenduong==null || txttuyenduong==""
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