function changeImg(input){
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

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$(document).ready(function() {
    $('#avatar').click(function(){
        $('#img').click();
    });

    $('.mess-status').each(function(){
        $(this).change(function(){
        var status = parseInt($(this).val());
        var messId=parseInt($(this).data("id"));
        $.post('../../../admin/messages/changemessagestatus',{status:status ,messID:messId},function(data){
       if(data=="ok"){
         $.notify("Thay đổi thành công trạng thái tin nhắn.","success");
       }
       else
        {
            $.notify("không thành công.");
        }
    });
    });
});
    $('.order-status').each(function(){
        $(this).change(function(){
            var status=parseInt($(this).val());
            var orderId=parseInt($(this).data("id"));
           $.post('../../../admin/orders/changeorderstatus',{status:status ,orderID:orderId},function(data){
       if(data=="ok"){
         $.notify("Thay đổi thành công trạng thái đơn hàng.","success");
       }
       else
        {
            $.notify("không thành công.");
        }
    });
        });
    });

    $('.update-display-order').each(function(){
      $(this).click(function(){
        var displayOrder= parseInt($(this).parent().find('.display-order').val());
        var currentDisplayOrder=parseInt($(this).data('id'));
        var inputText=$(this).parent().find('.display-order');
        if(displayOrder!=currentDisplayOrder)
        {
          var id=parseInt($(this).parent().find('.display-order').data('id'));
          
           $.post('../../../admin/category/changecategorydisplayorder',{id:id ,order:displayOrder},function(data){
             if(data=="ok"){
              inputText.prop('disabled', true);
               $.notify("Thay đổi thành công.","success");

             }
             else
              {
                  $.notify("không thành công.");
              }
            });
         };
       });
    });
var url      = window.location.href; 
$('ul.nav.menu li').each(function(){
  var currentUrl=$(this).find('a').attr('href');
  if(currentUrl==url){
    $(this).addClass('active');
  }
});
    $('.enable-textinput').each(function(){
      $(this).click(function(){
        $(this).parent().find('.display-order').prop('disabled', false);
        $(this).parent().find('.display-order').focus();
      });
    });
});
$("div.alert").delay(3000).slideUp();