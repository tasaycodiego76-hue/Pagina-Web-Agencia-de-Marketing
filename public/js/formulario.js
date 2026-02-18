document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById('hc-form');
    const statusDiv = document.getElementById('form-status');
    const submitBtn = document.getElementById('hc-submit-btn');
    const submitText = document.getElementById('hc-submit-text');
    const submitLoader = document.getElementById('hc-submit-loader');

    // VALIDACIÓN DE TELÉFONO
    window.validatePhone = function(input) {
        const value = input.value;
        const counter = document.getElementById('phone-counter');

        counter.textContent = `${value.length} de 9 caracteres`;

        if (/^9\d{8}$/.test(value)) {
            input.setCustomValidity("");
        } else {
            input.setCustomValidity("Número inválido: debe comenzar con 9 y tener 9 dígitos.");
        }
    };

    window.customPhoneMessage = function(input) {
        input.reportValidity();
    };

    // ENVÍO DEL FORMULARIO
    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        statusDiv.classList.remove('visible');
        statusDiv.textContent = '';

        submitText.style.display = 'none';
        submitLoader.style.display = 'inline-block';

        const formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('[name="_token"]').value
                },
                body: formData
            });

            const html = await response.text();
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');

            const modalData = doc.getElementById('modal-data');
            const success = modalData?.dataset?.success;
            const error = modalData?.dataset?.error;

            if (success) {
                showStatus(success, 'green');
                form.reset();
                document.getElementById('phone-counter').textContent = '0 de 9 caracteres';
            } else if (error) {
                showStatus(error, 'red');
            }

        } catch (err) {
            showStatus('Error de conexión con el servidor.', 'red');
        } finally {
            submitText.style.display = 'inline';
            submitLoader.style.display = 'none';
        }
    });

    function showStatus(message, color) {
        statusDiv.textContent = message;
        statusDiv.style.padding = '1em';
        statusDiv.style.borderRadius = '5px';
        statusDiv.style.backgroundColor = color === 'green' ? '#d4edda' : '#f8d7da';
        statusDiv.style.color = color === 'green' ? '#155724' : '#721c24';
        statusDiv.style.border = color === 'green' ? '1px solid #c3e6cb' : '1px solid #f5c6cb';

        statusDiv.classList.add('visible');

        setTimeout(() => {
            statusDiv.classList.remove('visible');
            setTimeout(() => {
                statusDiv.textContent = '';
                statusDiv.removeAttribute('style');
            }, 500);
        }, 5000);
    }

});
