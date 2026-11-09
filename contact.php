<!DOCTYPE html>
<html lang="mn">

<head>
 <meta charset="UTF-8">
 <title>Форм</title>
</head>

<body>
    <h2>Оюутны мэдээлэл</h2>
    <form action="includes/contact.inc.php" method="post">
        <label for="firstname">Нэр:</label>
        <input type="text" id="firstname" name="firstname">

        <label for="lastname">Овог:</label>
        <input type="text" id="lastname" name="lastname">

        <label for="course">Хичээл:</label>
        <select id="course" name="course">
            <option value="Web">Web</option>
            <option value="Database">Database</option>
            <option value="AI">AI</option>
        </select>

        <label for="phone">Утас:</label>
        <input type="text" id="phone" name="phone">

        <button type="submit">Илгээх</button>
    </form>
</body>

</html>