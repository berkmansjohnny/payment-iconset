<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Payment icons</title>

    <!-- <link rel="stylesheet" href="https://unpkg.com/warpaint@0.0.9/dist/warpaint.min.css" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Source+Sans+Pro:300" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="assets/css/warpaint.min.css" type="text/css">

</head>
<body>
    <?php include("assets/svg/payment-sprite.svg"); ?>
    <header class="hero row">
        <div class="title absolute-center">
            <h1>Payment icons</h1>
            <p>Your iconset. Ready-to-use.</p>
            <a href="https://github.com/kingjohnny/payment-iconset/archive/master.zip" class="font-s">Download the complete icon-set</a>
        </div>
    </header>
    <main class="icons --raised inset-xl">
        <h2>Usage</h2>
        <p>To get started, download and include the "payment sprite svg" in the body of your html</p>
        <pre class="font-xs">&lt;?php include("assets/svg/payment-sprite.svg"); ?&gt;</pre>

        <p>Start using the icons as following:</p>

        <pre class="font-xs">&lt;svg viewBox="0 0 50 50" class="icon"&gt;
    &lt;use xlink:href="#visa"&gt;&lt;/use&gt;
&lt;/svg&gt;</pre>
        <p>You can define the logo of the payment-service you want, by defining the id of the xlink. </p>
        <h2>Payment Providers</h2>

        <section class="row stack-l">
                <div class="column-4 center-y">
                    <svg viewBox="0 0 200 65" class="icon">
                        <use xlink:href="#ingenico"></use>
                    </svg>
                <p>
                    Ingenico<br>
                    <code class="font-s">xlink:href="#ingenico"</code>
                </p>
            </div>
                <div class="column-4 center-y">
                    <svg viewBox="0 0 50 50" class="icon">
                        <use xlink:href="#multisafepay"></use>
                    </svg>
                <p>
                    Multisafepay<br>
                    <code class="font-s">xlink:href="#multisafepay"</code>
                </p>
            </div>
                <div class="column-4 center-y">
                    <svg viewBox="0 0 70 20" class="icon">
                        <use xlink:href="#mollie"></use>
                    </svg>
                <p>
                    Mollie<br>
                    <code class="font-s">xlink:href="#mollie"</code>
                </p>
            </div>
        </section>
        <h2>Payment icons</h2>
        <section class="row stack-l center">
                <div class="column-4 center-y">
                    <svg viewBox="0 0 50 50" class="icon">
                        <use xlink:href="#visa"></use>
                    </svg>
                <p>
                    Visa<br>
                    <code class="font-s">xlink:href="#visa"</code>
                </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#maestro"></use>
                </svg>
                <p>Maestro<br>
                <code class="font-s">xlink:href="#maestro"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#mastercard"></use>
                </svg>
                <p>Mastercard<br>
                <code class="font-s">xlink:href="#mastercard"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#bancontact"></use>
                </svg>
                <p>Bancontact<br>
                <code class="font-s">xlink:href="#bancontact"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#transfer-en"></use>
                </svg>
                <p>Transfer<br>
                <code class="font-s">xlink:href="#tansfer-en"</code>
            </p>
            </div>
            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#transfer-nl"></use>
                </svg>
                <p>Overschrijving<br>
                <code class="font-s">xlink:href="#transfer-nl"</code>
            </p>
            </div>
            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#transfer-fr"></use>
                </svg>
                <p>Virement bancaire<br>
                <code class="font-s">xlink:href="#transfer-fr"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#paypal"></use>
                </svg>
                <p>Paypal<br>
                <code class="font-s">xlink:href="#paypal"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#kbc-mobile"></use>
                </svg>
                <p>KBC-mobile<br>
                <code class="font-s">xlink:href="#kbc-mobile"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#cbc-mobile"></use>
                </svg>
                <p>CBC-mobile<br>
                <code class="font-s">xlink:href="#cbc-mobile"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#americanexpress"></use>
                </svg>
                <p>American Express<br>
                <code class="font-s">xlink:href="#americanexpress"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#ideal"></use>
                </svg>
                <p>iDeal<br>
                <code class="font-s">xlink:href="#ideal"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#qrcode"></use>
                </svg>
                <p>QR-Code<br>
                <code class="font-s">xlink:href="#qrcode"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#wallet"></use>
                </svg>
                <p>Google Wallet<br>
                <code class="font-s">xlink:href="#wallet"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#sofort"></use>
                </svg>
                <p>Sofort<br>
                <code class="font-s">xlink:href="#sofort"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#belfius"></use>
                </svg>
                <p>Belfius<br>
                <code class="font-s">xlink:href="#belfius"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#giropay"></use>
                </svg>
                <p>Giropay<br>
                <code class="font-s">xlink:href="#giropay"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#ing-homepay"></use>
                </svg>
                <p>Ing homepay<br>
                <code class="font-s">xlink:href="#ing-homepay"</code>
            </p>
            </div>
            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#ing-homepay-alt"></use>
                </svg>
                <p>Ing homepay alt<br>
                <code class="font-s">xlink:href="#ing-homepay-alt"</code>
            </p>
            </div>

            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#klarna-now"></use>
                </svg>
                <p>Klarna Pay now<br>
                <code class="font-s">xlink:href="#klarna-now"</code>
            </p>
            </div>
            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#klarna-sliceit"></use>
                </svg>
                <p>Klarna Pay now<br>
                <code class="font-s">xlink:href="#klarna-sliceit"</code>
            </p>
            </div>
            <div class="column-4 center-y">
                <svg viewBox="0 0 50 50" class="icon">
                    <use xlink:href="#klarna-paylater"></use>
                </svg>
                <p>Klarna Pay Later<br>
                <code class="font-s">xlink:href="#klarna-paylater"</code>
            </p>
            </div>

        </section>

        <h2>Larger then life</h2>
        <section class="row">
                <p>To use a larger icon, you can simply extend the classes with <code>icon-2x</code> or <code>icon-4x</code> </p>
            <div class="column-12 center-y">
                <svg viewBox="0 0 50 50" class="icon icon-2x">
                    <use xlink:href="#visa"></use>
                </svg>
<br>
                <pre class="font-xs">
&lt;svg viewBox="0 0 50 50" class="icon icon-2x"&gt;
    &lt;use xlink:href="#visa"&gt;&lt;/use&gt;
&lt;/svg&gt;</pre>
            </div>

        <div class="column-12 center-y">
            <svg viewBox="0 0 50 50" class="icon icon-4x">
                <use xlink:href="#visa"></use>
            </svg>
            <br>
            <pre class="font-xs">
&lt;svg viewBox="0 0 50 50" class="icon icon-4x"&gt;
    &lt;use xlink:href="#visa"&gt;&lt;/use&gt;
&lt;/svg&gt;</pre>
</div>
        </section>

        <h2>Let's get started</h2>
        <a href="https://github.com/kingjohnny/payment-iconset/archive/master.zip">Download the complete icon-set</a>
    </main>
</body>
</html>