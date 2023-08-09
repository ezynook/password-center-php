<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
    <link href="vendor/bootstrap-1.1.1.css" rel="stylesheet">
    <link href="vendor/docs.css" rel="stylesheet">
    <link href="vendor/prettify.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="vendor/animation.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"> </script>
    <link rel="stylesheet" href="vendor/table/jquery.dataTables.min.css">
    <link rel="stylesheet" href="vendor/table/rowGroup.dataTables.min.css">
    <style>
        * {
            font-family: 'Noto Sans Thai', sans-serif;
        }
    </style>
</head>
<code>
    <?php
        if (!isset($_SESSION)){
            session_start();
        }
    ?>
</code>
<div class="topbar">
    <div class="fill">
        <div class="container">
            <h3><a href="#"><i class="fas fa-key"></i> Password Center</a></h3>
            <ul>
                <li class="nav-link table-search"><a href="#table-search" onclick="getRouter('table-search','table-search.php')"><i class="fas fa-search"></i> ค้นหา</a></li>
                <?php if (isset($_SESSION['username'])){ ?>
                    <li class="nav-link encode"><a href="#encode" onclick="getRouter('encode','encode.php')"><i class="fas fa-lock"></i>  เข้ารหัส</a></li>
                    <li class="nav-link decode"><a href="#decode" onclick="getRouter('decode','decode.php')"><i class="fas fa-unlock"></i> ถอดรหัส</a></li>
                    <li class="nav-link setting"><a href="#setting" onclick="getRouter('setting','setting.php')"><i class="fas fa-wrench"></i> ตั้งค่า</a></li>
                    <li><a href="logout.php" onclick="return confirm('ต้องการออกจากระบบใช่หรือไม่ ?')"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a></li>
                <?php } ?>
            </ul>
            <ul class="nav secondary-nav">
                <li class="menu">
                    <a href="#"><i class="fas fa-code-branch"></i> v.230417 | <?php echo $_SESSION['username']; ?></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="vendor/jquery-3.5.1.js"></script>
<script src="vendor/table/jquery.dataTables.min.js"></script>
<script src="vendor/table/dataTables.rowGroup.min.js"></script>
<script src="vendor/jquery.tablesorter.min.js"></script>
<script src="vendor/prettify.js"></script>
<div class="containers">
    <iframe src="" frameborder="0" scrolling="yes" id="content" width="100%" height="800px"></iframe>
</div>
<script>
    function clearActive(){
        $(".nav-link").removeClass("active");
    }
    function getRouter(cls, url){
        clearActive();
        $('.'+cls).addClass('active');
        $("#content").attr("src", url);
        return true;
    }
    $(document).ready(() => {
        var url = window.location.href;
        var arg = url.split('#').pop().split('=').pop();
        console.log(arg);
        if (arg) {
            $("#content").attr("src", arg + '.php');
            $("."+arg).addClass("active");
        }else{
            $("#content").attr("src", 'table-search.php');
            $(".table-search").addClass("active");
        }
    });
</script>