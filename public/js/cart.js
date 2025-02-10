document.addEventListener("DOMContentLoaded", function () {
    let cartData = JSON.parse(sessionStorage.getItem("cart")) || {};
    const cartCounter = document.querySelector(".cart-count");
    const floatingCart = document.createElement("div");

    floatingCart.classList.add("floating-cart");
    floatingCart.innerHTML = `<i class="bx bx-cart"></i> <span class="cart-text">Items in cart: <strong>0</strong></span>`;
    document.body.appendChild(floatingCart);

    document.querySelectorAll(".product").forEach((product) => {
        const productId = product.getAttribute("data-id");

        product.addEventListener("click", function () {
            if (!cartData[productId]) {
                cartData[productId] = 1;
            } else {
                cartData[productId]++;
            }

            updateCart();
            sessionStorage.setItem("cart", JSON.stringify(cartData));
        });
    });

    function updateCart() {
        let totalCount = Object.values(cartData).reduce((acc, count) => acc + count, 0);
        cartCounter.textContent = totalCount;
        floatingCart.querySelector("strong").textContent = totalCount;

        if (totalCount > 0) {
            floatingCart.style.display = "flex";
        } else {
            floatingCart.style.display = "none";
        }
    }

    updateCart();
});
