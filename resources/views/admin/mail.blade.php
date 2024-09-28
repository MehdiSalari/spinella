@extends('admin.layout.master')

@section('content')

<div class="mailbox-view-area mg-tb-15" style="margin: 70px 10px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
                <div class="hpanel responsive-mg-b-30">
                    <div class="panel-body">
                        {{-- <a href="mailbox_compose.html" class="btn btn-success compose-btn btn-block m-b-md">Compose</a> --}}
                        <p class="text-muted text-center m-b-md font-bold text-uppercase h4">Inbox</p>
                        <table class="table table-hover table-mailbox">
                            <tbody>
                                @foreach ($mails as $mail)
                                <tr class="">
                                    <td class="" style="width: 30px;">
                                        {{ $mail->id }}
                                    </td>
                                    <td><a href="{{ route('admin.mailbox.show', $mail->id) }}">
                                        {{ $mail->name }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.mailbox.show', $mail->id) }}">
                                        {{ Str::limit($mail->body, 25) }}
                                    </td>
                                    <td class="text-right mail-date"><span class="label label-success">{{ $mail->is_read ? '' : 'New' }}</span></td>
                                </a>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $mails->links() }}
                </div>
            </div>
            <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                <div class="hpanel email-compose mailbox-view mg-b-15">
                    <div class="panel-heading hbuilt">

                        <div class="p-xs h4">
                            View Message {{ $mailbox->id }} @if (@isset($mailbox->deleted_at))
                                <span class="label label-danger">Deleted</span>
                            @endif
                            <div>
                                @if (@isset($mailbox->deleted_at))
                                <form action="{{ route('admin.mailbox.force-destroy', $mailbox->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button style="margin-left: 15px" type="submit" class="btn btn-danger pull-right"><i class="fa fa-trash"></i> Delete Permanently</button>
                                </form>
                                <form action="{{ route('admin.mailbox.restore', $mailbox->id) }}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-undo"></i> Restore</button>
                                </form>
                                @else
                                <form action="{{ route('admin.mailbox.destroy', $mailbox->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger pull-right"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="border-top border-left border-right bg-light">
                        <div class="p-m custom-address-mailbox">

                            <div>
                                <span class="font-extra-bold">Name: </span> {{ $mailbox->name }}
                            </div>
                            <div>
                                <span class="font-extra-bold">From: </span>
                                <a href="mailto:{{ $mailbox->email }}">{{ $mailbox->email }}</a>
                            </div>
                            <div>
                                <span class="font-extra-bold">Phone: </span>
                                <a href="tel:{{ $mailbox->phone }}">{{ $mailbox->phone }}</a>
                            </div>
                            <div>
                                <span class="font-extra-bold">Date: </span> {{ $mailbox->created_at }}
                            </div>
                        </div>
                    </div>
                    <div class="panel-body panel-csm">
                        <div>
                            <p>
                                {{ $mailbox->body }}
                            </p>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <div class="btn-group">
                            <button class="btn btn-default"><a href="{{ route('admin.mailbox.show', $mailbox->id-1) }}"><i class="fa fa-arrow-left"></i> Previous</a></button>
                            <button class="btn btn-default"><a href="{{ route('admin.mailbox.show', $mailbox->id+1) }}"><i class="fa fa-arrow-right"></i> Next</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection