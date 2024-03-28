document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("#card-form");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        const cardNumber = document.querySelector('#credit_card_number').value;
        
        function isValidCardNumber(number) {
            const regex = new RegExp("^[0-9]{16}$");
            if (!regex.test(number)) {
                return false;
            }
            return number.split('').reverse().map(x => parseInt(x, 10))
                .map((x, idx) => idx % 2 ? ((x * 2 > 9) ? (x * 2 - 9) : (x * 2)) : x)
                .reduce((accum, x) => accum + x) % 10 === 0;
        }

        const validationResult = isValidCardNumber(cardNumber) ? 'Nomor kartu valid!' : 'Nomor kartu tidak valid!';
        document.getElementById('validation-result').innerText = validationResult;
    });
});