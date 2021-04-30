<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <title>BeFitBeHealthy - user page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="stylesheet" href="<?= CSS_PATH ?>normalize.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>main.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>bulma.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>user_page.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>

<?php if ($this->isLoggedIn()) : ?>

    <body>
        <nav class="navbar mb-6 pr-2 pl-2" role="navigation" id="top-section">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="#">
                        <img src="<?= IMG_PATH ?>avatar.png" alt="Logo" class="avatar" />
                        <h5 class="subtitle is-5 ml-2 white-text">
                            <?php echo $this->getUserInfo('imieNazwisko'); ?>
                        </h5>
                    </a>
                </div>

                <div class="navbar-menu">
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                <a href="<?= ROOT_PATH ?>userpage/logout" class="button">
                                    <ion-icon name="log-out-outline" class="icon"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <main>
                <div class="columns">
                    <div class="column is-fullwidth">
                        <div class="text-section white-text p-5 center-text">
                            <h2 class="title is-2 white-text">BMI:
                                <?php echo $this->getUserInfo('bmi'); ?>
                            </h2>
                            <h4 class="subtitle is-4 white-text">
                                <?php echo $this->getBmiStatus(); ?>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="column">
                        <div class="text-section white-text p-5">
                            <h2 class="title is-2 white-text">Dieta na dziś
                                <ion-icon name="nutrition-outline" class="icon is-medium" style="float: right;"></ion-icon>
                            </h2>

                            <div class="tabs is-toggle is-fullwidth">
                                <ul>
                                    <li class="diet-tab-button" onclick="openDiet(event, 'Sniadanie')" id="diet-1-open">
                                        <a><span>Śniadanie</span></a>
                                    </li>
                                    <li class="diet-tab-button" onclick="openDiet(event, 'Lunch')" id="diet-2-open">
                                        <a><span>Lunch</span></a>
                                    </li>
                                    <li class="diet-tab-button" onclick="openDiet(event, 'Obiad')" id="diet-3-open">
                                        <a><span>Obiad</span></a>
                                    </li>
                                    <li class="diet-tab-button" onclick="openDiet(event, 'Kolacja')" id="diet-4-open">
                                        <a><span>Kolacja</span></a>
                                    </li>

                                </ul>
                            </div>

                            <div class="diet-tab-content mb-4" id="Sniadanie">
                                <table class="table is-fullwidth rounded center-text fixed-table">
                                    <tr>
                                        <th>
                                            <ion-icon name="flame-outline" class="icon"></ion-icon>
                                            <h6 class="title is-6"><?php echo $this->getMealInfo("sniadanie", "kalorie"); ?> kcal</h6>
                                        </th>
                                        <th>
                                            <ion-icon name="pie-chart-outline" class="icon"></ion-icon>
                                            <h6 class="title is-6">
                                                B <?php echo $this->getMealInfo("sniadanie", "bialko"); ?>g
                                                T <?php echo $this->getMealInfo("sniadanie", "tluszcze"); ?>g
                                                W <?php echo $this->getMealInfo("sniadanie", "weglowodany"); ?>g</h6>
                                        </th>
                                        <th>
                                            <ion-icon name="hourglass-outline" class="icon"></ion-icon>
                                            <h6 class="title is-6">
                                                <?php echo $this->getMealInfo("sniadanie", "czas"); ?> min.
                                            </h6>
                                        </th>
                                    </tr>
                                </table>
                                <hr>
                                <h4 class="title is-4 white-text center-text">
                                    <?php echo $this->getMealInfo("sniadanie", "nazwa"); ?>
                                </h4>
                                <h4 class="title is-4 white-text">Składniki</h4>

                                <p>
                                    <?php echo $this->getMealInfo("sniadanie", "produkty"); ?>
                                </p>
                                <br />

                                <h4 class="title is-4 white-text">Przepis</h4>

                                <p>
                                    <?php echo $this->getMealInfo("sniadanie", "przepis"); ?>
                                </p>
                            </div>

                            <div class="diet-tab-content mb-4" id="Lunch">
                                <table class="table is-fullwidth rounded center-text fixed-table">
                                    <tr>
                                        <th>
                                            <ion-icon name="flame-outline" class="icon"></ion-icon>
                                            <h6 class="title is-6"><?php echo $this->getMealInfo("lunch", "kalorie"); ?> kcal</h6>
                                        </th>
                                        <th>
                                            <ion-icon name="pie-chart-outline" class="icon"></ion-icon>
                                            <h6 class="title is-6">
                                                B <?php echo $this->getMealInfo("lunch", "bialko"); ?>g
                                                T <?php echo $this->getMealInfo("lunch", "tluszcze"); ?>g
                                                W <?php echo $this->getMealInfo("lunch", "weglowodany"); ?>g
                                            </h6>
                                        </th>
                                        <th>
                                            <ion-icon name="hourglass-outline" class="icon"></ion-icon>
                                            <h6 class="title is-6">
                                                <?php echo $this->getMealInfo("lunch", "czas"); ?> min.
                                            </h6>
                                        </th>
                                    </tr>
                                </table>
                                <hr>
                                <h4 class="title is-4 white-text center-text">
                                    <?php echo $this->getMealInfo("lunch", "nazwa"); ?>
                                </h4>
                                <h4 class="title is-4 white-text">Składniki</h4>

                                <p>
                                    <?php echo $this->getMealInfo("lunch", "produkty"); ?>
                                </p>
                                <br />

                                <h4 class="title is-4 white-text">Przepis</h4>

                                <p>
                                    <?php echo $this->getMealInfo("lunch", "przepis"); ?>
                                </p>
                            </div>

                            <div class="diet-tab-content mb-4" id="Obiad">
                                <table class="table is-fullwidth rounded center-text fixed-table">
                                    <tr>
                                        <th>
                                            <ion-icon name="flame-outline" class="icon"></ion-icon>
                                            <h6 class="title is-6"><?php echo $this->getMealInfo("obiad", "kalorie"); ?> kcal</h6>
                                        </th>
                                        <th>
                                            <ion-icon name="pie-chart-outline" class="icon"></ion-icon>
                                            <h6 class="title is-6">
                                                B <?php echo $this->getMealInfo("obiad", "bialko"); ?>g
                                                T <?php echo $this->getMealInfo("obiad", "tluszcze"); ?>g
                                                W <?php echo $this->getMealInfo("obiad", "weglowodany"); ?>g
                                            </h6>
                                        </th>
                                        <th>
                                            <ion-icon name="hourglass-outline" class="icon"></ion-icon>
                                            <h6 class="title is-6">

                                                <?php echo $this->getMealInfo("obiad", "czas"); ?> min.
                                            </h6>
                                        </th>
                                    </tr>
                                </table>
                                <hr>
                                <h4 class="title is-4 white-text center-text">
                                    <?php echo $this->getMealInfo("obiad", "nazwa"); ?>
                                </h4>
                                <h4 class="title is-4 white-text">Składniki</h4>

                                <p>
                                    <?php echo $this->getMealInfo("obiad", "produkty"); ?>
                                </p>
                                <br />

                                <h4 class="title is-4 white-text">Przepis</h4>

                                <p>
                                    <?php echo $this->getMealInfo("obiad", "przepis"); ?>
                                </p>
                            </div>

                            <div class="diet-tab-content mb-4" id="Kolacja">
                                <table class="table is-fullwidth rounded center-text fixed-table">
                                    <tr>
                                        <th>
                                            <ion-icon name="flame-outline" class="icon"></ion-icon>
                                            <h6 class="title is-6"><?php echo $this->getMealInfo("kolacja", "kalorie"); ?> kcal</h6>
                                        </th>
                                        <th>
                                            <ion-icon name="pie-chart-outline" class="icon"></ion-icon>
                                            <h6 class="title is-6">
                                                B <?php echo $this->getMealInfo("kolacja", "bialko"); ?>g
                                                T <?php echo $this->getMealInfo("kolacja", "tluszcze"); ?>g
                                                W <?php echo $this->getMealInfo("kolacja", "weglowodany"); ?>g
                                            </h6>
                                        </th>
                                        <th>
                                            <ion-icon name="hourglass-outline" class="icon"></ion-icon>
                                            <h6 class="title is-6">
                                                <?php echo $this->getMealInfo("kolacja", "czas"); ?> min.
                                            </h6>
                                        </th>
                                    </tr>
                                </table>
                                <hr>
                                <h4 class="title is-4 white-text center-text">
                                    <?php echo $this->getMealInfo("kolacja", "nazwa"); ?>
                                </h4>
                                <h4 class="title is-4 white-text">Składniki</h4>

                                <p>
                                    <?php echo $this->getMealInfo("kolacja", "produkty"); ?>
                                </p>
                                <br />

                                <h4 class="title is-4 white-text">Przepis</h4>

                                <p>
                                    <?php echo $this->getMealInfo("kolacja", "przepis"); ?>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="column">
                        <div class="text-section white-text p-5">
                            <h2 class="title is-2 white-text">Dzisiejszy trening
                                <ion-icon name="barbell-outline" class="icon is-medium" style="float: right;"></ion-icon>
                            </h2>

                            <div class="tabs is-toggle is-fullwidth">
                                <ul>
                                    <li class="day-tab-button" onclick="openDay(event, 'Poniedziałek')" id="day-1-open">
                                        <a><span>Poniedziałek</span></a>
                                    </li>
                                    <li class="day-tab-button" onclick="openDay(event, 'Wtorek')" id="day-2-open">
                                        <a><span>Wtorek</span></a>
                                    </li>
                                    <li class="day-tab-button" onclick="openDay(event, 'Środa')" id="day-3-open">
                                        <a><span>Środa</span></a>
                                    </li>
                                    <li class="day-tab-button" onclick="openDay(event, 'Czwartek')" id="day-4-open">
                                        <a><span>Czwartek</span></a>
                                    </li>
                                    <li class="day-tab-button" onclick="openDay(event, 'Piątek')" id="day-5-open">
                                        <a><span>Piątek</span></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="day-tab-content mb-4" id="Poniedziałek">
                                <h4 class="title is-4 white-text">Opis</h4>

                                <p>
                                    <?php echo $this->getWorkoutInfo("poniedzialek"); ?>
                                </p>
                            </div>

                            <div class="day-tab-content mb-4" id="Wtorek">
                                <h4 class="title is-4 white-text">Przepis</h4>

                                <p>
                                    <?php echo $this->getWorkoutInfo("wtorek"); ?>
                                </p>
                            </div>

                            <div class="day-tab-content mb-4" id="Środa">
                                <h4 class="title is-4 white-text">Przepis</h4>

                                <p>
                                    <?php echo $this->getWorkoutInfo("sroda"); ?>
                                </p>
                            </div>

                            <div class="day-tab-content mb-4" id="Czwartek">
                                <h4 class="title is-4 white-text">Przepis</h4>

                                <p>
                                    <?php echo $this->getWorkoutInfo("czwartek"); ?>
                                </p>
                            </div>

                            <div class="day-tab-content mb-4" id="Piątek">
                                <h4 class="title is-4 white-text">Przepis</h4>
                                <p>
                                    <?php echo $this->getWorkoutInfo("piatek"); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>

        <script src="<?= JS_PATH ?>user-page.js"></script>

    </body>
<?php endif ?>

</html>