@foreach($pacientes as $paciente)

                            <div data-id="{{$paciente->id}}" class="linha-retornop">

                                {{ $paciente->nome }}
                            </div>

@endforeach


