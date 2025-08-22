const products = [
    {
        name: "Ouro Branco",
        priceNormal: 45.90,
        priceText: "R$ 45.90",
        image: "./img/OuroBranco.png",
        quantity: 0,
        category: "chocolate"
    },
    {
        name: "Sonho de Valsa",
        priceNormal: 39.99,
        priceText: "R$ 39.99",
        image: "./img/SonhoDeValsa.png",
        quantity: 0,
        category: "chocolate"
    },
    {
        name: "Ferrero Rocher",
        priceNormal: 54.90,
        priceText: "R$ 54.90",
        image: "./img/FerreroRocher.png",
        quantity: 0,
        category: "chocolate"
    },
    {
        name: "Galak Nestle",
        priceNormal: 44.90,
        priceText: "R$ 44.90",
        image: "./img/Nestle.png",
        quantity: 0,
        category: "chocolate"
    },
    {
        name: "Bis Lacta",
        priceNormal: 60.99,
        priceText: "R$ 60.99",
        image: "./img/Lacta.png",
        quantity: 0,
        category: "chocolate"
    },
    {
        name: "Confeitos",
        priceNormal: 65.90,
        priceText: "R$ 65.90",
        image: "./img/Confetes.png",
        quantity: 0,
        category: "chocolate"
    },
    {
        name: "Smartphone",
        priceNormal: 299.99,
        priceText: "R$ 299.99",
        image: "./img/Celular.png",
        quantity: 0,
        category: "electronics",
    },
    {
        name: "Earphones",
        priceNormal: 99.99,
        priceText: "R$ 99.99",
        image: "./img/Bluetooth.png",
        quantity: 0,
        category: "electronics",
    },
    {
        name: "Headset",
        priceNormal: 199.99,
        priceText: "R$ 199.99",
        image: "./img/Headset.png",
        quantity: 0,
        category: "electronics",
    },
    {
        name: "Laptop",
        priceNormal: 499.99,
        priceText: "R$ 499.99",
        image: "./img/Laptop.png",
        quantity: 0,
        category: "electronics",
    },
    {
        name: "Smartwatch",
        priceNormal: 149.99,
        priceText: "R$ 149.99",
        image: "./img/Smartwatch.png",
        quantity: 0,
        category: "electronics",
    },
    {
        name: "PS5",
        priceNormal: 999.99,
        priceText: "R$ 999.99",
        image: "./img/PS5.png",
        quantity: 0,
        category: "electronics",
    }
]

const productsordered = products.sort((a, b) => {
    const productA = a.name.toLowerCase();
    const productB = b.name.toLowerCase();

    if (productA < productB) {
        return -1;
    }
    if (productA > productB) {
        return 1;
    }
    return 0;
});
productsordered.forEach((product, index) => {
    const productContainer = document.createElement("div");
    productContainer.className = "col-3 mb-5 ml-5 mr-5 text-center shadow product-box all";
    productContainer.classList.add(product.category);
    productContainer.innerHTML = `
        <div class="row">
            <img src="${product.image}" alt="${product.name}" class="h-100 w-75 bg-light col-12 product-box-img imgProduct">
            <span class="h6 col-12 d-flex justify-content-start m-3 nameProduct">${product.name}</span>
            <div class="col-12 d-flex justify-content-center"></div>
            <span class="col-6 d-flex m-3 priceProduct"><strong>${product.priceText}</strong></span>
         </div>
    `;
    const body = document.getElementById("body");
    body.appendChild(productContainer);
});