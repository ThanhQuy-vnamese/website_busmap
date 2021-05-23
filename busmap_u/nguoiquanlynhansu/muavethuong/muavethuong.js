function validateForm_soluong(){
    var soluong =  document.getElementById("soluong").value;
    if (soluong==null || soluong=="") 
        alert('Vui lòng điền đầy đủ!'); 
    else{
        var regExp = /^\d$/;
        var soluong = document.getElementById("soluong").value;
        if (regExp.test(soluong) == false) 
            alert('Số lượng không hợp lệ!');
        
            
    }
}