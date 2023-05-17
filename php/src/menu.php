<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <style>
        * {
            font-family: 'Noto Sans Thai', sans-serif;
        }
    </style>
</head>
<div class="topbar">
    <div class="fill">
        <div class="container">
            <h3><a href="#"><i class="fas fa-key"></i> Password Center</a></h3>
            <ul>
                <li class="<?php if ($_GET['menu'] == 'table-search'){echo 'active';}else{ echo '';} ?>"><a href="table-search.php?menu=table-search"><i class="fas fa-search"></i> ค้นหา</a></li>
                <?php if (isset($_SESSION['username'])){ ?>
                    <li class="<?php if ($_GET['menu'] == 'encode'){echo 'active';}else{ echo '';} ?>"><a href="encode.php?menu=encode"><i class="fas fa-lock"></i>  เข้ารหัส</a></li>
                    <li class="<?php if ($_GET['menu'] == 'decode'){echo 'active';}else{ echo '';} ?>"><a href="decode.php?menu=decode"><i class="fas fa-unlock"></i> ถอดรหัส</a></li>
                    <li class="<?php if ($_GET['menu'] == 'setting'){echo 'active';}else{ echo '';} ?>"><a href="setting.php?menu=setting"><i class="fas fa-wrench"></i> ตั้งค่า</a></li>
                    <li><a href="logout.php" onclick="return confirm('ต้องการออกจากระบบใช่หรือไม่ ?')"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a></li>
                <?php } ?>
            </ul>
            <ul class="nav secondary-nav">
                <li class="menu">
                    <a href="#"><i class="fas fa-code-branch"></i> v.230417</a>
                </li>
            </ul>
        </div>
    </div>
</div>