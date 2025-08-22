<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css "href="./style.css">
</head>
<body class="container-fluid flex-wrap d-flex justify-content-center">

<?php
        $products = [
            [
                "name" => "Ouro Branco",
                "priceNormal" => 45.90,
                "priceText" => "R$ 45.90",
                "image" => "./img/OuroBranco.png",
                "quantity" => 0,
                "category" => "chocolate"
            ],
            [
                "name" => "Sonho de Valsa",
                "priceNormal" => 39.99,
                "priceText" => "R$ 39.99",
                "image" => "./img/SonhoDeValsa.png",
                "quantity" => 0,
                "category" => "chocolate"
            ],
            [
                "name" => "Ferrero Rocher",
                "priceNormal" => 54.90,
                "priceText" => "R$ 54.90",
                "image" => "./img/FerreroRocher.png",
                "quantity" => 0,
                "category" => "chocolate"
            ],
            [
                "name" => "Galak Nestle",
                "priceNormal" => 44.90,
                "priceText" => "R$ 44.90",
                "image" => "./img/Nestle.png",
                "quantity" => 0,
                "category" => "chocolate"
            ],
            [
                "name" => "Bis Lacta",
                "priceNormal" => 60.99,
                "priceText" => "R$ 60.99",
                "image" => "./img/Lacta.png",
                "quantity" => 0,
                "category" => "chocolate"
            ],
            [
                "name" => "Confeitos",
                "priceNormal" => 65.90,
                "priceText" => "R$ 65.90",
                "image" => "./img/Confetes.png",
                "quantity" => 0,
                "category" => "chocolate"
            ],
            [
                "name" => "Smartphone",
                "priceNormal" => 299.99,
                "priceText" => "R$ 299.99",
                "image" => "./img/Celular.png",
                "quantity" => 0,
                "category" => "electronics",
            ],
            [
                "name" => "Earphones",
                "priceNormal" => 99.99,
                "priceText" => "R$ 99.99",
                "image" => "./img/Bluetooth.png",
                "quantity" => 0,
                "category" => "electronics",
            ],
            [
                "name" => "Headset",
                "priceNormal" => 199.99,
                "priceText" => "R$ 199.99",
                "image" => "./img/Headset.png",
                "quantity" => 0,
                "category" => "electronics",
            ],
            [
                "name" => "Laptop",
                "priceNormal" => 499.99,
                "priceText" => "R$ 499.99",
                "image" => "./img/Laptop.png",
                "quantity" => 0,
                "category" => "electronics",
            ],
            [
                "name" => "Smartwatch",
                "priceNormal" => 149.99,
                "priceText" => "R$ 149.99",
                "image" => "./img/Smartwatch.png",
                "quantity" => 0,
                "category" => "electronics",
            ],
            [
                "name" => "PS5",
                "priceNormal" => 999.99,
                "priceText" => "R$ 999.99",
                "image" => "./img/PS5.png",
                "quantity" => 0,
                "category" => "electronics",
            ]
        ];

        usort($products, function($a, $b) {
            return strcasecmp($a['name'], $b['name']);
        });

        foreach ($products as $product) {
            $name = htmlspecialchars($product['name']);
            $image = htmlspecialchars($product['image']);
            $priceText = htmlspecialchars($product['priceText']);
            $category = htmlspecialchars($product['category']);

            echo "
            <div class='col-3 m-5 text-center shadow product-box all'>
                <div class='row'>
                    <img src='{$image}' alt='{$name}' class='w-100 bg-light col-12 product-box-img imgProduct'>
                    <span class='h6 col-12 d-flex justify-content-start m-3 nameProduct'>{$name}</span>
                    <div class='col-12 d-flex justify-content-center'></div>
                    <span class='col-6 d-flex m-3 priceProduct'><strong>{$priceText}</strong></span>
                </div>
            </div>
            ";
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a0cfbec9a7.js" crossorigin="anonymous"></script>
    </body>
</html>