@if (session()->hasFlash('success')):
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success text-center">
                <i class="fa fa-check-circle"></i>
                <strong>{{ session()->flash('success') }}</strong>
            </div>
        </div>
    </div>
@endif

@if (session()->hasFlash('error')):
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger text-center">
                <!-- <i class="fa fa-times-circle"></i> -->
                <strong>{{ session()->flash('error') }}</strong>
            </div>
        </div>
    </div>
@endif

@if (session()->hasFlash('warning')):
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning text-center">
                <!-- <i class="fa fa-info-circle"></i> -->
                <strong>{{ session()->flash('warning') }}</strong>
            </div>
        </div>
    </div>
@endif