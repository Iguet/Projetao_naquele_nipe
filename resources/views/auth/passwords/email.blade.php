@include('layouts.includes.header')

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Esqueceu sua Senha?</h1>
                                    <p class="mb-4">Nós entedemos, coisas acontecem. Basta inserir se endereço de e-mail
                                        abaixo e enviaremos um link para redefinir sua senha!</p>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Digite o endereço de E-mail...">
                                    </div>
                                    <a href="{{ route('login') }}" class="btn btn-primary btn-user btn-block">
                                        Redefinir senha
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">Criar uma conta!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Já possui uma conta? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
