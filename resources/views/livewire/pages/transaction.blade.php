<div>
    <div class="table-code-lab">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Tickets</b></h2>
                        </div>
                        <div class="col-sm-6">



                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>No Barcode</th>
                        <th>Tanggal Masuk</th>
                        <th>Status</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($tickets as $ticket)
                        <tr>
                            <td>{{ ($tickets ->currentpage()-1) * $tickets ->perpage() + $loop->index + 1 }}</td>
                            <td>{{$ticket->barcode_no}}</td>
                            <td>{{$ticket->created_at}}</td>
                            <td>{{$ticket->member_id ?? 'guest'}}  {{$ticket->voucher_id}}</td>
{{--                            <td class="{}}">{{strtoupper($ticket->status)}}</td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="clearfix">
                    <p class="hint-text"> Showing <b>{{$showingPage??0}}</b> out of <b> {{$sumTotalRecord??'0'}}</b> entries</p>
                    <ul class="pagination">
                        {{ $tickets->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


