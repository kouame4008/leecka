<template>
<section class="firstPart">
    <div class="bgLogo"></div>

    <div class="container top">
        <div class="row">
            <div class="col-md-12 col-12 col-sm-12">
                <nav class="navbar navbar-expand-sm">
                    <ul class="list-inline navbar-nav ml-auto">
                        <li class="list-inline-item"><i class="fas fa-phone-alt"></i> (+225) 07 09 09 09 07</li>
                        <li class="list-inline-item"><i class="fas fa-envelope"></i> info@leecka.net</li>
                    </ul>
                </nav>
            </div>
            <!--col-md-12"-->
        </div>
        <!--row-->
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <nav class="navbar navbar-expand-md navbar-light">

                    <a class="navbar-brand" href="/" target="_blank"><img src="/images/logo.png" class="img-fluid" width="250px"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                <a class="nav-link lien" href="index.php?page=leecka">Comment ça marche ?</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link lien" href="index.php?page=blog">Blog</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link lien" href="/compte">Créer un compte</a>
                            </li>

                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link lien" href="/login">Se connecter</a>
                            </li>

                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <button class="btn btn-success round pro-button" href="index.php?page=business-home">Leecka Business</button>
                            </li>
                        </ul>
                    </div>

                </nav>

            </div>
            <!--col-md-12-->
        </div>
        <!--row-->
    </div>

    <div class="container">
        <div class="bgImg"></div>
        <!--bgImg-->
        <div class="row">
            <div class="col-md-7 text-center">
                <div class="msg">
                    <span class="msg1">Ne cherchez plus, <b>leecka</b> est là !</span>
                    <!--msg1-->
                    <div class="msg2">Trouver le meilleur <span class="green">Prestataire</span>
                        <br>près de chez <span class="orange">Vous</span> !</div>
                    <div class="form mt-3 mb-3">

                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <div class="searchBar">
                                    <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Quel service rechercher vous ?" value="" />
                                    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <!--col-md-5-->
                            <div class="col-md-5">
                                <div class="searchBar">
                                    <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Cocody, Saint Jean" value="" />
                                    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </button>
                                </div>
                            </div>
                            <!--col-md-5-->
                            <div class="col-md-1">
                                <button type="button" class="btn btn-info btn-circle colorBtn"><i class="fas fa-2x fa-search"></i></button>
                            </div>
                            <!--col-md-2-->
                        </div>
                        <!--row-->

                    </div>
                    <!--form-->
                    <span class="txtBas">Plus de <span class="orange">500 000 clients</span> et <span class="green">professionnels</span> utilisent Leecka…</span>
                </div>
                <!--msg-->
            </div>
            <!--col-md-6-->
            <div class="col-md-5">
                <img src="/images/slide.png" class="img-fluid" alt="Leecka">
            </div>
            <!--col-md-6-->
        </div>
        <!--row-->
    </div>
    <!--container-->

</section>
</template>

<script>
export default {

}
</script>

<style>

</style>
