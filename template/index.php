<?php 
$title = 'Главная страница';

$cssAccess[] = '../css/article-items.css';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php foreach($cssAccess as $css): ?>
        <link rel="stylesheet" href="<?=$css?>">
    <?php endforeach; ?>
    
    <title><?=$title?></title>

</head>
<body>
    <section class="home" id="home">
        <div class="circle"></div>

        <div class="container">
            <div class="homeContent">
                <div class="homeText">
                    <h1>Обучитесь IT профессии с нуля с помощью наших курсов</h1>
                    <h2>Прокачивайте навыки на индивидуальных занятиях с опытными преподавателями</h2>
                    
                    <div class="homeBtnContainer">
                        <a href="" class="coursesHomeBtn">Курсы</a>

                        <a href="" class="moreHomeBtn">Подрбнее</a>
                    </div>
                
                </div>

                <div class="imgContainer">
                    <div class="imgBook" id="imgBook">
                        <img src="img/components/home/book.png" alt="" data-depth="2.8">
                    </div>

                    <div class="imgCover" id="cover">
                        <img src="img/components/home/girl.png" alt="" data-depth="0.1">
                    </div>
                    
                    <div class="imgHat" id="imgHat">
                        <img src="img/components/home/hat.png"  data-depth="2">
                    </div>
            </div>
            </div>
        </div>
    </section>

    <section class="projectObjectives" id="projectObjectives">
        <div class="container">
            <div class="projectObjectivesBlock">
                <div class="projectObjectivesBlockImg">
                    <img src="img/components/project-objectives/man-and-woman.png" alt="">
                </div>

                <div class="projectObjectivesBlockText">
                    <h2>Задачи проекта</h2>

                    <p>1. Обучение навыкам: Курсы предоставляют возможность изучить новые навыки и расширить свои знания в определенной области.</p>
                    <p>2. Продвижение карьеры: Курсы помогают повысить квалификацию и улучшить шансы на получение желаемой работы или повышение зарплаты. </p>
                    <p>3. Актуализация знаний: Курсы позволяют быть в курсе последних тенденций и обновлений в выбранной сфере, что помогает оставаться конкурентоспособным и успешным.</p>
                </div>

                <div class="hatAbsolute"><img src="img/components/project-objectives/hat.png" alt=""></div>
            </div>

            <div class="transparencyContainer">
                <div class="projectObjectivesTransparency50"></div>
                <div class="projectObjectivesTransparency20"></div>
            </div>
        </div>
    </section>

    <div class="positionAbsolute" id="positionAbsolute">
        <img src="img/components/absolute/certificate.png" data-depth="2.8" alt="">
    </div>

    <section class="courses" id="courses">
        <div class="container">
            <div class="sectionTitle">
                <h2>Курсы</h2>
            </div>

            <div class="coursesContent">
                <a href="#" class="coursesBlock">
                    <div class="coursesBlockInformation">
                        <div class="coursesBlockInformationText">
                            <p>Курс</p>

                            <h3>Название курса</h3>
                        </div>
                        <div class="coursesBlockInformationImg"><img src="img/components/courses/open-book.png" alt=""></div>
                    </div>

                    <div class="coursesBlockMore">
                        <p>Перейти</p>
                    </div>
                </a>

                <a href="#" class="coursesBlock">
                    <div class="coursesBlockInformation">
                        <div class="coursesBlockInformationText">
                            <p>Курс</p>

                            <h3>Название курса</h3>
                        </div>
                        <div class="coursesBlockInformationImg"><img src="img/components/courses/open-book.png" alt=""></div>
                    </div>

                    <div class="coursesBlockMore">
                        <p>Перейти</p>
                    </div>
                </a>

                <a href="#" class="coursesBlock">
                    <div class="coursesBlockInformation">
                        <div class="coursesBlockInformationText">
                            <p>Курс</p>

                            <h3>Название курса</h3>
                        </div>
                        <div class="coursesBlockInformationImg"><img src="img/components/courses/open-book.png" alt=""></div>
                    </div>

                    <div class="coursesBlockMore">
                        <p>Перейти</p>
                    </div>
                </a>

                <a href="#" class="coursesBlock">
                    <div class="coursesBlockInformation">
                        <div class="coursesBlockInformationText">
                            <p>Курс</p>

                            <h3>Название курса</h3>
                        </div>
                        <div class="coursesBlockInformationImg"><img src="img/components/courses/open-book.png" alt=""></div>
                    </div>

                    <div class="coursesBlockMore">
                        <p>Перейти</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="more" id="more">
        <div class="container">
            <div class="moreContent">
                <div class="moreText">
                    <h3>Title</h3>
                    <p>Nec labore cetero theophrastus no, ei vero facer veritus nec. Vivendum dignissim conceptam pri ut, ei vel partem audiam sapientem. Magna copiosae apeirian ius at. Ceteros assentior omittantur cum ad. Mandamus abhorreant deseruisse mea at, mea elit deserunt persequeris at, in putant fuisset honestatis qui.</p>
                    
                    <div class="moreBtnContainer">
                        <a href="" class="moreBtn">Перейти</a>
                    </div>
                
                </div>

                <div class="moreImg">
                    <img src="img/components/more/man-reading.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="article" id="articles">
        <div class="container">
            <div class="sectionTitle">
                <h2>Блог</h2>
            </div>

            <div class="contentArticle">
                <a href="#" class="listArticle">
                    <div class="listImg">
                        <img src="img/" alt="">
                    </div>

                    <div class="listInformation">
                        <div class="listText">
                            <h3>Title</h3>

                            <p>text</p>
                        </div>

                        <div class="listFooter">
                            <p>8 Декабря 2023 года</p>

                            <p>Читать</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="articleBtnMoreContainer">
                <a href="articles.php" class="articleBtnMore">Смотреть все</a>
            </div>
        </div>
    </section>

    <?php require_once('_footer.php'); ?>
</body>
</html>