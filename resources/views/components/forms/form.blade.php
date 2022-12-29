<h2 class="h2 text-center">{{ $title??'Form' }}</h2>

<p class="text-center mb-2">Lorem ipsum dolor sit amet, consectetur
    adipiscing elit. Cras dui lectus, consectetur
    quis efficitur ac, tincidunt sit amet lacus.</p>

<form>
    {{ $slot }} }}
        <div class="mb-1 row">
            <div class="col-sm-4 pt-sm-1">
                <p class="form-text text-sm">
                    * Pflichtfelder
                </p>
            </div>
            <div class="col-sm">
                <div class="link-list link-list-inline text-sm-end pt-1">
                </div>
            </div>
        </div>
    @endslot
</form>