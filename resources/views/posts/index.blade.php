<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <!--CSS Only-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <style>
        .blog {
            padding: 5px;
            border-bottom: 1px solid lightgrey;
        }

        small {
            color: grey;
        }

    </style>
</head>

<body>
    <div class="container">
        <h1>Blog Codepolitan</h1>
    
            @foreach($posts as $post)
            @php($post = explode(",", $post))
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post[1] }}</h5>
                        <p class="card-text">{{ $post[2] }}</p>
                        <p class="card-text"><small class="text-muted">Last updated at {{ date("d M Y H:i", strtotime($post[3])) }}</small></p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            @endforeach
    </div>
</body>

</html>
