<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CSRF Laravel</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <form action="/post" method="POST">
            <input type="submit" value="Send">
        </form>

        <script src="https://code.jquery.com/jquery.min.js"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('form').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url: '/post',
                    type: 'POST',
                    success: function(res) {
                        console.log(res);
                    }
                });
            });
        </script>
    </body>
</html>
