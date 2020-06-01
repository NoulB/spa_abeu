@foreach($alunos as $aluno)

                            <div data-id="{{$aluno->id}}" class="linha-retornoa">

                                {{ $aluno->nome }}
                            </div>

@endforeach


