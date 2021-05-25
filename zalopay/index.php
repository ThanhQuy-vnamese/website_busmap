<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/blue.css">
    <title>ZaloPay Gateway | Quy Cách</title>
    <style>
        body {
            padding: 20px;
        }

        .icheckbox_flat-blue, .iradio_flat-blue {
            top: -2px;
            margin-right: 5px;
        }

        .txtGray {
            color: #798594;
        }
    </style>
</head>
<body>

<p>Vui lòng chọn hình thức thanh toán:</p>
<form method="post" action="action/action_zalopay.php">
    <div class="mb-1">
        <label><input type="radio" name="iCheck" class="iradio_flat-blue" value="zalopayapp" checked> Ví <img src="images/logo-zalopay.svg"
                                                                                   alt=""></label>
    </div>
    <div class="mb-1">
        <label><input type="radio" name="iCheck" class="iradio_flat-blue" value="CC"> Visa, Mastercard, JCB <span class="txtGray">(qua cổng ZaloPay)</span></label>
    </div>
    <div class="mb-1">
        <label><input type="radio" name="iCheck" class="iradio_flat-blue" value=""> Thẻ ATM <span class="txtGray">(qua cổng ZaloPay)</span></label>
    </div>
    <input type="submit" class="btn btn-primary" value="Gửi"/>
</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/icheck.min.js"></script>

<script>
    $(document).ready(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue'
        });
    });
</script>

</body>
</html>
