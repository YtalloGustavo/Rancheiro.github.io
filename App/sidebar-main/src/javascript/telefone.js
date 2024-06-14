document.getElementById('phoneForm').addEventListener('submit', function(event) {
    var phoneInput = document.getElementById('phone').value;
    var phonePattern = /^\(\d{2}\) \d{4,5}-\d{4}$/;
    
    if (!phonePattern.test(phoneInput)) {
        alert('Por favor, insira um número de telefone válido no formato (XX) XXXXX-XXXX ou (XX) XXXX-XXXX.');
        event.preventDefault();
    }
});