function setTimeAndDate()
{
    var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;

    var hour = date.getHours();
    var minute = date.getMinutes() + 1;


    var time = hour + ":" + minute;
    document.getElementById('datePicker').value = today;
    document.getElementById('timePicker').value = time.now();
}

