<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mellow Mushroom</title>
    <meta name="description" content="Mellow Mushroom offers a higher order of pizza. Order online or check out our menu.">
    <link rel="stylesheet" href="{{ asset('css/menu/menu.css') }}">
</head>
<body style="background-image: url('img/wall.jpeg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <header>
        <nav class="navbar">
            <div class="navbar-brand">
                <img src="img/logo.png" alt="Mellow Mushroom Logo">
            </div>
            <div class="navbar-toggle" id="navbar-toggle">
                <span class="navbar-toggle-icon"></span>
                <span class="navbar-toggle-icon"></span>
                <span class="navbar-toggle-icon"></span>
            </div>
            <div class="navbar-links" id="navbar-links">
                <a href="welcome">Home</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="sales-section">
            <form id="sales-form">
                <div class="card-container">
                    <!-- 6 Sales Cards -->
                    <div class="card">
                        <h2>Pizza 1</h2>
                        <img src="img/pizza.jpeg" alt="Pizza 1">
                        <label>Quantity: <input type="number" name="qty1" class="quantity" data-item="1"></label>
                        <label>Price: <span class="price" data-item="1">$0.00</span></label>
                        <label>Status: <span class="status" data-item="1">Not Added</span></label>
                        <button type="button" class="btn-add" data-item="1">Add to Form</button>
                    </div>
                    <div class="card">
                        <h2>Pizza 2</h2>
                        <img src="img/pizza2.png" alt="Pizza 2">
                        <label>Quantity: <input type="number" name="qty2" class="quantity" data-item="2"></label>
                        <label>Price: <span class="price" data-item="2">$0.00</span></label>
                        <label>Status: <span class="status" data-item="2">Not Added</span></label>
                        <button type="button" class="btn-add" data-item="2">Add to Form</button>
                    </div>
                    <div class="card">
                        <h2>Pizza 3</h2>
                        <img src="img/pizza3.png" alt="Pizza 3">
                        <label>Quantity: <input type="number" name="qty3" class="quantity" data-item="3"></label>
                        <label>Price: <span class="price" data-item="3">$0.00</span></label>
                        <label>Status: <span class="status" data-item="3">Not Added</span></label>
                        <button type="button" class="btn-add" data-item="3">Add to Form</button>
                    </div>
                    <div class="card">
                        <h2>Pizza 4</h2>
                        <img src="img/pizza4.png" alt="Pizza 4">
                        <label>Quantity: <input type="number" name="qty4" class="quantity" data-item="4"></label>
                        <label>Price: <span class="price" data-item="4">$0.00</span></label>
                        <label>Status: <span class="status" data-item="4">Not Added</span></label>
                        <button type="button" class="btn-add" data-item="4">Add to Form</button>
                    </div>
                    <div class="card">
                        <h2>Pizza 5</h2>
                        <img src="img/pizza5.png" alt="Pizza 5">
                        <label>Quantity: <input type="number" name="qty5" class="quantity" data-item="5"></label>
                        <label>Price: <span class="price" data-item="5">$0.00</span></label>
                        <label>Status: <span class="status" data-item="5">Not Added</span></label>
                        <button type="button" class="btn-add" data-item="5">Add to Form</button>
                    </div>
                    <div class="card">
                        <h2>Pizza 6</h2>
                        <img src="img/pizza6.png" alt="Pizza 6">
                        <label>Quantity: <input type="number" name="qty6" class="quantity" data-item="6"></label>
                        <label>Price: <span class="price" data-item="6">$0.00</span></label>
                        <label>Status: <span class="status" data-item="6">Not Added</span></label>
                        <button type="button" class="btn-add" data-item="6">Add to Form</button>
                    </div>
                </div>
                <button type="submit" class="btn-submit">Submit</button>
            </form>
            <div id="results">
                <div class="table-container">
                    <table id="sales-table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('js/menu/menu.js') }}"></script>
</body>
</html>
