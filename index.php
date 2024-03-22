<!DOCTYPE html>
<html>

<head>
    <title>PHP Object Oriented Programming</title>
    <!-- Unicode Vietnamese -->
    <meta charset="utf-8">
    <meta name="author" content="HuynhThaiHung.com" />
</head>

<body>
    <div id="wrapper">
        <div class="row">
            <?php
            require_once(".php");
            $sv = new Member("Nguyen Van A", "email1@gmail.com");
            //output user info
            echo "<h2>-- Member information --</h2>";
            echo "Code: " . $sv->get_id() . "<br/>";
            echo "Fullname: " . $sv->get_fullname() . "<br/>";
            echo "Email: " . $sv->get_email() . "<br/>";
            ?>
            <?php
            $sv2 = new Member("Tran Van B", "email2@gmail.com");
            echo "<h2>---More information--</h2>";
            echo "Code: " . $sv2->get_id() . "<br/>";
            echo "Fullname: " . $sv2->get_fullname() . "<br/>";
            echo "Email: " . $sv2->get_email() . "<br/>";
            ?>
        </div>
        <footer>
            <p>Trendemy: <a href="https://trendemy.com">trendemy@gmail.com</a>.</p>
        </footer>
    </div>
</body>

</html>
