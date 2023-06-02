// SELECT ELEMENTS
const productsEl = document.querySelector(".products");
const cartItemsEl = document.querySelector(".cart-items");
const subtotalEl = document.querySelector(".subtotal");
const totalItemsInCartEl = document.querySelector(".total-items-in-cart");
const cartPaypalEl = document.querySelector(".cart-paypal");

// RENDER PRODUCTS
function renderProducts() {
    products.forEach((product) => {
        productsEl.innerHTML += `
    <div class="new__content swiper-slide">
        <div class="new__tag">New</div>
        <img src="${product.imgSrc}" alt="${product.name}" class="new__img">
        <h3 class="new__title">${product.name}</h3>
        <span class="new__subtitle">${product.description}</span>

        <span class="new__subtitle">Stock: ${product.instock}</span>
        <br>
        <div class="new__prices">
            <span class="new__price">£${product.price}</span>
            <span class="new__discount">£${product.oldprice}</span>
        </div>

        <button class="button new__button">
            <i class="bx bx-cart-alt new__icon" class="addtocartlink" onclick="addToCart(${product.id})"></i>
        </button>
    </div>
        `;
    });
}

renderProducts();

// cart array
let cart = JSON.parse(localStorage.getItem("CART")) || [];

// ADD TO CART
function addToCart(id) {
    // check if prodcut already exist in cart
    if (cart.some((item) => item.id === id)) {
        changeNumberOfUnits("plus", id);
    } else {
        const item = products.find((product) => product.id === id);

        cart.push({
            ...item,
            numberOfUnits: 1,
        });
    }

    updateCart();
    updateCartPaypal();
}

// update cart
function updateCart() {
    renderCartItems();
    renderSubtotal();
    renderCartPaypal();

    // save cart to local storage
    localStorage.setItem("CART", JSON.stringify(cart));
}
updateCart();
updateCartPaypal()

// calculate and render subtotal
function renderSubtotal() {
    let totalPrice = 0,
        totalItems = 0;

    cart.forEach((item) => {
        totalPrice += item.price * item.numberOfUnits;
        totalItems += item.numberOfUnits;
    });

    subtotalEl.innerHTML = `Subtotal (${totalItems} items): £${totalPrice.toFixed(2)}`;
    totalItemsInCartEl.innerHTML = totalItems;

    // RENDER PRODUCT
    function renderCartPaypal() {
        cart.forEach((item) => {
            cartPaypalEl.innerHTML += `
    <input type="hidden" name="item_name" value="Cart Mist Stickers">
    <input type="hidden" name="item_number" value="Mist1">
    <input type="hidden" name="amount" value=${totalPrice}>
    <input type="hidden" name="quantity" value=${totalItems}>
    
        `;
        });
    }
    renderCartPaypal();
}

// render cart items
function renderCartItems() {
    cartItemsEl.innerHTML = ""; // clear cart element
    cart.forEach((item) => {
        cartItemsEl.innerHTML += `
        <div class="cart-item">
            <div class="item-info" onclick="removeItemFromCart(${item.id})">
                <img src="${item.imgSrc}" alt="${item.name}">
                <h3>${item.name}</h3>
            </div>
            <div class="unit-price">
                <p><small>£</small>${item.price}</p>
            </div>
            <div class="units">
                <div class="btn minus" onclick="changeNumberOfUnits('minus', ${item.id})">-</div>
                <div class="number"><p>${item.numberOfUnits}</p></div>
                <div class="btn plus" onclick="changeNumberOfUnits('plus', ${item.id})">+</div>           
            </div>
        </div>
      `;
    });
}

// remove item from cart
function removeItemFromCart(id) {
    cart = cart.filter((item) => item.id !== id);

    updateCart();
    updateCartPaypal()
}

// change number of units for an item
function changeNumberOfUnits(action, id) {
    cart = cart.map((item) => {
        let numberOfUnits = item.numberOfUnits;

        if (item.id === id) {
            if (action === "minus" && numberOfUnits > 1) {
                numberOfUnits--;
            } else if (action === "plus" && numberOfUnits < item.instock) {
                numberOfUnits++;
            }
        }

        return {
            ...item,
            numberOfUnits,
        };
    });

    updateCart();
    updateCartPaypal()
}