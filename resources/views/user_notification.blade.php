


<div class=" col-md-4" id="container">


    <div class="" >
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @foreach ( $show as $shows )
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ $shows->message }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


