<div>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 text-center">

                <h2>Calcolatrice</h2>

                <div class="display-3 mb-4">
                    {{$count}}
                </div>

                <div class="d-flex justify-content-center gap-2">

                    <button wire:click="increment" class="btn btn-primary calculator-btn calculator-btn">+1</button>

                    <button wire:click="decrement" class="btn btn-danger calculator-btn calculator-btn">-1</button>

                    <button wire:click="incrementByNum({{$numx}})" class="btn btn-success calculator-btn">+{{$numx}}</button>

                    <button wire:click="decreaseByNum({{$numx}})" class="btn btn-warning calculator-btn">-{{$numx}}</button>

                </div>

            </div>

        </div>

    </div>

</div>
