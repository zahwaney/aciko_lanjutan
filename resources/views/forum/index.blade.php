<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/18b9c19e43.js" crossorigin="anonymous"></script>
        <meta charset="utf-8">
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

        <title>Forum Aciko</title>

        <style>
            *{
                margin: 0px;
            }
            html, body {
                background-color: #FEFFDE;
            }
            .box-forum {
                
                width: 906px;
                height: 207px;
                
                padding: 20px;

                background: #FFFFFF;
                border: 1px solid rgba(0, 0, 0, 0.4);
                box-sizing: border-box;
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                border-radius: 10px;
                
            }
            .border-forum {
                margin-top: 30px;
                margin-left: 310px;
                margin-right: 0px;
                
                
               
            }
            td {
                padding-top: 30px;
            }
            
            .aciko-logo {
                height: 105px;
                margin-top: 30px;
                margin-left: 20px;
            }
            .aciko-3 {
                position: absolute;
                height: 30px;
                margin-left: 40px;
                top: 90px;
            }
            .menu {
                position: fixed;
                left: 40px;
                top: 243px;
                height: 300px;
            }
            .footer {
                bottom: 0px;
            }
            .pp {
                
                height: 30px;
            }
            .name {
                font-size: 25px;
            }
            .date {
                margin-left: 35px;
                color: #808080;
            }
            .forum {
                margin-left: 35px;
                margin-top: 20px;
            }
            .like {
                margin-left: 35px;
                margin-top: 20px;
                
            }
            .like-int {
                
                margin-top: 20px;
            }
            .add {
                background-color: #52734D;
                color: #FFFFFF;
                height: 30px;
                
            }
            .add-button {
                left: 1124px;
                top: 138px;
            }
            .fitur {
                display: inline;
            }
            .useraciko {
                position: absolute;
width: 104px;
height: 24px;
left: 1124px;
top: 50px;
            }
        </style>

    </head>
    <body>
    
        <img class="aciko-logo" src="aciko.png" alt="Icon Aciko">
        <img class="aciko-3" src="Aciko 3.0.png">
        <b class="useraciko">{{ Auth::user()->name }}</b>
        
        
            
        
        <div class="border-forum">
            @foreach($data_forum as $forum)
            <table>
                <tr>
                    <td>
                        <div class="box-forum">
                        <a href="{{ route('forum.detail_forum', $forum->id) }}"><img class="pp" src="aciko.png" alt="Icon Aciko"></a>
                            <b class="name">Aciko</b>
                            
                            <p class="date">{{ $tgl }}</p>
                            <p class="forum">{{ $forum->isi_forum }}</p>
                            <div class="like">
                                <li class="fitur"><a href="{{ route('like.foto', $forum->id) }}"><img src="Vector.png"></a><p>{{$forum->suka}}</p></li>
                                
                            </div>
                             
                            <div>
                                
                            </div>
                        </div>
                    </td>
                    @if(Auth::check() && Auth::user()->level == 'admin')
                    <td>
                        <form action="{{ route('forum.edit', $forum->id) }}" method="post">
                            @csrf 
                            <button class="btn btn-warning">Edit</button>
                        </form>
                        
                        
                    </td>
                    @endif
                    @if(Auth::check() && Auth::user()->level == 'admin')
                    <td><form action="{{ route('forum.destroy', $forum->id) }}" method="post">
                            @csrf 
                            <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus forum ini?')">Hapus</button>
                        </form></td>
                    @endif
                </tr>
            </table>
            @endforeach
        </div>
        <br>
        <br>
        @if(Auth::check() && Auth::user()->level == 'admin')
        <center><a href="{{ route('forum.create') }}"><button class="btn btn-success">Tambah Forum</button></a></center>
        @endif
        <br>
        <br>
        
        
        <img class="footer" src="Group 344.png">
        <img class="menu" src="Group 227.png">
    </body>
    
</html>