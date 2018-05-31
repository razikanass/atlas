<style type="text/css">
    div.isin:hover{
        box-shadow: 10px 10px 10px #dddddd;
    }
</style>

<h2><i class="fa fa-dashboard fa-x"></i> Statistiques</h2>
<br/>
<br/>
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="panel panel-back noti-box isin">
            <span class="icon-box set-icon" style="background-color:#fdff1d;color:#000;">
                <i class="fa fa-usd"></i>
            </span>
            <div class="text-box" >
                <p class="text-muted"><b>Chiffre d'affaire</b></p>
                <center><p class="main-text"><?= $ca ?></p> DHs </center>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="panel panel-back noti-box isin">
            <span class="icon-box set-icon bg-color-red">
                <i class="fa fa-user"></i>
            </span>
            <div class="text-box" >
                <p class="text-muted"><b>nombre de Clients</b></p>
                <center><p class="main-text"><?= $countCli ?></p></center>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="panel panel-back noti-box isin">
            <span class="icon-box set-icon bg-color-red">
                <i class="fa fa-user"></i>
            </span>
            <div class="text-box" >
                <p class="text-muted"><b>nombre de Clients Fidèles</b></p>
                <center><p class="main-text"><?= $clientFidele ?></p></center>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="panel panel-back noti-box isin">
            <span class="icon-box set-icon bg-color-red">
                <i class="fa fa-user"></i>
            </span>
            <div class="text-box" >
                <p class="text-muted"><b>nombre de Clients non Fidèles</b></p>
                <center><p class="main-text"><?= $clientNonFidele ?></p></center>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="panel panel-back noti-box isin">
            <span class="icon-box set-icon bg-color-green">
                <i class="fa fa-shopping-cart"></i>
            </span>
            <div class="text-box" >
                <p class="text-muted"><b>nombre des commandes</b></p>
                <center><p class="main-text"><?= $countCmd ?></p></center>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="panel panel-back noti-box isin">
            <span class="icon-box set-icon bg-color-green">
                <i class="fa fa-shopping-cart"></i>
            </span>
            <div class="text-box" >
                <p class="text-muted"><b>nombre des commandes Réalisées</b></p>
                <center><p class="main-text"><?= $cmdRealise ?></p></center>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="panel panel-back noti-box isin">
            <span class="icon-box set-icon bg-color-green">
                <i class="fa fa-shopping-cart"></i>
            </span>
            <div class="text-box" >
                <p class="text-muted"><b>nombre des commandes non Réalisées</b></p>
                <center><p class="main-text"><?= $cmdNonRealise ?></p></center>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    (function($){
        $('.main-text').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 1000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
            // $(this).append(' DHs');
        });
    })(jQuery);
</script>