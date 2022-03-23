
<title>My FoodShop - register</title>

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/main.css')}}" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

<style>

.card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .75em;
  padding-right: .75em;
}
.card-registration .select-arrow {
  top: 13px;
}

</style>
<x-slot name="logo"></x-slot>
    <x-jet-validation-errors class="mb-4" />
        <section class="h-100 bg-dark">
            <form method="POST" action="{{ route('registerUser') }}">
                @csrf            
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col">
                                <div class="card card-registration my-4">
                                    <div class="row g-0">
                                        <div class="col-xl-4 d-none d-xl-block">
                                            <img src="{{asset('img/bg.jpg') }}" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card-body p-md-5 text-black">
                                                <h3 class="mb-5 text-uppercase">Vos infos :</h3>
                                                <div class="form-outline mb-4">
                                                <input class="form-control form-control-lg" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                <label class="form-label" for="name" value="{{ __('Name') }}">Nom et prenom</label>
                                                </div>
                                                <div class="form-outline mb-4">
                                                <input id="email" type="email" name="email" :value="old('email')" required class="form-control form-control-lg" />
                                                <label class="form-label" for="email" value="{{ __('Email') }}">Email</label>
                                                </div>
                                                <div class="form-outline mb-4">
                                                <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control form-control-lg" />
                                                <label class="form-label" for="password" value="{{ __('Password') }}">Mot de pass</label>
                                                </div>
                                                <div class="form-outline mb-4">
                                                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control form-control-lg" />
                                                <label class="form-label" for="password_confirmation" value="{{ __('Confirm Password') }}">Confirmer Mot de pass</label>
                                                </div>          
                                                    <div class="flex items-center justify-end mt-4">
                                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">{{ __('Deja enregistrer ?') }}</a>
                                                        <x-jet-button class="btn btn-warning btn-lg ms-2">{{ __('Register') }}</x-jet-button>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </form>
            </section>