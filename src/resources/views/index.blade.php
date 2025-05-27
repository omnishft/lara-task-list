<div>
    @isset($application_name)
       <h1> {{$application_name}} </h1>
    @endisset
</div>

<div>
    @forelse ($tasks as $task)

        <li>{{$task->title}}</li>

    @empty
        <li>No tasks</li>
    @endforelse
</div>
