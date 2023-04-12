<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'da_db');
    date_default_timezone_set('Asia/Bangkok');
    $msgbox = "";
    if ((isset($_POST["MM_login"])) && ($_POST["MM_login"] == "gologin")) {
        $pass_code = base64_encode($_POST['p1'].$_POST['p2'].$_POST['p3'].$_POST['p4'].$_POST['p5'].$_POST['p6']);
        $sql = "
                SELECT
                        *
                FROM
                        users
                WHERE
                       passcode = '".$pass_code."'
                ";
        $query = mysqli_query($conn, $sql) or die(mysqli_error());
        $row = mysqli_fetch_assoc($query);
        $currentUser = mysqli_num_rows($query);
        if ($currentUser) {
            $_SESSION['Username'] = $row['username'];
            $_SESSION['UserID'] = $row['id'];
            header("Location: table-search.php?menu=table-search");
        } else {
            $msgbox = "Passcode ผิดพลาด";
        }
    }

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Password Generator</title>
    <link rel="stylesheet" href="vendor2/jquery/sweetalert.css">
    <link href="vendor2/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="icon/Help.png">
    <link rel="shortcut icon" href="icon/Help.png">
    <style>
    .container-fluid, .container {
        -webkit-animation: fadein 0.5s;
        /* Safari, Chrome and Opera > 12.1 */
        -moz-animation: fadein 0.5s;
        /* Firefox < 16 */
        -ms-animation: fadein 0.5s;
        /* Internet Explorer */
        -o-animation: fadein 0.5s;
        /* Opera < 12.1 */
        animation: fadein 0.5s;
    }

    @keyframes fadein {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Firefox < 16 */
    @-moz-keyframes fadein {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Safari, Chrome and Opera > 12.1 */
    @-webkit-keyframes fadein {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Internet Explorer */
    @-ms-keyframes fadein {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Opera < 12.1 */
    @-o-keyframes fadein {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
    </style>
</head>

<body style="background-color:#0a466a;">
    <div class="container" align="center" style="margin-top: 50px;" id="myDiv">
        <div class="card ">
            <div class="card-body">
                <form action="" method="post" name="frmlogin">
                    <h3>
                        <span class="badge badge-dark">
                            Generate Password
                        </span>
                    </h3>
                    <hr />
                    <p id="alert" style="color: #FA001B">
                        <?php if (isset($msgbox)) { echo $msgbox; } ?>
                    </p>
                    <table>
                        <tr>
                            <td><input type="number" name="p1" class="form-control p1" pattern="[0-9]+"
                                    inputmode="numeric" style="width: 50px" required></td>
                            <td><input type="number" name="p2" class="form-control p2" pattern="[0-9]+"
                                    inputmode="numeric" style="width: 50px" required></td>
                            <td><input type="number" name="p3" class="form-control p3" pattern="[0-9]+"
                                    inputmode="numeric" style="width: 50px" required></td>
                            <td><input type="number" name="p4" class="form-control p4" pattern="[0-9]+"
                                    inputmode="numeric" style="width: 50px" required>
                            </td>
                            <td><input type="number" name="p5" class="form-control p5" pattern="[0-9]+"
                                    inputmode="numeric" style="width: 50px" required></td>
                            <td><input type="number" name="p6" class="form-control p6" pattern="[0-9]+"
                                    inputmode="numeric" style="width: 50px" required></td>
                        </tr>
                    </table>
                    <hr>
                    <input type="submit" value="เข้าสู่ระบบ" name="btnlogin"
                        class="btn btn-outline-primary btnclick mt-3">
                    <input type="hidden" name="MM_login" value="gologin">
                </form>
            </div>
        </div>
    </div>
</body>
<script src="vendor2/jquery/jquery.min.js"></script>
<script src="vendor2/jquery/sweetalert-dev.js"></script>
<script src="vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function() {
    $('.p1').focus();
    $('.form-control').keypress(function(e) {
        var charCode = (e.which) ? e.which : e.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            alert('กรอกได้เฉพาะตัวเลขเท่านั้น !');
            return false;
        }
    });

});
$('html').keyup(function(e) {
    if (e.keyCode == 8) {
        $('.p1').val('');
        $('.p2').val('');
        $('.p3').val('');
        $('.p4').val('');
        $('.p5').val('');
        $('.p6').val('');
        $('.p1').focus();
    }
})
$('.p1').focusin(function() {
    $('.p1').css("background-color", "white");
    $('.p2').css("background-color", "white");
    $('.p3').css("background-color", "white");
    $('.p4').css("background-color", "white");
    $('.p5').css("background-color", "white");
    $('.p6').css("background-color", "white");
    $('.form-control').val();
})
</script>
<script>
$('.form-control').keyup(function() {
    $(this).css('color', 'green');
    $(this).css('border-color', 'green');
    $(this).css("background-color", "green");

})
</script>
<script>
$('.p1').on('keyup', function() {
    $('.p2').focus();
    $('.p2').val('');
});
$('.p2').on('keyup', function() {
    $('.p3').focus();
    $('.p3').val('');
});
$('.p3').on('keyup', function() {
    $('.p4').focus();
    $('.p4').val('');
});
$('.p4').on('keyup', function() {
    $('.p5').focus();
    $('.p5').val('');
});
$('.p5').on('keyup', function() {
    $('.p6').focus();
    $('.p6').val('');
    exit();
});
$('.p6').keyup(function() {
    var val = $(this).val();
    if (val != '') {
        document.frmlogin.submit();
    }
});

</script>

</html>
