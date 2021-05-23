function themxebuyt(){

    var tuyenxe =  document.getElementById("tuyenxe").value;
    var biensoxe =  document.getElementById("biensoxe").value;

    if (tuyenxe==null || tuyenxe==""
    || biensoxe==null || biensoxe=="") 
    {
        alert('Vui lòng điền đầy đủ!'); 
    }
    else{
        alert("Thêm xe buýt thành công!")
    }
    
}