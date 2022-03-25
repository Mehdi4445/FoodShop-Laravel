<title>Feedbacks of {{ Auth::user()->name }}</title>

<x-app-layout>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/main.css')}}" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

  <body class="bg-light">
    <div class="container">
      <div class="py-5">
        <h2>Donnez nous votre feedback !</h2>
        <p class="lead">Donnez nous votre feedback en une image pour l'ajouter a notre album de communauté</p>
      </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Votre photo :</h4>
            <form  method="POST" action=" {{ route('feedbackUser') }} " enctype="multipart/form-data">
              @csrf  
                <input type="file" class="form-control" name="image" />
                  <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" >Envoyer feedback !</button>
            </form>
        </div> 
        @if(count($feedbacks) > 0)
          <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Vos ancien feedback :</h1>
            <hr class="mt-2 mb-5">
          <div class="row text-center text-lg-start">
            @foreach($feedbacks as $feedback)
              <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="{{ asset('feedbacks/' . $feedback->image_path) }}" alt="">
                </a>
              </div>
            @endforeach
          </div>
        @endif
  </body>
</x-app-layout>
