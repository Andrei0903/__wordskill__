<?php
require_once 'connect.php';


//$stmt = $pdo->query("select * from content");
//$works = $stmt->fetchAll();
// Не очень нравиться PDO - Удалил почти все, что писал на PDO

$works = mysqli_query($connect, "select * from content");

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="crs/css/style.css">
</head>
<body>
<selection class="first-screen section-bg">
    <div class="container">
        <div>
            <h1> Веб - разработчик <br> К вашим услугам </h1>
        </div>
        <div>
            <a href="" class="btn btn-bg"> Узнать больше </a>
            <a href="" class="btn btn-outlone"> Нанять меня </a>
        </div> 
    </div>
    <a href="" class="chevron">
        <img src="crs/img/svg/chevrondown.svg" alt="chevron"></a>
</selection>
<section>
<div class="container">
    <h2> Обо мне </h2>
    <p>
        Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение нашей деятельности в значительной степени обуславливает создание существенных финансовых и административных условий. Товарищи! реализация намеченных плановых заданий требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач. Разнообразный и богатый опыт начало повседневной работы по формированию позиции требуют от нас анализа форм развития. С другой стороны консультация с широким активом позволяет выполнять важные задания по разработке систем массового участия.
    </p>
    <p>
        Разнообразный и богатый опыт рамки и место обучения кадров требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных задач. С другой стороны новая модель организационной деятельности способствует подготовки и реализации форм развития. Идейные соображения высшего порядка, а также сложившаяся структура организации требуют определения и уточнения существенных финансовых и административных условий. Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности играет важную роль в формировании соответствующий условий активизации. Повседневная практика показывает, что реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации дальнейших направлений развития. Товарищи! укрепление и развитие структуры играет важную роль в формировании соответствующий условий активизации.
    </p>
</div>       
</section>

<section>
    <div class="container">
       <h2> Моя галлерея </h2>
        <div class="gallery">

            <?php while ($work = mysqli_fetch_assoc($works)):?>
            <div class="image-wrapper">
               <img src="crs/img/<?=$work['image'] ?>">
            </div>
            <?php endwhile;?>

        </div>
    </div>
</section>
<section class="section-bg">
    <div class="container">
        <div class="d-flex">
            <div class="w-60 pr-4">
                <h2> Давай работать вместе </h2>
                <p>
                    Идейные соображения высшего порядка, а также новая модель организационной деятельности позволяет выполнять важные задания по разработке соответствующий условий активизации.
                </p>
            </div>
            <div class="w-40">
                <form action="crs/script/feedback.php" method="POST">
                    <input name="name" required type="text" placeholder="Как к вам обращаться">
                    <input name="email" required type="email" placeholder="Ваш email">
                    <textarea name="text" required rows="4" placeholder="Сообщение"></textarea>
                    <input class="btn btn-bg" type="submit" value="Отправить">
                </form>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        Copyright &copy; 2020. Все права защищены.
    </div>
</footer>
<script src="crs/js/main.js"></script>
</body>
</html>