<div class="static-table-area mg-t-15">
    <div class="container-fluid">
        <div class="row">
            {!! Charts::assets() !!}
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                {!! $chart_lastMonthSell->render() !!}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                {!! $chart_totalSell->render() !!}
            </div>
        </div>
    </div>
</div>