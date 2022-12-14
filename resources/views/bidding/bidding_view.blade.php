<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bidding.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Bidding</title>
</head>
<header>
    <div class="title-header">
        BARKADAPP
    </div>
</header>

<body>
    <div class="main">
        <form class="bidding-form" method="POST" action="/bidding">
            @csrf
            <div class="add-bidding-set">
                <input type="text" name="bidding_amount" id="bidding_amount">
                <button class="add-bidding">
                    <i class='bx bx-add-to-queue'></i>
                    Add Bidding
                </button>
            </div>

            <table class="bidding-table">
                <tbody class="table-body">
                    @isset($biddings)
                        @foreach($biddings as $bidding)
                        <tr>
                            <td>
                                {{ $bidding['bidding_amount'] }}
                                <button class="btn"><i class='bx bx-trash'></i></button>
                            </td>
                        </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>

            <!-- <input class="place-bidding-btn" type="submit" value="Place Bidding"> -->


        </form>
        <img src="/img/party.png" class='home-img'>


    </div>

</body>


</html>
