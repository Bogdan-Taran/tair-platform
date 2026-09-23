<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <a href="{{route('add-post')}}" class="btn btn-success" type="submit">Добавить</a>
                @foreach($posts as $post)
                <div class="card mt-5">
                    <h5 class="card-header">{{ $post->child_firstname }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment </h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional </p>
                        <a href="{{ route('edit-post', $post->id) }}" class="btn btn-primary">Редактировать</a>
                        <form action="{{ route('delete-post', $post->id) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" >Удалить</button>

                        </form>
                        <br>
                        <p class="container-fluid float-end">Дата добавления: {{ $post->created_at }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

</x-app-layout>
