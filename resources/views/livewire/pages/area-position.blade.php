<div>
    <div class="table-code-lab">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Area positions</b></h2>
                        </div>
                        <div class="col-sm-6">

                            <a
                                wire:click.prevent = "openModal('forms.area-position.create-form')" href="#" class="btn btn-success" >
                                <i class="material-icons">&#xE147;</i>
                                <span>Add New Area</span>
                            </a>

                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>No </th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Address</th>
                        <th>Address Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    <p>{{count($tableData)}}</p>--}}
                    @foreach($areaPositions as $areaPosition)
                    <tr>
                        <td>{{ ($areaPositions ->currentpage()-1) * $areaPositions ->perpage() + $loop->index + 1 }}</td>
                        <td>{{$areaPosition->name}}</td>
                        <td>{{$areaPosition->code }}</td>
                        <td>{{$areaPosition->address}}</td>
                        <td>{{$areaPosition->address_name}}</td>
                        <td>
                            <a href="#" wire:click.prevent = "openModal('forms.area-position.edit-form',{{$areaPosition}})" class="edit" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                            </a>
                            <a href="#" wire:click.prevent="openModal('forms.area-position.delete-form',{{$areaPosition}})" class="delete" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="clearfix">
                    <p class="hint-text"> Showing <b>{{$showingPage}}</b>  out of <b> {{$totalPage}}</b> entries</p>
                    <ul class="pagination">
                        {{ $areaPositions->links() }}
{{--                        @foreach($areaPositions->links as $link)--}}
{{--                        <li class="page-item {{blank($link->url) ? 'disable' : '' }}disabled"><a href="{{$link->url}}">{{$link->label}}</a></li>--}}
{{--                        <li class="page-item"><a href="#" class="page-link">1</a></li>--}}
{{--                        <li class="page-item"><a href="#" class="page-link">2</a></li>--}}
{{--                        <li class="page-item active"><a href="#" class="page-link">3</a></li>--}}
{{--                        <li class="page-item"><a href="#" class="page-link">4</a></li>--}}
{{--                        <li class="page-item"><a href="#" class="page-link">5</a></li>--}}
{{--                        <li class="page-item"><a href="#" class="page-link">Next</a></li>--}}
{{--                        @endforeach--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @livewire('components.modal-component')
</div>



