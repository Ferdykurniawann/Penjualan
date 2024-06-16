document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById('sales-form');
    const resultsDiv = document.getElementById('results');
    const addButtons = document.querySelectorAll('.btn-add');
    const quantityInputs = document.querySelectorAll('.quantity');
    const prices = [10, 12, 15, 18, 20, 25]; // Example prices for the pizzas

    addButtons.forEach(button => {
        button.addEventListener('click', () => {
            const itemNumber = button.getAttribute('data-item');
            const qtyInput = document.querySelector(`input[name="qty${itemNumber}"]`);
            const qty = qtyInput.value;
            const price = prices[itemNumber - 1] * qty;

            if (qty && price) {
                const hiddenQtyInput = document.createElement('input');
                hiddenQtyInput.type = 'hidden';
                hiddenQtyInput.name = `qty${itemNumber}`;
                hiddenQtyInput.value = qty;

                const hiddenPriceInput = document.createElement('input');
                hiddenPriceInput.type = 'hidden';
                hiddenPriceInput.name = `price${itemNumber}`;
                hiddenPriceInput.value = price;

                form.appendChild(hiddenQtyInput);
                form.appendChild(hiddenPriceInput);

                button.disabled = true;
                button.textContent = "Added";
                button.classList.add("added");

                const status = document.querySelector(`.status[data-item="${itemNumber}"]`);
                status.textContent = "Added";
            } else {
                alert("Please enter quantity.");
            }
        });
    });

    quantityInputs.forEach(input => {
        input.addEventListener('input', () => {
            const itemNumber = input.getAttribute('data-item');
            const qty = input.value;
            const priceElement = document.querySelector(`.price[data-item="${itemNumber}"]`);
            const price = prices[itemNumber - 1] * qty;

            if (qty) {
                priceElement.textContent = `$${price.toFixed(2)}`;
            } else {
                priceElement.textContent = `$0.00`;
            }
        });
    });

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        let formData = new FormData(form);
        let salesData = [];

        for (let i = 1; i <= 6; i++) {
            let qty = formData.get(`qty${i}`);
            let price = formData.get(`price${i}`);

            if (qty && price) {
                salesData.push({
                    item: `Pizza ${i}`,
                    qty: qty,
                    price: price
                });
            }
        }

        displaySalesResults(salesData);
    });

    function displaySalesResults(data) {
        const tableBody = document.querySelector('#sales-table tbody');
        tableBody.innerHTML = '';

        data.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${item.item}</td>
                <td>${item.qty}</td>
                <td>${item.price}</td>
            `;
            tableBody.appendChild(row);
        });
    }
});
