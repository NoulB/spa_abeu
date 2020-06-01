@foreach($supervisores as $supervisor)

                            <div data-id="{{$supervisor->id}}" class="linha-retornos">

                                {{ $supervisor->nome }}
                            </div>

@endforeach


