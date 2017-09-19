<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Payment icons</title>

    <link rel="stylesheet" href="https://unpkg.com/warpaint@0.0.9/dist/warpaint.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Source+Sans+Pro:300" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">

</head>
<body>
    <?php include("assets/svg/payment-sprite.svg"); ?>
    <header class="hero row">
        <div class="title absolute-center">
            <h1>Payment icons</h1>
            <p>Your iconset. Ready-to-use.</p>
        </div>
    </header>
    <main class="icons --raised inset-xl">
        <h2>Payment icons</h2>
        <section class="row">
                <div class="column-3">
                    <svg viewBox="0 0 50 50" class="payment-icons">
                    <use xlink:href="#visa"></use>
                </svg>
                <p>Visa</p>
            </div>

            <div class="column-3">
                <svg viewBox="0 0 50 50" class="payment-icons">
                    <use xlink:href="#paypal"></use>
                </svg>
                <p>Paypal</p>
            </div>

            <div class="column-3">
                <svg viewBox="0 0 50 50" class="payment-icons">
                    <use xlink:href="#maestro"></use>
                </svg>
                <p>Maestro</p>
            </div>

            <div class="column-3">
                <svg viewBox="0 0 50 50" class="payment-icons">
                    <use xlink:href="#bancontact"></use>
                </svg>
                <p>Bancontact</p>
            </div>

            <div class="column-3">
                <svg viewBox="0 0 50 50" class="payment-icons">
                    <use xlink:href="#americanexpress"></use>
                </svg>
                <p>American Express</p>
            </div>

            <div class="column-3">
                <svg viewBox="0 0 50 50" class="payment-icons">
                    <use xlink:href="#mastercard"></use>
                </svg>
                <p>Mastercard</p>
            </div>

            <div class="column-3">
                <svg viewBox="0 0 50 50" class="payment-icons">
                    <use xlink:href="#ideal"></use>
                </svg>
                <p>iDeal</p>
            </div>

            <div class="column-3">
                <svg viewBox="0 0 50 50" class="payment-icons">
                    <use xlink:href="#transfer"></use>
                </svg>
                <p>Overschrijving</p>
            </div>

            <div class="column-3">
                <svg viewBox="0 0 50 50" class="payment-icons">
                    <use xlink:href="#qrcode"></use>
                </svg>
                <p>QR-Code</p>
            </div>

            <div class="column-3">
                <svg viewBox="0 0 50 50" class="payment-icons">
                    <use xlink:href="#kbc-mobile"></use>
                </svg>
                <p>KBC-mobile</p>
            </div>

            <div class="column-3">
                <svg viewBox="0 0 50 50" class="payment-icons">
                    <use xlink:href="#cbc-mobile"></use>
                </svg>
                <p>CBC-mobile</p>
            </div>

            <div class="column-3">
                <svg viewBox="0 0 50 50" class="payment-icons">
                    <use xlink:href="#wallet"></use>
                </svg>
                <p>Google Wallet</p>
            </div>
        </section>

        <h2>Larger then life</h2>
        <section class="row">
            <svg viewBox="0 0 50 50" class="payment-icons icon-2x">
                <use xlink:href="#visa"></use>
            </svg>
        </section>
    </main>
</body>
</html>