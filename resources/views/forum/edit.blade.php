<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dist/css/lightbox.min.css') }}" rel="stylesheet">
        <title>Edit Forum</title>
        <style>
            * {
                margin:0px;
            }
            .edit-forum {
                color: #52734D;
                margin-top: 50px;
            }
            html, body {
                background-color: #D1FFA3;
            }
        </style>
    </head>
    <body>
                                
        <center>
        <h2 class="edit-forum">Edit Forum</h2>
        <br>
        <br>
        <br>

        <div>
            <form  method="post" action="{{ route('forum.update',$forum->id) }}">
                @csrf
                <label>Judul Forum</label>
                <br>
                <input type="text" name="judul_forum" value="{{ $forum->judul_forum }}">
                <br>
                <br>
                <br>
                <label>Isi Forum</label>
                <br>
                <textarea rows="5" cols="70" name="isi_forum" id="forum" value="{{ $forum->isi_forum }}"></textarea>
                <br>
                <br>
                <button class="btn btn-success" type="submit">Simpan</button>
                <a class="Batal" href="/forum"><button class="btn btn-warning">Cancel</button></a>
            </form>
        </div>
        <center>
    </body>
</html>