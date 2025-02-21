<?php
// Get values from the URL
$extra_name = $_GET['extra_name'] ?? '';
$extra_mobile = $_GET['extra_mobile'] ?? '';
$extra_email = $_GET['extra_email'] ?? '';
$billAmt = $_GET['billAmt'] ?? '';
$paymentDescription = $_GET['paymentDescription'] ?? '';
$merchantId = $_GET['merchantId'] ?? '';
$invoiceId = $_GET['invoiceId'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Make Payment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h4>Make Payment</h4>
                </div>
                <form action="https://manage.ipaygh.com/gateway/checkout" method="POST">
                    <input type="hidden" name="extra_name" value="<?php echo htmlspecialchars($extra_name); ?>">
                    <input type="hidden" name="extra_mobile" value="<?php echo htmlspecialchars($extra_mobile); ?>">
                    <input type="hidden" name="extra_email" value="<?php echo htmlspecialchars($extra_email); ?>">
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" readonly required name="total" value="<?php echo htmlspecialchars($billAmt); ?>">
                    </div>
                    <div class="form-group">
                        <label>Payment Description</label>
                        <input type="text" class="form-control" name="description" value="<?php echo htmlspecialchars($paymentDescription); ?>">
                    </div>
                    <input type="hidden" name="merchant_key" value="bfbae958-f903-11ea-8138-f23c9170642f">
                    <input type="hidden" name="success_url" value="https://app.healthneutron.com/pay/success">
                    <input type="hidden" name="cancelled_url" value="https://app.healthneutron.com/pay/cancelled">
                    <input type="hidden" name="ipn_url" value="https://api.healthneutron.com/api/notify/invoice">
                    <input type="hidden" name="invoice_id" value="<?php echo htmlspecialchars($invoiceId); ?>">
                    <button type="submit" class="btn btn-primary btn-block">Check out</button>
                    <button style="border:none !important" type="submit" class="btn btn-lg btn-block">
                        <img src="https://payments.ipaygh.com/app/webroot/img/iPay_payments.png" style="width: 100%;" class="img-fluid" alt="Powered by iPay">
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
