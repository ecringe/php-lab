<?php
    $name = "Тэргэл"; // string
    $age = 17; // int
    $gpa = 3.6; // float
    $isStudent = true; // bool
    $courses = ["Web", "Database"]; // array
    $phone = null; // null
?>
<!DOCTYPE html>
<html lang="mn">

<head>
    <meta charset="UTF-8">
    <title>PHP үндэс</title>
</head>

<body>
    <h2>1. echo ба хувьсагч</h2>
    <p>Сайн байна уу, <?php echo $name; ?>!</p>
    <p><?= "Нас: " . $age ?></p>
    <p><?php echo "Голч дүн: $gpa"; ?></p>
    <p><?php echo 'Голч дүн: $gpa'; ?></p>
    <h2>2. Өгөгдлийн төрөл</h2>

    <pre><?php
        var_dump($name);
        var_dump($age);
        var_dump($gpa);
        var_dump($isStudent);
        var_dump($courses);
        var_dump($phone);
    ?></pre>

    <h2>3. Superglobal хувьсагч</h2>
    <p>Сервер: <?php echo $_SERVER["SERVER_NAME"]; ?></p>
    <p>Энэ файл: <?php echo $_SERVER["PHP_SELF"]; ?></p>
    <p>Method: <?php echo $_SERVER["REQUEST_METHOD"]; ?></p>
    <h2>4. $_GET</h2>

    <?php
        if (isset($_GET["student"])) {
            $student = htmlspecialchars($_GET["student"]);
            echo "<p>URL-ээс ирсэн нэр: $student</p>";
        }
        else {
            echo "<p>URL-ийн төгсгөлд ?student=Сараа гэж нэмээд үз.</p>";
        }
    ?>
</body>
</html>