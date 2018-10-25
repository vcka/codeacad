<!-- 
    Tai yra template, kurią sukūrėme su mintim naudoti mūsų homepage`ui.
    Tačiau, mes ją galėsime naudoti NEBŪTINAI TIK homepage. Su bet kuriuo
    kitu controlleriu galėsime ją "renderinti" taip pat. 
!-->
<div class="jumbotron">
    <h1 class="display-3">Jumbotron heading</h1>
    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
</div>

<div class="home-page container main-content">
    <h1><?php print $page['content']['title']; ?></h1>

    <!-- 
        Jeigu yra galimybė, kad tam tikrų elementų nespausdinsime,
        pirma patikriname ar $page['content'][?kazkoks_indeksas?]
        yra nustatytas prieš spausdindami tag'us
    !-->
    <?php if (isset($page['content']['subtitle'])): ?>
        <h2><?php print $page['content']['subtitle']; ?></h2>
    <?php endif; ?>
        <?php if (isset($page['content']['text'])): ?>
        <p><?php print $page['content']['text']; ?></p>
    <?php endif; ?>
        
    <!--<hr>-->
</div>