<template>
<div class="compte">
    <!--container-->
    <div class="container mt-5">
        <div class="row text-center mt-5">
            <div class="col-md-12">
                <h2 class="msg2  mt-5">Créez votre compte</h2>
            </div>
            <!--col-md-12-->
        </div>
        <!--row-->
        <div class="row">
            <div class="col-md-2"></div>
            <!--col-md-2-->
            <div class="col-md-8">

                <!-- Tabs -->
                <section id="tabs">

                    <div class="row">
                        <div class="col ">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Je suis nouveau</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Je possède déjà un compte</a>
                                </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                    <div class="row justify-content-center mt-4">
                                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="row">
                                                <div class="col text-center mb-3">
                                                    <p class="text-h3"><b>Créez votre compte , profitez de nos services ! </b></p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col mt-6">
                                                    <input type="text" class="form-control form-styling" placeholder="Nom">
                                                </div>

                                                <div class="col mt-6">
                                                    <input type="text" class="form-control form-styling" placeholder="Prénoms">
                                                </div>

                                            </div>
                                            <div class="row align-items-center mt-4">
                                                <div class="col">
                                                    <input type="email" class="form-control form-styling" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="row align-items-center mt-4">
                                                <div class="col">
                                                    <input type="password" class="form-control form-styling" placeholder="Mot de passe">
                                                </div>
                                                <div class="col">
                                                    <input type="password" class="form-control form-styling" placeholder="Confirmation mot de passe">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col">
                                                    Le mot de passe doit contenir au minimun 6 caractères
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">

                                                    <div class="btn-animate"> <a class="btn-signin">Créer votre compte</a> </div>

                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col">
                                                    <hr class="hr-text" data-content="OU">
                                                </div>
                                            </div>

                                            <div class="row align-items-center mt-2">
                                                <div class="col">
                                                    <a href="" class="fb-login social-login"><i class="fab fa-facebook-f"></i> S'inscire avec Facebook</a>
                                                </div>
                                                <div class="col">
                                                    <a href="" class="google-login social-login"><i class="fab fa-google"></i> S'inscire avec Google</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                                    <div class="row justify-content-center mt-4">
                                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="row">
                                                <div class="col text-center mb-3">
                                                    <p class="text-h3"><b>Connectez-vous</b></p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col mt-6">
                                                    <input type="text" class="form-control form-styling" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="row align-items-center mt-4">
                                                <div class="col">
                                                    <input type="password" class="form-control form-styling" placeholder="Mot de passe">
                                                </div>

                                            </div>

                                            <div class="row mt-3">
                                                <div class="col">
                                                    <label for="remember-me" class="text-info"><span>Se souvenir de moi</span>&nbsp;<span><input id="remember-me" name="remember-me" type="checkbox"></span></label>
                                                </div>

                                                <div class="col text-right">
                                                    <a href="#">Mot de passe oublié</a>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col">

                                                    <div class="btn-animate"> <a class="btn-signin">Se connecter</a> </div>

                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col">
                                                    <hr class="hr-text" data-content="OU">
                                                </div>
                                            </div>

                                            <div class="row align-items-center mt-2">
                                                <div class="col">
                                                    <a href="" class="fb-login social-login"><i class="fab fa-facebook-f"></i> Se connecter avec Facebook</a>
                                                </div>
                                                <div class="col">
                                                    <a href="" class="google-login social-login"><i class="fab fa-google"></i> Se connecter avec Google</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </section>
                <!-- ./Tabs -->

            </div>
            <!--col-md-8-->
            <div class="col-md-2"></div>
            <!--col-md-2-->
        </div>
        <!--row-->
    </div>
    <!--container-->
</div>
</template>

<script>
export default {

}
</script>

<style>

</style>
