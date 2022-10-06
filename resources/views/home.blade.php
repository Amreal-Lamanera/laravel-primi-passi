<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #FFF
        }

        body {
            background-color: #434343
        }
        h1 {
            text-align: center;
            padding-top: 1rem;
            margin-bottom: 3rem;
        }
        
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 300px);
            grid-gap: 1.5rem;
            justify-content: center;
        }

        .card {
            border: 1px solid #696969;
            border-radius: 8px;
        }

        .card-header {
            text-align: center;
            border-bottom: 1px solid #696969;
            padding: 1rem;
        }

        .card-body {
            padding: 1rem;
        }

    </style>
</head>
<body>
    <h1 class="title">
        Home page
    </h1>

    <div class="container">
        <div class="grid">
            @forelse ($team as $member)
            <div class="card">
                <div class="card-header">
                    <h3>{{$member['name']}} {{$member['surname']}}</h3>
                </div>
                <div class="card-body">
                    {{$member['descr']}}
                </div>
            </div>
                
            @empty
                
            @endforelse
        </div>
    </div>


</body>
</html>