

<x-master title="Formulário de Noticias">
    <div class="container pt-5">
            @if (session()->has('mensagem'))
                <div class="alert alert-sucess">
                    {{session()->get('mensagem')}}
                </div>
            @endif

        <a href="/noticias/create" class="btn btn-primary"> Nova Notícia </a>
        <a href="/noticias/indexinativo" class="btn btn-primary"> Inativos </a>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Ações</th>
            <th scope="col">Titulo</th>
            <th scope="col">Status</th>
            <th scope="col">Data Publicação</th>
            <th scope="col">Imagem</th>

            </tr>
        </thead>
        <tbody>
                @foreach ($noticias as $noticia)
                    <tr>
                        <td>
                            <a href="/noticias/{{ $noticia->id }}/edit" class="btn btn-warning btn-sm">Editar</a>
                            <form action="/noticias/{{ $noticia->id }}" class="d-inline-block" method="POST" onsubmit="confirmarExclusao(event)">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                        <td>{{ $noticia->titulo }}</td>
                        <td>{{ $noticia->status_formatado }}</td>
                        <td>{{ optional($noticia->data_publicacao)->format("d/m/Y") }}</td>
                        <td><img src="{{ $noticia->imagem}}" height="40px"></td>
                    </tr>
                @endforeach
        </tbody>
        </table>
        {{$noticias->links()}}
    </div>
</x-master>        



