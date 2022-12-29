<x-forms.input/>
<x-forms.textarea/>


<fieldset class="mb-1">
    <div class="row">
        <legend class="col-sm-4 col-form-label pt-0">Radios</legend>
        <div class="col-sm">
            <div class="form-check form-check-inline">
                <input id="uuid-00d6da2c-05c1-4b09-af91-fff0f6174539"
                       type="radio"
                       class="form-check-input"
                       name="radio"
                       aria-describedby="uuid-b4f15cde-3ffd-4c63-9e04-c6b9a3062779"
                       checked="">
                <label class="form-check-label" for="uuid-00d6da2c-05c1-4b09-af91-fff0f6174539">
                    Option 1
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input id="uuid-eab4aa81-b865-4740-9453-4f222a8a3ad6"
                       type="radio"
                       class="form-check-input"
                       name="radio"
                       aria-describedby="uuid-b4f15cde-3ffd-4c63-9e04-c6b9a3062779">
                <label class="form-check-label" for="uuid-eab4aa81-b865-4740-9453-4f222a8a3ad6">
                    Option 2
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input id="uuid-2c740749-8ba9-4211-b4c7-6c8abab4992a"
                       type="radio"
                       class="form-check-input"
                       name="radio"
                       aria-describedby="uuid-b4f15cde-3ffd-4c63-9e04-c6b9a3062779">
                <label class="form-check-label" for="uuid-2c740749-8ba9-4211-b4c7-6c8abab4992a">
                    Option 3
                </label>
            </div>
            <div id="uuid-b4f15cde-3ffd-4c63-9e04-c6b9a3062779" class="form-text">
                Radio description
            </div>
        </div>
    </div>
</fieldset>


<fieldset class="mb-1">
    <div class="row">
        <legend class="col-sm-4 col-form-label pt-0">Multi-Range</legend>
        <div class="col-sm">
            <div class="form-multi-range lazyloaded"
                 role="group"
                 style="--low:0%;--high:100%"
                 data-loadjs="[&quot;js/form-multi-range.js&quot;,&quot;form-multi-range&quot;]">
                <label for="uuid-e6e1da48-c8fc-439b-87fb-cbb41d337bc1" class="visually-hidden">from</label>
                <input type="range"
                       id="uuid-e6e1da48-c8fc-439b-87fb-cbb41d337bc1"
                       class="form-range"
                       name="multirange"
                       value="0"
                       min="0"
                       max="100"
                       step="1"
                       autocomplete="off">
                <label for="uuid-6ed255d0-9773-42f4-aca2-648018083358" class="visually-hidden">to</label>
                <input type="range"
                       id="uuid-6ed255d0-9773-42f4-aca2-648018083358"
                       class="form-range"
                       name="multirange"
                       value="100"
                       min="0"
                       max="100"
                       step="1"
                       autocomplete="off">
            </div>
        </div>
    </div>
</fieldset>
<fieldset>
    <div class="row">
        <legend class="col-sm-4 col-form-label">Multiple</legend>
        <div class="col-sm">
            <div class="row">
                <div class="col-5">
                    <div class="mb-1">
                        <label for="uuid-6ef4d65a-0b25-49f2-a7a4-d9738b23f752"
                               class="visually-hidden">PLZ</label>
                        <input type="text"
                               id="uuid-6ef4d65a-0b25-49f2-a7a4-d9738b23f752"
                               class="form-control"
                               name="zip"
                               required="">
                    </div>
                </div>
                <div class="col-7">
                    <div class="mb-1">
                        <label for="uuid-bf0cbbd5-f2eb-4718-b384-81b97cdb44c3"
                               class="visually-hidden">Ort</label>
                        <input type="text"
                               id="uuid-bf0cbbd5-f2eb-4718-b384-81b97cdb44c3"
                               class="form-control"
                               name="location"
                               required="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
