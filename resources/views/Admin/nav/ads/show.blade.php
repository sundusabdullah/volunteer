@extends('admin.dashboard')

@section('Header')
    الأعلانات
@endsection
@section('Content')
    <style>
        .table.no-cellpadding td{

            padding: 0;
        }
    </style>
    <a href="{{route('Announcement.add')}}" class="btn btn-primary offset-10 mb-3">اضافة اعلان آخر</a>
    <table class="table" class="col-12 p-5" style="max-width: 100%">

        <thead>
        <tr>
            <th scope="col">الأدوات</th>
            <th scope="col">عدد المقاعد </th>
            <th scope="col">مدة الفعالية</th>
            <th scope="col">مكان الفعالية</th>
            <th scope="col">وصف الفعالية</th>
            <th scope="col">أسم الفعالية</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        <tbody>
        @foreach($announcements as $announcement)
            <tr>
                <td class="d-flex">
                    <a  href="{{ route('announcement.delete', ['id' => $announcement->id]) }}" class="mr-1">حذف</a>
                    |<a  href="{{ route('announcement.edit', ['id' => $announcement->id]) }}" class="ml-1">تحرير</a>
                </td>
                <td>{{ $announcement->seat_no}}</td>
                <td>{{ $announcement->event_date }}</td>
                <td>{{ $announcement->event_place }}</td>
                <td style="word-break:break-all;">{{ $announcement->event_description}}</td>
                <td>{{ $announcement->event_name }}</td>
                <th scope="row">{{$announcement->id}}</th>
            </tr>
        </tbody>
        @endforeach
    </table>
    <div class=" d-flex justify-content-center this"> {{  $announcements->links() }} </div>

@endsection
