document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("#card-form");
    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Mencegah pengiriman formulir default
        const cardNumber = document.querySelector('#credit_card_number').value;
        
        // Membuat permintaan POST menggunakan Fetch API
        fetch('validate.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `credit_card_number=${encodeURIComponent(cardNumber)}`
        })
        .then(response => response.text())
        .then(result => {
            // Menampilkan hasil validasi di dalam elemen dengan id 'validation-result'
            document.getElementById('validation-result').innerHTML = result;
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});