@foreach($files as $file)
    <div>
        {{ $file->filename }} from {{ $file->project->title }}
    </div>
@endforeach
