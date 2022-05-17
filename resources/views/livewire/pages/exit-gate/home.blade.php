<div class="row">
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title" style="margin-bottom: 20px">Ticket</h5>
                <form class="" >
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">No Barcode</label>
                        <input wire:model="input.barcodeNo" id="barcode" placeholder="Masukan No barcode" type="email"
                               class="mt-2 mb-3 form-control">
                    </div>

                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">No Polisi</label>
                        <input wire:model="input.platNo"  placeholder="Masukan Plat Number" type="email"
                               class="mt-2 mb-3 form-control">
                    </div>

                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Jenis Kendaraan</label>
                        <input wire:model="input.vehicle" placeholder="Masukan No barcode" type="email"
                               class="mt-2 mb-3 form-control">
                    </div>

                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Jenis Pembayaran</label>
                        <input wire:model="input.paymentMethod" placeholder="Masukan No barcode" type="email"
                               class="mt-2 mb-3 form-control">
                    </div>

                    <button wire:click="submit" class="mt-1 btn btn-primary">Submit</button>
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
                         src="{{!blank($ticket) ? Storage::disk(\App\Enum\DiskEnum::PUBLIC)->url($ticket->picture_vehicle_in) : ''}}">
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
    <script>
        (function($) {
            var _timeoutHandler = 0,
                _inputString = '',
                _onKeypress = function(e) {

                    if (_timeoutHandler) {
                        clearTimeout(_timeoutHandler);
                        console.log('aaaa')
                    }
                    if (e.keyCode !== 13){
                        _inputString += e.key;
                    }


                    _timeoutHandler = setTimeout(function () {
                        if (_inputString.length <= 3) {
                            _inputString = '';
                            return;
                        }

                        @this.set('input.barcodeNo', _inputString)
                        if ($(e.target).attr('id') !== 'barcode'){
                            $(e.target).val($(e.target).val().slice(0,(_inputString, $(e.target).val().length - _inputString.length)))
                        }
                        _inputString = '';

                    }, 20);
                };
            $('body').on({
                keypress: _onKeypress
            });
        })($);

        // var BarcodeScanerEvents = function() {
        //     this.initialize.apply(this, arguments);
        // };
        //
        // BarcodeScanerEvents.prototype = {
        //     initialize: function() {
        //         $(document).on({
        //             keyup: $.proxy(this._keyup, this)
        //         });
        //     },
        //     _timeoutHandler: 0,
        //     _inputString: '',
        //     _keyup: function (e) {
        //         if (this._timeoutHandler) {
        //             clearTimeout(this._timeoutHandler);
        //             this._inputString += String.fromCharCode(e.which);
        //         }
        //
        //         this._timeoutHandler = setTimeout($.proxy(function () {
        //             if (this._inputString.length <= 3) {
        //                 this._inputString = '';
        //                 return;
        //             }
        //
        //             $(document).trigger('onbarcodescaned', this._inputString);
        //
        //             this._inputString = '';
        //
        //         }, this), 20);
        //     }
        // };
        // @this.set('date', dateText);
        // BarcodeScanerEvents()

        // $('body').on({
        //     keypress: function() { typed_into = true; },
        //     change: function() {
        //         if (typed_into) {
        //             alert('type');
        //             typed_into = false; //reset type listener
        //         } else {
        //             alert('not type');
        //         }
        //     }
        // });

        // $(function () {
        //     //Yes! use keydown because some keys are fired only in this trigger,
        //     //such arrows keys
        //     $("body").keydown(function (e) {
        //         //well so you need keep on mind that your browser use some keys
        //         //to call some function, so we'll prevent this
        //         e.preventDefault();
        //
        //         //now we caught the key code.
        //         var keyCode = e.keyCode || e.which;
        //
        //         //your keyCode contains the key code, F1 to F12
        //         //is among 112 and 123. Just it.
        //         console.log(keyCode);
        //     });
        // });
    </script>
</div>


