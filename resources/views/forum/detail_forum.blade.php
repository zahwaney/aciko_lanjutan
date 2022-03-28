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

        <title>Detail Forum</title>

        <style>
            *{
                margin: 0px;
            }
            html, body {
                background-color: #D1FFA3;
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
                margin-left: 250px;
                margin-top: 20px;
                
                
            }
            .border-forum {
                top: 0px;
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
                margin-top: 20px;
                margin-left: 20px;
                height: 200px;
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
        </style>
    </head>
    <body>
    
        
            
            
                        <div class="box-forum">
                        
                            <b class="name">Aciko</b>
                            
                            
                            <p class="forum">{{ $forum->isi_forum }}</p>
                            
                             
                            
                                
                            </div>
                        <br>
                        <br>
                        <br>
                        <br>
            
    <div class="container">   
    <h5>Comments</h5>
        
        <form action="{{ route('komentar.store', $forum->id)}}" method="post">
            @csrf
            <div class="form-group">
                <textarea width="200px" name="komentar" id="komentar" name="komentar" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
        
        <div>
            @foreach ($data_komentar as $komen)
            <b>{{$komen->user->name}}</b>
            <p>{{$komen->komentar, $komen->id}}</p>
            <br>
            <span class="timestamp text-secondary">{{$komen->created_at->diffForHumans()}}</span>
            <br>
            <br>
            @endforeach
        </div>
        </div>
    </body>
</html>