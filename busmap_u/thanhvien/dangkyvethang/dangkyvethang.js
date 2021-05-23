// function validateForm_datestart(){
//     var datestart =  document.getElementById("datestart").value;
//     if (datestart==null || datestart=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

// function validateForm_name(){
//     var name =  document.getElementById("name").value;
//     if (name==null || name=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

// function validateForm_ngaysinh(){
//     var ngaysinh =  document.getElementById("ngaysinh").value;
//     if (ngaysinh==null || ngaysinh=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

// function validateForm_diachi(){
//     var address =  document.getElementById("address").value;
//     if (address==null || address=="") 
//         alert('Vui lòng điền đầy đủ!'); 
// }

function dangkyvethang(){
    var datestart =  document.getElementById("datestart").value;
    var name =  document.getElementById("name").value;
    var ngaysinh =  document.getElementById("ngaysinh").value;
    var address =  document.getElementById("address").value;

    if (datestart==null || datestart==""
    || name==null || name==""
    || ngaysinh==null || ngaysinh==""
    || address==null || address=="") 
    {
        alert('Vui lòng điền đầy đủ!');
    }
    // else{
    //     window.location="http://127.0.0.1:5500/busmap_Dashboard/thanhvien/thanhtoan/thanhtoan.html";
    // }
    
    
}