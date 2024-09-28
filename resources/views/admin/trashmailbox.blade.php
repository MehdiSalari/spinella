@extends('admin.layout.master')

@section('content')
        <div class="mailbox-area mg-tb-15" style="margin: 70px 10px;">
            <div class="container-fluid">
                <div class="row">
                        <div class="hpanel mg-b-15" style="max-width: 100%;">
                            <div class="panel-heading hbuilt mailbox-hd">
                                <div class="text-center p-xs font-normal">
                                    <div class="input-group">
                                        <input style="border-radius: 5px" type="text" class="form-control input-sm" placeholder="Search email in your inbox..."> <span class="input-group-btn"> <button style="margin-left: 5px; border-radius: 5px;height: 40px" type="button" class="btn btn-sm btn-default">Search
											</button> </span></div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-mailbox">
                                        <tbody>
                                            @foreach ($tickets as $ticket)
                                            <tr style="cursor: pointer; height: 30px" class="clickable-row" data-href="{{ route('admin.mailbox.show', $ticket->id) }}">
                                                <td class="" style="width: 30px;">
                                                    {{ $ticket->id }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.mailbox.show', $ticket->id) }}">
                                                        {{ $ticket->name }} <span class="label label-success">{{ $ticket->is_read ? '' : 'New' }}</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.mailbox.show', $ticket->id) }}">
                                                        {{ Str::limit($ticket->body, 50) }}
                                                    </a>
                                                </td>
                                                <td class="text-right mail-date">{{ $ticket->created_at }}</td>
                                                <td>
                                                    <form action="{{ route('admin.mailbox.force-destroy', $ticket->id) }}" method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button style="margin-left: 15px" type="submit" class="btn btn-danger pull-right"><i class="fa fa-trash"></i> Delete Permanently</button>
                                                    </form>
                                                    <form action="{{ route('admin.mailbox.restore', $ticket->id) }}" method="GET">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-undo"></i> Restore</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div>
                                    {{ $tickets->links() }}
                                </div>
                                <i class="fa fa-eye"> </i> {{ $ticketsCount }} unread
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
                var rows = document.querySelectorAll(".clickable-row");
                rows.forEach(function(row) {
                    row.addEventListener("click", function() {
                        window.location = row.getAttribute("data-href");
                    });
                });
            });
        </script>
@endsection