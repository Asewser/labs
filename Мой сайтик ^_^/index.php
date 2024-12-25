<!DOCTYPE html>
<html lang="ру">
<head>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <div class="php">
       <?php
        $message = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['help3']) && !empty($_POST['help4'])) {
            $name = $_POST['help3'];
            $phone = $_POST['help4'];
            $message = "<b>$name</b>, ждите обратную связь, мы свяжемся с вами по почте <b>$phone</b>!";
        }
        ?>
    </div>
<style>
    .message{
        color: white;
    }

</style>
</head>
<body>
    <header class="header_list">
        <ul class="header_listnav">
            <img src="/Мой сайтик ^_^/img/logo.png" alt="" class="header_listnavlogo">
            <li class="header_listnavitem">Каталог</li>
            <li class="header_listnavitem">Галерея</li>
            <li class="header_listnavitem">О лаборатории</li>
            <li class="header_listnavitem">Контакты</li>
            <img src="/Мой сайтик ^_^/img/search.png" alt="" class="header_listnavsearch">
            <img src="/Мой сайтик ^_^/img/log-in.png" class="header_listnavlogin">
        </ul>
    </header>
    <section class="main">
        <h1 class="main_text">Крупнейшая коллекция природных артефактов</h1>
        <h2 class="main_textoffer">Являясь всего лишь частью общей картины, интерактивные прототипы, которые представляют собой яркий пример европейского типа политической и социальной культуры.</h2>
       <a href="#" class="link">
        <a href="" class="main_link">Исследовать</a>
        <img src="/Мой сайтик ^_^/img/Arrow 1.png" alt="" class="link_arrow">
    </a>
    </section>
    <div class="slider">
        <div class="plants-all">
            <section class="plants">
                <img src="/Мой сайтик ^_^/img/Group 204.png" alt="" class="plants_204">
                <img src="/Мой сайтик ^_^/img/Layer 3.png" alt="" class="plants_layer3">
                <h1 class="plnts_text1">Fig. 1 (plant)</h1>
                <h2 class="plants_textoffer1">Имеется спорная точка зрения, гласящая примерно следующее: активно развивающиеся страны третьего мира своевременно верифицированы.</h2>
                <a href="" class="plants_link1"> Подробнее</a>        
            </section>
            <section class="plants">
                <img src="/Мой сайтик ^_^/img/Group 301.png" alt="" class="plants_301">
                <img src="/Мой сайтик ^_^/img/Layer 2.png" alt="" class="plants_layer2">
                <h1 class="plants_text2">Fig. 2 (flower)</h1>
                <h2 class="plants_textoffer2">Прежде всего, синтетическое тестирование влечет за собой процесс внедрения и модернизации условий.</h2>
                <a href="" class="plants_link2"> Подробнее</a>        
            </section>
            <section class="plants">
                <img src="/Мой сайтик ^_^/img/Group 102.png" alt="" class="plants_102">
                <img src="/Мой сайтик ^_^/img/Layer 4.png" alt="" class="plants_layer3">
                <h1 class="plant_text3">Fig. 3 (leaf)</h1>
                <h2 class="plant_textoffer3">Лишь непосредственные участники прогресса неоднозначны и будут в равной степени предоставлены сами себе для работы.</h2>
                <a href="" class="plants_link3"> Подробнее</a>        
            </section>
            <section class="plants">
                <img src="/Мой сайтик ^_^/img/Group 104.png" alt="" class="plants_104">
                <img src="/Мой сайтик ^_^/img/Layer 1 1.png" alt="" class="plants_layer4">
                <h1 class="plants_text4">Fig. 4 (wood)</h1>
                <h2 class="plants_textoffer4">Базовый вектор развития не даёт нам иного выбора, кроме определения новых предложений.</h2>
                <a href="" class="plants_link4"> Подробнее</a>        
            </section>
            <section class="plants">
                <img src="/Мой сайтик ^_^/img/Group 104.png" alt="" class="plants_104">
                <img src="/Мой сайтик ^_^/img/Layer 1 1.png" alt="" class="plants_layer4">
                <h1 class="plants_text4">Fig. 4 (wood)</h1>
                <h2 class="plants_textoffer4">Базовый вектор развития не даёт нам иного выбора, кроме определения новых предложений.</h2>
                <a href="" class="plants_link4"> Подробнее</a>        
            </section>
            <section class="plants">
                <img src="/Мой сайтик ^_^/img/Group 104.png" alt="" class="plants_104">
                <img src="/Мой сайтик ^_^/img/Layer 1 1.png" alt="" class="plants_layer4">
                <h1 class="plants_text4">Fig. 4 (wood)</h1>
                <h2 class="plants_textoffer4">Базовый вектор развития не даёт нам иного выбора, кроме определения новых предложений.</h2>
                <a href="" class="plants_link4"> Подробнее</a>        
            </section>

        </div>
        <section class="a1-3">
            <ul class="a1-3_row">
                <button class="button-back">
                    <img src="/Мой сайтик ^_^/img/Arrow 2.png" alt="">
                </button>
                <h1 class="aa1-3">1 из 3</h1>
                <button class="button-next">
                    <img src="/Мой сайтик ^_^/img/Arrow 1-2.png" alt="">
                </button>
            </ul>
        </section>
    </div>
    <section>
        <h1 class="new_text">Новые артефакты</h1>
    </section>
    <ul class="new_ul">
        <section class="new_ph">
            <img src="/Мой сайтик ^_^/img/Group 402.png" alt="" class="new_402">
            <img src="/Мой сайтик ^_^/img/Moss 03 1.png" alt="" class="new_moss03">
            <img src="/Мой сайтик ^_^/img/Group 702.png" alt="" class="new_702">
            <img src="/Мой сайтик ^_^/img/Moss 06.png" alt="" class="new_moss06">
            <img src="/Мой сайтик ^_^/img/Group 207.png" alt="" class="new_207">
            <img src="/Мой сайтик ^_^/img/Layer 3 1.png" alt="" class="new_layyer31">
            <img src="/Мой сайтик ^_^/img/Group 501.png" alt="" class="new_501">
            <img src="/Мой сайтик ^_^/img/Layer 2 1.png" alt="" class="new_layer21">
            <img src="/Мой сайтик ^_^/img/Group 901.png" alt="" class="new_901">
            <img src="/Мой сайтик ^_^/img/Polypody.png" alt="" class="new_polypody">
            <img src="/Мой сайтик ^_^/img/Group 107.png" alt="" class="new_107">
            <img src="/Мой сайтик ^_^/img/Bark 05.png" alt="" class="new_bark">
            <img src="/Мой сайтик ^_^/img/Group 203.png" alt="" class="new_203">
            <img src="/Мой сайтик ^_^/img/Layer 1 2.png" alt="" class="new_layer12">
        </section>
        <section class="new_textoffer">
            <h1 class="new_text1">Kurische Nehrung 24</h1>
            <h2 class="new_text2">Вот вам яркий пример современных тенденций - начало повседневной работы по формированию позиции выявляет срочную потребность методов управления процессами. 
                Есть над чем задуматься: представители современных социальных резервов своевременно верифицированы.</h2>
                <ul class="new_ul2">
                    <h3 class="new_text3">Читать далее</h3>
                    <img src="/Мой сайтик ^_^/img/Arrow 0.png" alt="" class="new_arrow">
                    
                </ul>
        </section>
    </ul>
    <section class="help">
        <h1 class="help1">Помочь проекту</h1>
        <h2 class="help2">Равным образом, экономическая повестка сегодняшнего дня не даёт нам иного выбора, кроме определения прогресса профессионального сообщества. Как принято считать, элементы политического процесса рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. </h2>
        <form action="" id="forma" method="post" action="php.php" novalidate>
            <input type="text" placeholder="Имя" class="help3" name="help3" id="Name" pattern="^[А-Яа-я\s]+$">
            <input type="email" placeholder="Email" class="help4" name="help4" id="Email">
            <input type="submit" placeholder="Отправить" class="help5">
            <?php if (!empty($message)){
                }
            ?>
            <div class="message"><?php echo $message; ?></div>
        </form>
        <div id="errorMessage" class="errmsg">
            Введите корректные данные!
        </div>
    </section>
    <section class="up_footer">
        <ul class="up_footerall">
            <img src="/Мой сайтик ^_^/img/youtube.png" alt="" class="up_footerlogo">
            <img src="/Мой сайтик ^_^/img/facebook.png" alt="" class="up_footerlogo">
            <img src="/Мой сайтик ^_^/img/inst.png" alt="" class="up_footerlogo">
            <img src="/Мой сайтик ^_^/img/tw.png" alt="" class="up_footerlogo">
        </ul>
    </section>
    <footer class="footer">
        <h1 class="footer_text">f&b ® 2020</h1>
    </footer>
    <audio src="/Мой сайтик ^_^/b5f0886abfa6621.mp3" id="errorSound" preload="auto"></audio>
    <script src="/Мой сайтик ^_^/js.js"></script>

</html>