<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <title>BeFitBeHealthy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="stylesheet" href="<?= CSS_PATH ?>normalize.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>main.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>bulma.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>front_page.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar mb-6 pr-2 pl-2" role="navigation" id="top-section">
            <div class="navbar-brand">
                <a class="navbar-item" href="#"><img src="<?= IMG_PATH ?>logo.svg" alt="Logo" style="height: 10em" /></a>
            </div>

            <div class="navbar-menu">
                <div class="navbar-end">
                    <a href="homepage/login" class="navbar-item">Strona główna</a>
                    <a href="#why-section" class="navbar-item">Dlaczego warto?</a>
                    <a href="#how-section" class="navbar-item">Jak to działa?</a>
                    <a href="#contact-section" class="navbar-item">Kontakt</a>
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="javascript:void(0);" class="button is-primary" id="account-login">
                                <strong>Moje konto</strong>
                                <ion-icon name="person-circle-outline" class="icon ml-1"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            <section class="section">
                <div class="columns is-vcentered">
                    <div class="column">
                        <div class="p-6">
                            <h1 class="title is-spaced is-2">BeFitBeHealthy</h1>
                            <p class="subtitle">
                                Oferujemy profesjonalne usługi w zakresie planów żywieniowych oraz planów treningowych.
                                Idealnie dobrane do twojego celu i organizmu plany pozwolą Ci na zmianę siebie na lepsze.
                                Dokładnie dobrane przez specjalistów dietetyki oraz trenerów, co pozwoli Ci na szybsze
                                osiągnięcie rezultatów.
                            </p>
                            <a href="javascript:void(0);" class="button is-primary" id="account-register">
                                <strong>Wypróbuj za darmo!</strong>
                                <ion-icon name="arrow-forward-outline" class="icon ml-1"></ion-icon>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <img src="<?= IMG_PATH ?>workout_banner.svg" alt="Workout Image" class="banner" />
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="columns is-vcentered">
                    <div class="column fitness-background">
                        <p class="title"></p>
                    </div>
                    <div class="column">
                        <h1 class="title is-2 p-6 fitness-content">
                            Spersonalizowany plan treningowy dostosowany do Twoich potrzeb i
                            możliwości.
                        </h1>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="columns is-vcentered">
                    <div class="column">
                        <h1 class="title is-2 p-6 food-content">
                            Smaczne, zdrowe i sycące plany żywieniowe przygotowane z myślą<br /> o Tobie i Twoich
                            celach.
                        </h1>
                    </div>
                    <div class="column food-background">
                        <p class="title"></p>
                    </div>
                </div>
            </section>

            <section class="section text-section pb-6 mt-6 mr-3 ml-3" id="why-section">
                <div class="columns">
                    <div class="column is-full center-text">
                        <h2 class="title is-2 white-text">Dlaczego warto?</h2>
                    </div>
                </div>

                <div class="columns is-variable is-justify-content-space-between">
                    <div class="column card-box shadow p-4 m-6 center-text">
                        <div class=""><img src="<?= IMG_PATH ?>strength_icon.svg" alt="Ikonka mięśni" class="image-card" /></div>
                        <br />
                        <h4 class="title is-4">Samopoczucie</h4>
                        <p class="subtitle">Dla Twojego komfortu układane przez nas plany są na bieżąco dostosowywane do
                            Twoich możliwości.</p>
                    </div>

                    <div class="column card-box shadow p-4 m-6 center-text">
                        <div class="center-text"><img src="<?= IMG_PATH ?>health_icon.svg" alt="Ikonka zdrowia" class="image-card" />
                        </div>
                        <br />
                        <h4 class="title is-4">Zdrowie</h4>
                        <p class="subtitle">Przyrządzane przez nas plany żywieniowe składają się wyłącznie ze zdrowych
                            produktów, które są bogate w makroskładniki.</p>
                    </div>

                    <div class="column card-box shadow p-4 m-6 center-text">
                        <div class="center-text"><img src="<?= IMG_PATH ?>brain-icon.svg" alt="Ikonka mózgu" class="image-card" /></div>
                        <br />
                        <h4 class="title is-4">Specjaliści</h4>
                        <p class="subtitle">Nasza kadra składa się wyłącznie <br>z wykwalifikowanych specjalistów w
                            odpowiednich
                            dziedzinach.</p>
                    </div>
                </div>
            </section>

            <section class="section mb-6" id="how-section">
                <div class="columns is-vcentered">
                    <div class="column">
                        <img src="<?= IMG_PATH ?>in_thought_banner.svg" alt="In thought Image" class="banner" />
                    </div>
                    <div class="column">
                        <div class="p-6">
                            <h1 class="title is-spaced is-2">Jak to działa? To proste!</h1>
                            <p class="subtitle is-4">Wystarczy, że skontaktujesz sie z nami i umówisz się na spotkanie
                                (<em>stacjonarnie lub online</em>) z naszymi przedstawicielami.
                                <br /><br />
                                Po odpowiednich pomiarach, rozmowie o
                                celach<br /> i przejściach zaproponujemy Ci kilka opcji, ale to <strong>TY</strong>
                                zdecydujesz
                                jaką ścieżkę chcesz
                                wybrać!
                                <br /><br />
                                <strong>Pamiętaj, że nie ma rzeczy niemożliwych!</strong><br /><br /> Już dziś wykonaj
                                <strong>pierwszy krok</strong> do swojej wymarzonej sylwetki
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <footer>
        <section class="section contact-box">
            <div class="container">
                <div class="columns m-4">
                    <div class="column">
                        <h1 class="title is-2 white-text" id="contact-section">Kontakt</h1>
                        <br />
                        <p class="subtitle white-text">
                            BeFitBeHealthy<br />
                            Dołącz do naszej społeczności już dziś!
                        </p>

                        <ul class="white-text">
                            <li>
                                <ion-icon name="call-outline" class="icon mr-4 mb-2 vertical-align"></ion-icon>
                                16 999 999 999
                            </li>
                            <li>
                                <ion-icon name="mail-outline" class="icon mr-4 mb-2 vertical-align"></ion-icon>
                                email@diet.us
                            </li>
                            <li>
                                <ion-icon name="home-outline" class="icon mr-4 mb-2 vertical-align"></ion-icon>
                                diet city
                            </li>
                        </ul>
                    </div>

                    <div class="column">
                        <h1 class="title is-2 contact-content white-text" id="form-section">Formularz kontaktowy</h1>
                        <div class="field">
                            <label class="label">Tytuł</label>
                            <div class="control">
                                <label>
                                    <input class="input" type="text" placeholder="Tytuł wiadomości" />
                                </label>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <label>
                                    <input class="input" type="email" placeholder="twój@email.pl" />
                                </label>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Wiadomość</label>
                            <div class="control">
                                <label>
                                    <textarea class="textarea" placeholder="Treść wiadomości"></textarea>
                                </label>
                            </div>
                        </div>

                        <div class="field is-pulled-right">
                            <button class="button">
                                <ion-icon name="send-outline" class="icon mr-1 ml-1"></ion-icon>
                                <strong>Wyślij</strong>
                            </button>
                        </div>
                    </div>

                </div>

                <div class="columns">
                    <div class="column is-fullwidth white-text">
                        <hr />
                        <p class="is-pulled-left">Copyright © 2021</p>
                        <span class="is-pulled-right">
                            <a href="#">
                                <ion-icon name="logo-facebook" class="mr-1 ml-1 icon-social"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon name="logo-twitter" class="mr-1 ml-1 icon-social"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon name="logo-youtube" class="mr-1 ml-1 icon-social"></ion-icon>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <div id="login-box" class="login-popup">
        <form action="<?= ROOT_PATH ?>homepage/login" method="POST" class="login-content shadow p-4">
            <div class="columns is-mobile">
                <div class="column">
                    <h3 class="is-3 title">Logowanie</h3>
                </div>
                <div class="column">
                    <ion-icon name="close-circle-outline" class="close-login icon"></ion-icon>
                </div>
            </div>

            <div class="field mb-4">
                <h6 class="title is-6 mb-1">Adres email</h6>
                <p class="control has-icons-left has-icons-right">
                    <label>
                        <input class="input" type="email" placeholder="" name="lEmail" />
                    </label>
                    <span class="icon is-small is-left">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                </p>
            </div>

            <div class="field mb-4">
                <h6 class="title is-6 mb-1">Hasło</h6>
                <p class="control has-icons-left">
                    <label>
                        <input class="input" type="password" placeholder="" name="lHaslo" />
                    </label>
                    <span class="icon is-small is-left">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                </p>
            </div>
            <button class="button" type="submit" name="login">
                Zaloguj się
                <ion-icon name="log-in-outline" class="icon ml-1"></ion-icon>
            </button>
            <?php $this->printLoginErrors() ?>
        </form>
    </div>

    <div id="register-box" class="register-popup">
        <form action="<?= ROOT_PATH ?>homepage/register" method="POST" class="register-content shadow p-4">
            <div class="columns is-mobile">
                <div class="column">
                    <h3 class="is-3 title">Rejestracja</h3>
                </div>
                <div class="column">
                    <ion-icon name="close-circle-outline" class="close-register icon"></ion-icon>
                </div>
            </div>

            <div class="field mb-4">
                <h6 class="title is-6 mb-1">Imię i nazwisko</h6>
                <p class="control has-icons-left has-icons-right">
                    <label>
                        <input class="input" type="text" placeholder="" name="rImieNazwisko" />
                    </label>
                    <span class="icon is-small is-left">
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </span>
                </p>
            </div>

            <div class="field mb-4">
                <h6 class="title is-6 mb-1">Adres email</h6>
                <p class="control has-icons-left has-icons-right">
                    <label>
                        <input class="input" type="email" placeholder="" name="rEmail" />
                    </label>
                    <span class="icon is-small is-left">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                </p>
            </div>

            <div class="field mb-4">
                <h6 class="title is-6 mb-1">Hasło</h6>
                <p class="control has-icons-left">
                    <label>
                        <input class="input" type="password" placeholder="" name="rHaslo" />
                    </label>
                    <span class="icon is-small is-left">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                </p>
            </div>

            <div class="field mb-4">
                <h6 class="title is-6 mb-1">Wiek</h6>
                <p class="control has-icons-left has-icons-right">
                    <label>
                        <input class="input" type="number" name="rWiek" />
                    </label>
                    <span class="icon is-small is-left">
                        <ion-icon name="hourglass-outline"></ion-icon>
                    </span>
                </p>
            </div>

            <div class="field mb-4">
                <h6 class="title is-6 mb-1">Waga w kilogramach</h6>
                <p class="control has-icons-left has-icons-right">
                    <label>
                        <input class="input" type="number" placeholder="kg" name="rWaga" />
                    </label>
                    <span class="icon is-small is-left">
                        <ion-icon name="scale-outline"></ion-icon>
                    </span>
                </p>
            </div>

            <div class="field mb-4">
                <h6 class="title is-6 mb-1">Wzrost w centymetrach</h6>
                <p class="control has-icons-left has-icons-right">
                    <label>
                        <input class="input" type="number" placeholder="cm" name="rWzrost" />
                    </label>
                    <span class="icon is-small is-left">
                        <ion-icon name="analytics-outline"></ion-icon>
                    </span>
                </p>
            </div>

            <div class="field">
                <h6 class="title is-6 mb-1">Jakie jest twój cel?</h6>
                <div class="field-body">
                    <div class="field is-narrow">
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="rCel" value="1" checked="checked">
                                Przybrać na wadze
                            </label>
                            <label class="radio">
                                <input type="radio" name="rCel" value="0">
                                Stracić na wadze
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <button class="button" type="submit" name="register">
                Zarejestruj się
                <ion-icon name="log-in-outline" class="icon ml-1"></ion-icon>
            </button>
            <?php $this->printRegisterErrors() ?>
        </form>
    </div>

    <script src="<?= JS_PATH ?>front-page.js"></script>
</body>

</html>