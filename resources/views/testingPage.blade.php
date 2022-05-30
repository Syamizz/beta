<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test alert</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
</head>

<body>
    <h1>Hi welcome to testing page!</h1>


    <input type="text" id="namid">
    <button type="button" id="btnresult"> click here to see the result</button>
    <br><br>
    <button type="button" id="btn1">Test</button>
    <button type="button" id="btn2">Click this</button>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>


    <script>
        $('#btnresult').on('click', function() {
            console.log("btn click");
            var data = $('#namid').val();

            console.log(data);

            if (data == 'mina') {
                Swal.fire({
                    title: 'Data have been saved',
                    type: 'success',
                    showCloseButton: true
                })
            } else if (data == 'raju') {
                Swal.fire({
                    title: 'Hello its raju',
                    type: 'warning',
                    showCloseButton: true
                })
            } else {
                Swal.fire({
                    title: 'none of theme is here',
                    type: 'error',
                    showCloseButton: true
                })
            }
        })

        $('#btn1').on('click', function() {
            console.log("btn click");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.cancel) {
                    
                } else {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }

            })

        })

        $('#btn2').on('click', function() {
            

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                reverseButtons: true
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.cancel) {
                    
                    Swal.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                } else {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })

        })
    </script>



    
</body>

</html>
