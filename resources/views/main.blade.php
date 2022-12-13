<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<header>
    <div class="title-header">
        BARKADAPP
    </div>
</header>

<body>
    <div class="main">
        <form class="user-form-field" action="">
            <div class="form-header">Please complete details:</div>
            <div class="form-field">

                <label class="form-field-label" for="">
                    <box-icon type='solid' name='calendar-event'></box-icon>
                    Event Title
                </label>
                <input class="form-field-input" type="text">

                <label class="form-field-label" for="">
                    <box-icon type='solid' name='location-plus'></box-icon>
                    Location
                </label>
                <input class="form-field-input" type="text">

                <label class="form-field-label" for="">
                    <box-icon name='category'></box-icon>
                    Category
                </label>
                <input class="form-field-input" type="text">

                <label class="form-field-label" for="">
                    <box-icon name='time' type='solid'></box-icon>
                    Event Duration
                </label>
                <input class="form-field-input" type="text">
            </div>
            <input class="form-field-submit" type="submit" value="Submit">
        </form>
    </div>

</body>


</html>
