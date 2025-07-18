<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Fashion</title>
    <link rel="shortcut icon" href="{{ asset('icons/icon-1.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9bbc3d5946.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('partials.navbar')

    @include('partials.banner')

    @include('partials.product')

    @include('partials.formal')

    @include('partials.support')

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    @include('partials.modal')

    <script>
        const buyButtons = document.querySelectorAll('.btn.nike-btn');

        let selectedProduct = { name: '', price: 0 };

        buyButtons.forEach(button => {
            button.addEventListener('click', () => {
                const card = button.closest('.card-body');
                selectedProduct.name = card.querySelector('.card-title').innerText;
                selectedProduct.price = parseFloat(card.querySelector('h3').innerText.replace('$', ''));

                document.getElementById('modalProductName').innerText = selectedProduct.name;
                document.getElementById('modalProductPrice').innerText = selectedProduct.price.toFixed(2);
                document.getElementById('quantity').value = 1;
                document.getElementById('totalPrice').innerText = selectedProduct.price.toFixed(2);

                const modal = new bootstrap.Modal(document.getElementById('buyModal'));
                modal.show();
            });
        });

        document.getElementById('quantity').addEventListener('input', () => {
            const qty = parseInt(document.getElementById('quantity').value);
            const total = (qty * selectedProduct.price).toFixed(2);
            document.getElementById('totalPrice').innerText = total;
        });

        document.querySelector('.modal-footer .btn-primary').addEventListener('click', () => {
    const qty = parseInt(document.getElementById('quantity').value);
    const total = (qty * selectedProduct.price).toFixed(2);

    fetch('/transactions', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            product_name: selectedProduct.name,
            quantity: qty,
            price: selectedProduct.price,
            total: total
        })
    })
    .then(response => response.json())
    .then(data => {
        // ✅ Redirect ke halaman transaksi
        window.location.href = '/transactions';
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

    </script>
</body>

</html>
