function changeAvatar(input){
    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
    if(input.files && input.files[0]){
        var reader = new FileReader();
        //Sự kiện file đã được load vào website
        reader.onload = function(e){
            //Thay đổi đường dẫn ảnh
            $('#avatar').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function() {
    $('#avatar').click(function(){
        $('#img').click();
    });   

});
$(".mark")(".addToCart").each(function(){
    $(this).on("click",function(){
        alert("hello");
    });
});