<div class="col-lg-12">
    <div class="col-lg-12">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br/>
        @endif
    </div>
</div>
