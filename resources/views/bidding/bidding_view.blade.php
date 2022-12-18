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
        <img src="/img/barkadapp logo.png" class='logo-img'>
        BARKADAPP
    </div>


</header>

<body>
    <div class="main">
        <div>
            <form class="bidding-form" method="POST" action="/bidding">
                @csrf
                <div class="add-bidding-set">
                    <input type="text" name="bidding_amount" id="bidding_amount">
                    <button class="add-bidding">
                        <i class='bx bx-add-to-queue'></i>
                        Add Bidding
                    </button>
                </div>
            </form>
            <table class="bidding-table">
                <tbody class="table-body">
                    @isset($biddings)
                    @foreach($biddings as $bidding)
                    <td id={{ $bidding['id'] }}>
                        <input id="{{ $bidding['bidding_amount'] }}" name="bidding_amount" value="{{ $bidding['bidding_amount'] }}" type="radio">
                        {{ $bidding['bidding_amount'] }}
                        <button type="button" class="btn"><i class='bx bx-trash'></i></button>
                    </td>
                    </tr>
                    @endforeach
                    @endisset
                </tbody>
            </table>
            <input type="submit" onclick="checkButton()" value="Place Bidding" class="place-bidding-btn">

            <div id="error"></div>
        </div>

        <div class="output-display">
            <div id="disp"> </div>
            <img src="/img/party.png" class='home-img'>
        </div>

    </div>
    <script>
        function checkButton() {
            var getSelectedValue = document.querySelector(
                'input[name="bidding_amount"]:checked');

            if (getSelectedValue != null) {
                document.getElementById("disp").innerHTML = "Nice! You selected " + "Php " + getSelectedValue.value

            } else {
                document.getElementById("error").innerHTML = "Hey you have not selected any bidding yet!";
            }
        }
    </script>
    <script>
        // on btn with bx-trash class click, make a delete request to the /bidding route with the id of its table row in the route
        const btns = document.querySelectorAll('.btn');
        btns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                // const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                const id = e.target.parentElement.parentElement.id;
                fetch(`/bidding/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(res => res.text())
                    .then(data => {
                        e.target.parentElement.parentElement.remove();
                    })
            })
        })
    </script>
</body>


</html>
