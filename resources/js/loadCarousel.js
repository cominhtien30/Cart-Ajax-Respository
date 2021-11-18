export function render($listProductHtml) {
    // render
    $listProductHtml.owlCarousel({
        loop: true,
        center: true,
        margin: 20,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        },
    })
    require('./handle');
}


