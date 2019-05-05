@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 id="oh-snap!-you-got-an-error!"><b><i class="ion-checkmark"></i> Éxito!</b></h4>
        <p style="padding-left: 10px;"> {!! Session::get('success') !!}</p>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 id="oh-snap!-you-got-an-error!"><b><i class="glyphicon glyphicon-remove"></i> Ha ocurrido un error:</b></h4>
        <p style="padding-left: 10px;"> {!! Session::get('error') !!}</p>
    </div>
@endif

@if (Session::has('problem'))
    <div class="alert alert-warning alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 id="oh-snap!-you-got-an-error!"><b><i class="glyphicon glyphicon-remove"></i></b></h4>
        <p style="padding-left: 10px;"> {!! Session::get('problem') !!} </p>
    </div>
@endif

