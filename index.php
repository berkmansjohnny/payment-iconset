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
        <h2>Usage</h2>
        <p>To get started, download and include the "payment sprite svg" in the body of your html</p>
        <pre>
&lt;?php include("assets/svg/payment-sprite.svg"); ?&gt;
        </pre>
        <p>Start using the icons as following:</p>
        <pre>
&lt;svg viewBox="0 0 50 50" class="icon"&gt;
    &lt;use xlink:href="#visa"&gt;&lt;/use&gt;
&lt;/svg&gt;
        </pre>
        <p>You can define the logo of the payment-service you want, by defining the id of the xlink. <br>In this case we have #visa.</p>
        <h2>Payment icons</h2>
        <section class="row stack-l center">
                <div class="column-3 center-y">
                    <svg viewBox="0 0 50 50" class="icon">
                        <use xlink:href="#visa"></use>
                    </svg>
                <p>Visa</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#maestro"></use>
                </svg>
                <p>Maestro</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#mastercard"></use>
                </svg>
                <p>Mastercard</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#bancontact"></use>
                </svg>
                <p>Bancontact</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#transfer-en"></use>
                </svg>
                <p>Transfer</p>
            </div>
            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#transfer-nl"></use>
                </svg>
                <p>Overschrijving</p>
            </div>
            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#transfer-fr"></use>
                </svg>
                <p>Virement bancaire</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#paypal"></use>
                </svg>
                <p>Paypal</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#kbc-mobile"></use>
                </svg>
                <p>KBC-mobile</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#cbc-mobile"></use>
                </svg>
                <p>CBC-mobile</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#americanexpress"></use>
                </svg>
                <p>American Express</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#ideal"></use>
                </svg>
                <p>iDeal</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#qrcode"></use>
                </svg>
                <p>QR-Code</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#wallet"></use>
                </svg>
                <p>Google Wallet</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#sofort"></use>
                </svg>
                <p>Sofort</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#belfius"></use>
                </svg>
                <p>Belfius</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#giropay"></use>
                </svg>
                <p>Giropay</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#ing-homepay"></use>
                </svg>
                <p>Ing homepay</p>
            </div>
            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#ing-homepay-alt"></use>
                </svg>
                <p>Ing homepay alt</p>
            </div>

            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#klarna-now"></use>
                </svg>
                <p>Klarna Pay now</p>
            </div>
            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#klarna-sliceit"></use>
                </svg>
                <p>Klarna Pay now</p>
            </div>
            <div class="column-3 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#klarna-paylater"></use>
                </svg>
                <p>Klarna Pay Later</p>
            </div>

            <div class="row">


            </div>
        </section>

        <h2>Larger then life (x2)</h2>
        <section class="row">
            <svg viewBox="0 0 50 50" class="icon icon-2">
                <use xlink:href="#visa"></use>
            </svg>
        </section>

        <h2>Giant-size (x4)</h2>
        <section class="row">
            <svg viewBox="0 0 50 50" class="icon icon-4">
                <use xlink:href="#visa"></use>
            </svg>
        </section>
    </main>
</body>
</html>