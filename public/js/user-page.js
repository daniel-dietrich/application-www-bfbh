function openDiet(evt, meal) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("diet-tab-content");

    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("diet-tab-button");

    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" is-active", "");
    }

    document.getElementById(meal).style.display = "block";
    evt.currentTarget.className += " is-active";
}

function openDay(evt, day) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("day-tab-content");

    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("day-tab-button");

    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" is-active", "");
    }

    document.getElementById(day).style.display = "block";
    evt.currentTarget.className += " is-active";
}

function getCurrentMeal() {
    var timeNow = new Date();
    var hours = timeNow.getHours();

    if (hours <= 9) return 1;
    else if (hours <= 13) return 2;
    else if (hours <= 16) return 3;
    else return 4;
}

document.getElementById("diet-" + getCurrentMeal() + "-open").click();
document.getElementById("day-" + new Date().getDay() + "-open").click();