document.addEventListener("DOMContentLoaded", () => {
    const navbarToggle = document.getElementById('navbar-toggle');
    const navbarLinks = document.getElementById('navbar-links');

    navbarToggle.addEventListener('click', () => {
        navbarLinks.classList.toggle('active');
    });

    const form = document.getElementById('sales-form');
    const resultsDiv = document.getElementById('results');
    const addButtons = document.querySelectorAll('.btn-add');

    addButtons.forEach(button => {
        button.addEventListener('click', () => {
            const itemNumber = button.getAttribute('data-item');
            const qty = document.querySelector(`input[name="qty${itemNumber}"]`).value;
            const price = document.querySelector(`input[name="price${itemNumber}"]`).value;

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
            } else {
                alert("Please enter both quantity and price.");
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
    