<div class="topbar">
    <div class="fill">
        <div class="container">
            <h3><a href="#">Camera Generate Password</a></h3>
            <ul>
                <li class="<?php if ($_GET['menu'] == 'table-search'){echo 'active';}else{ echo '';} ?>"><a href="table-search.php?menu=table-search">ค้นหา</a></li>
                <?php if (isset($_SESSION['Username'])){ ?>
                    <li class="<?php if ($_GET['menu'] == 'encode'){echo 'active';}else{ echo '';} ?>"><a href="encode.php?menu=encode">เข้ารหัส</a></li>
                    <li class="<?php if ($_GET['menu'] == 'decode'){echo 'active';}else{ echo '';} ?>"><a href="decode.php?menu=decode">ถอดรหัส</a></li>
                <?php } ?>
            </ul>
            <ul class="nav secondary-nav">
                <li class="menu">
                    <a href="#">v.1.0.2</a>
                </li>
            </ul>
        </div>
    </div>
</div>