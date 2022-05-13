<div class="row">
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title" style="margin-bottom: 20px">Ticket</h5>
                <form class="" data-bitwarden-watching="1">
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">No Barcode</label>
                        <input name="email" id="exampleEmail" placeholder="Masukan No barcode" type="email"
                               class="mt-2 mb-3 form-control">
                    </div>

                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">No Polisi</label>
                        <input name="email" id="exampleEmail" placeholder="Masukan Plat Number" type="email"
                               class="mt-2 mb-3 form-control">
                    </div>

                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Jenis Kendaraan</label>
                        <input name="email" id="exampleEmail" placeholder="Masukan No barcode" type="email"
                               class="mt-2 mb-3 form-control">
                    </div>

                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Jenis Pembayaran</label>
                        <input name="email" id="exampleEmail" placeholder="Masukan No barcode" type="email"
                               class="mt-2 mb-3 form-control">
                    </div>

                    <button class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Sizing</h5>
                <div>
                    <img height="200px"
                         src="https://st.depositphotos.com/1529768/4597/i/950/depositphotos_45972463-stock-photo-new-car-number-plate.jpg">
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">

            <div class="card-body">
                <h5 class="card-title">Sizing</h5>
                <div>
                    <img height="200px"
                         src="https://st.depositphotos.com/1529768/4597/i/950/depositphotos_45972463-stock-photo-new-car-number-plate.jpg">
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    $(function () {
        //Yes! use keydown because some keys are fired only in this trigger,
        //such arrows keys
        $("body").keydown(function (e) {
            //well so you need keep on mind that your browser use some keys
            //to call some function, so we'll prevent this
            e.preventDefault();

            //now we caught the key code.
            var keyCode = e.keyCode || e.which;

            //your keyCode contains the key code, F1 to F12
            //is among 112 and 123. Just it.
            console.log(keyCode);
        });
    });
</script>
</div>
