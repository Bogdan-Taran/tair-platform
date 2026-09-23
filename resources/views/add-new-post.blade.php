<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-6">
        <div class="row">
            <div class="col-md-12 text-white">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('store-post') }}">
                    @csrf
                    <div class="form-group">
                        <label for="child_firstname">Имя ребёнка</label>
                        <input type="text" name="child_firstname" class="form-control" id="child_firstname" required>
                    </div>
                    <div class="form-group">
                        <label for="child_lastname">Фамилия ребёнка</label>
                        <input type="text" class="form-control" name="child_lastname" id="child_lastname"></input>
                    </div>
                    <div class="form-group">
                        <label for="child_patronymic">Отчество ребёнка</label>
                        <input type="text" class="form-control" name="child_patronymic" id="child_patronymic"></input>
                    </div>
                    <div class="form-group">
                        <label for="child_birthday">Дата рождения ребёнка</label>
                        <input type="date" class="form-control" name="child_birthday" id="child_birthday"></input>
                    </div>
                    <div class="form-group">
                        <label for="child_branch">Филиал в котором занимается</label>
                        <input type="text" class="form-control" name="child_branch" id="child_branch"></input>
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger text-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

    </div>

</x-app-layout>
