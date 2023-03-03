<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalendarPickerJS</title>
    <link rel="stylesheet" href="style/kalender.css">
    <link rel="stylesheet" href="style/styles.css">
    <script src="kalender.js"></script>

</head>
<header><?php include 'components/header.php' ?></header>
<body>
<h1>Inschrijven</h1>


<div id="showcase-wrapper">
    <div id="myCalendarWrapper"></div>
    <div id="example">
    </div>
</div>

</div>
<footer>
    <?php include 'components/footer.php' ?>
</footer>
</body>

<script src="CalendarPicker.js"></script>

<script>
    const nextYear = new Date().getFullYear() + 1;
    const myCalender = new CalendarPicker('#myCalendarWrapper', {
        // If max < min or min > max then the only available day will be today.
        min: new Date(),
        max: new Date(nextYear, 10), // NOTE: new Date(nextYear, 10) is "Nov 01 <nextYear>"
        locale: 'en-US', // Can be any locale or language code supported by Intl.DateTimeFormat, defaults to 'en-US'
        showShortWeekdays: false // Can be used to fit calendar onto smaller (mobile) screens, defaults to false
    });

    const currentDateElement = document.getElementById('current-date');
    currentDateElement.textContent = myCalender.value;

    const currentDayElement = document.getElementById('current-day');
    currentDayElement.textContent = myCalender.value.getDay();

    const currentToDateString = document.getElementById('current-datestring');
    currentToDateString.textContent = myCalender.value.toDateString();

    myCalender.onValueChange((currentValue) => {
        currentDateElement.textContent = currentValue;
        currentDayElement.textContent = currentValue.getDay();
        currentToDateString.textContent = currentValue.toDateString();

        console.log(`The current value of the calendar is: ${currentValue}`);
    });
</script>

</html>