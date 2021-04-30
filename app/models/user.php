<?php

class User
{
    private $db;
    private $registerErrors = array();
    private $loginErrors = array();

    public function __construct()
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'bfbh';

        $this->db = new Database($dbhost, $dbuser, $dbpass, $dbname);
    }

    public function getDatabase()
    {
        return $this->db;
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['email']);

        echo ("<script>location.href = '" . ROOT_PATH . "homepage';</script>");
    }

    public function register($data)
    {
        $rEmail = $data['email'];
        $rHaslo = $data['haslo'];
        $rImieNazwisko = $data['imieNazwisko'];
        $rWaga = $data['waga'];
        $rWzrost = $data['wzrost'];
        $rWiek = $data['wiek'];
        $rCel = $data['cel'];

        if (empty($rEmail)) {
            array_push($this->registerErrors, "Pole email nie może być puste");
        }
        if (empty($rHaslo)) {
            array_push($this->registerErrors, "Pole hasło nie może być puste");
        }
        if (empty($rImieNazwisko)) {
            array_push($this->registerErrors, "Pole imie i nazwisko nie może być puste");
        }
        if (empty($rWaga)) {
            array_push($this->registerErrors, "Pole waga nie może być puste");
        }
        if (empty($rWzrost)) {
            array_push($this->registerErrors, "Pole wzrost nie może być puste");
        }
        if (empty($rWiek)) {
            array_push($this->registerErrors, "Pole wiek nie może być puste");
        }
        if (empty($rCel)) {
            array_push($this->registerErrors, "Cel musi zostać wybrany");
        }

        if (count($this->registerErrors) == 0) {
            $rBMI = ($data['waga'] / $data['wzrost'] / $data['wzrost']) * 10000;
            $bmr = 10 * $rWaga + 6.25 * $rWzrost - 5 * $rWiek;
            $rKalorie = 0;
            $hashHaslo = password_hash($rHaslo, PASSWORD_DEFAULT);

            if ($rCel == 1) {
                if ($bmr < 1600) {
                    $rKalorie = 1;
                } else if ($bmr < 2000) {
                    $rKalorie = 2;
                } else {
                    $rKalorie = 3;
                };
            } else {
                if ($bmr > 1600) {
                    $rKalorie = 1;
                } else if ($bmr > 2000) {
                    $rKalorie = 2;
                } else {
                    $rKalorie = 3;
                };
            }

            $query = "INSERT INTO `Uzytkownik` (`idUzytkownik`, `imieNazwisko`, `email`, `haslo`, `waga`, `wzrost`, `bmi`, `dieta`, `trening`)
             VALUES (NULL, '$rImieNazwisko', '$rEmail', '$hashHaslo', '$rWaga', '$rWzrost', '$rBMI', '$rKalorie', '$rCel');";

            if ($this->getDatabase()->getConnection()->query($query) === FALSE) {
                echo "Error: " . $query . "<br>" . $this->db->error;
            }

            $_SESSION['email'] = $data['email'];

            echo ("<script>location.href = '" . ROOT_PATH . "userpage/index';</script>");
            return true;
        }
        return false;
    }

    public function login($data)
    {
        $lEmail = $data['email'];
        $lHaslo = $data['haslo'];

        if (empty($data['email'])) {
            array_push($this->loginErrors, "Pole email nie może być puste");
        }
        if (empty($data['haslo'])) {
            array_push($this->loginErrors, "Pole hasło nie może być puste");
        }

        if (count($this->loginErrors) == 0) {
            $query = "SELECT haslo FROM Uzytkownik WHERE email= '$lEmail'";
            $result = mysqli_fetch_assoc(mysqli_query($this->getDatabase()->getConnection(), $query));

            if (!is_null($result) && password_verify($lHaslo, $result['haslo'])) {
                $_SESSION['email'] = $data['email'];

                echo ("<script>location.href = '" . ROOT_PATH . "userpage/index';</script>");
                return true;
            } else {
                array_push($this->loginErrors, "Email lub hasło jest nieprawidłowe");
            }
        }
        return false;
    }

    public function checkBmiStatus()
    {
        $query = "SELECT bmi FROM Uzytkownik WHERE email=\"" . $this->getUserEmail() . "\"";
        $bmi = $this->getDatabase()->runQuery($query);

        if ($bmi < 16) $status = '(wygłodzenie)';
        else if ($bmi < 17) $status = '(wychudzenie)';
        else if ($bmi < 19) $status = '(niedowaga)';
        else if ($bmi < 25) $status = '(wartość prawidłowa)';
        else if ($bmi < 29) $status = '(nadwaga';
        else if ($bmi < 34) $status = '(I stopień otyłości)';
        else if ($bmi < 40) $status = '(II stopień otyłości)';
        else $status = '(III stopień otyłości)';

        return $status;
    }

    public function printLoginErrors()
    {
        if (count($this->loginErrors) > 0) {
            echo '<div class="notification is-danger">';
            foreach ($this->loginErrors as $error) {
                echo '<p>' . $error . '</p>';
            }
            echo '</div>';
        }
    }

    public function printRegisterErrors()
    {
        if (count($this->registerErrors) > 0) {
            echo '<div class="notification is-danger">';
            foreach ($this->registerErrors as $error) {
                echo '<p>' . $error . '</p>';
            }
            echo '</div>';
        }
    }

    public function getUserInfo($info)
    {
        $query = "SELECT " . $info . " FROM Uzytkownik WHERE email = \"" . $this->getUserEmail() . "\"";
        return $this->getDatabase()->runQuery($query);
    }

    public function getMealInfo($meal, $info)
    {
        $query = "SELECT Posilek." . $info . "
        FROM Posilek
        INNER JOIN DietaDzien
        ON Posilek.idPosilek = DietaDzien." . $meal . "
        INNER JOIN Dieta
        ON DietaDzien.idDzien = Dieta." . $this->getCurrentDay() . "
        INNER JOIN Uzytkownik
        ON Dieta.idDieta = Uzytkownik.dieta AND Uzytkownik.email = \"" . $this->getUserEmail() . "\";";

        return $this->getDatabase()->runQuery($query);
    }

    public function getWorkoutInfo($day)
    {
        $query = "SELECT Trening." . $day . "
        FROM Trening
        INNER JOIN Uzytkownik
        ON Trening.idTrening = Uzytkownik.trening AND Uzytkownik.email = \"" . $this->getUserEmail() . "\";";

        return $this->getDatabase()->runQuery($query);
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['email']);
    }

    private function getCurrentDay()
    {
        $day = date("l");

        if ($day == "Monday") $day = 'poniedzialek';
        else if ($day == "Tuesday") $day = 'wtorek';
        else if ($day == "Wednesday") $day = 'sroda';
        else if ($day == "Thursday") $day = 'czwartek';
        else if ($day == "Friday") $day = 'piatek';
        else if ($day == "Saturday") $day = 'sobota';
        else if ($day == "Sunday") $day = 'niedziela';

        return $day;
    }

    private function getUserEmail()
    {
        return $_SESSION['email'];
    }
}
