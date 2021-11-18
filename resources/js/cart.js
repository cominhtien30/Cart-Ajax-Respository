import {render} from './loadCarousel';
var $listProductHtml=$('.list-product')
// fetch
$(function() {
    $listProductHtml.children().remove();
    $.ajax({
        url: '/product',
        type: "GET",
        success: function (data) {
            data.forEach(product => {
                $listProductHtml.append(`<div class="item"><div class="card"><div class="card__thumbail"><img class="img-thumbnail image-cart" src="images/${product.image}" alt="cart"></div><div class="card__quantity" id='quantity${product.id}'>x${product.quantity}</div><div class="card__info d-flex flex-column justify-content-center align-items-center"><div class="cart__info__name">${product.name}</div><div class="cart__info__price">$${product.price}</div></div><div class="cart__interact d-flex justify-content-evenly align-items-center">
                <div class="btn-group w-100" role="group" aria-label="Basic mixed styles example">
                    <button type="button" id="add-to-cart" data-id='${product.id}' class="btn btn-success  font-weight-bold"><span class="fs-2 text">+</span></button>
                    <button type="button" id="delete-to-cart" data-id='${product.id}' class="btn btn-warning  font-weight-bold"><span class="fs-2 text">-</span></button>
                    <button type="button" id="remove-to-cart" data-id='${product.id}' class="btn btn-danger  font-weight-bold"><span class="fs-2 text">x</span></button>
                  </div>
            </div></div></div>`)
            });
           render($listProductHtml);
        },
        error: function () {
            $('.overlay').show();
        }
    });
})
