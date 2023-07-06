@foreach ($projects as $project)
    <div>
        <h3>{{ $project->title }}</h3>
        @foreach($project->files as $file)
            <div>
                {{ $file->filename }}
            </div>
        @endforeach
    </div>
@endforeach
