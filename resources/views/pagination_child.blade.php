@foreach($data as $row)

    {{ $row->event_name }}

@endforeach

{!! $data->links() !!}
