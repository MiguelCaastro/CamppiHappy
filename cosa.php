<div class="product-container">
    <div class="product">
        <img src="imagen_del_producto1.jpg" alt="Producto 1">
        <div class="description">
            <h3>Nombre del Producto 1</h3>
            <p>Descripción del producto que puede ser bastante larga si es necesario.</p>
            <p>Precio: $99.99</p>
            <button>Comprar</button>
        </div>
    </div>

    <div class="product">
        <img src="imagen_del_producto2.jpg" alt="Producto 2">
        <div class="description">
            <h3>Nombre del Producto 2</h3>
            <p>Descripción del producto que puede ser bastante larga si es necesario.</p>
            <p>Precio: $129.99</p>
            <button>Comprar</button>
        </div>
    </div>

    <!-- Agrega más productos aquí si es necesario -->
</div>

<style>

.product-container {
    display: flex;
    flex-direction: column;
    justify-content: flex-end; /* Alinea todos los productos a la derecha */
}

.product {
    display: flex;
    margin: 10px;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
    max-width: 400px;
}

.product img {
    width: 150px;
    height: 150px;
    margin-right: 10px;
}

.product .description {
    flex: 1;
}

.product h3 {
    font-size: 20px;
    margin: 0;
}

.product p {
    margin: 5px 0;
}

.product button {
    background-color: #3498db;
    color: #fff;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
}


</style>