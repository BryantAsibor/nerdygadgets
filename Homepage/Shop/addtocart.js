const product = [
    //{
       // id: 0,
      //  image: 'image/N0mKEJoGBVVm.jpg',
        //title: 'Apple MacBook Air (2020)',
       // price: 120,
      //  symbol: '&euro;'
    //},
   // {
     //   id: 1,
    //    image: 'image/hh-2.jpg',
    //    title: 'Air Pods Pro',
    //    price: 60,
    //    symbol: '&euro;'
    //},
    //{
    //    id: 2,
    //    image: 'image/ee-3.jpg',
    //    title: '250D DSLR Camera',
    //    price: 230,
    //    symbol: '&euro;'
    //},
    //{
    //    id: 3,
    //    image: 'image/aa-1.jpg',
    //    title: 'Head Phones',
    //    price: 100,
    //    symbol: '&euro;'




    // }

];


const categories = [...new Set(product.map((item) => item))];
let i = 0;

document.getElementById('root').innerHTML = categories.map((item) => {
    var { image, title, price, symbol } = item;
    var priceInEuros = price * 0.85; // Assuming a fixed conversion rate

    return (
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
            <div class='bottom'>
                <p>${title}</p>
                <h2>${symbol} ${priceInEuros.toFixed(2)}</h2>` +
        "<button onclick='addtocart(" + (i++) + ")'>Toevoegen</button>" +
        `</div>
        </div>`
    );
}).join('');

var cart = [];

function addtocart(a) {
    cart.push({ ...categories[a] });
    displaycart();
}

function delElement(a) {
    cart.splice(a, 1);
    displaycart();
}

function displaycart() {
    let j = 0, total = 0;
    document.getElementById("count").innerHTML = cart.length;

    if (cart.length === 0) {
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = `${product[0].symbol} 0.00`; // Assuming all products have the same symbol
    } else {
        document.getElementById("cartItem").innerHTML = cart.map((items) => {
            var { image, title, price, symbol } = items;
            total += price;
            document.getElementById("total").innerHTML = `${symbol} ${total.toFixed(2)}`;

            return (
                `<div class='cart-item'>
                    <div class='row-img'>
                        <img class='rowimg' src=${image}>
                    </div>
                    <p style='font-size:12px;'>${title}</p>
                    <h2 style='font-size: 15px;'>${symbol} ${price.toFixed(2)}</h2>` +
                "<i class='fa-solid fa-trash' onclick='delElement(" + (j++) + ")'></i></div>"
            );
        }).join('');
    }
}
