totalCart();
$(".item #add-to-cart").click(function () {
    const id = $(this).data('id');
    const url=  `/addCart/${id}`
    handleCart(url,id);
});
$(".item #delete-to-cart").click(function () {
    const id = $(this).data('id');
    const url=  `/deleteCart/${id}`;
    handleCart(url,id);
});
$(".item #remove-to-cart").click(function () {
    const id = $(this).data('id');
    const url=  `/removeCart/${id}`;
    handleCart(url,id);
});

function handleCart(url,id,type='GET'){
    $.ajax({
        url,
        type,
        success: function (quantity) {
            $(`.owl-item #quantity${id}`).html(`x${quantity}`);
            totalCart();
        },
        error: function () {
            $('.overlay').show();
        }
    });
}
function totalCart(){
    $.ajax({
        url:'/totalCart',
        type:'GET',
        success: function (total) {
            $(`#total-cart`).html(`$${total}`);
        },
        error: function () {
            $('.overlay').show();
        }
    });
}
