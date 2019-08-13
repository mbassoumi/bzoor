<div class="container" style="width: 100%">
    <div class="panel panel-default">
        {{--        <div class="panel-heading datatable-header">Panel Heading</div>--}}
        <div class="datatable-header">
            <h4><b>{!! $datatable_name !!}</b></h4>
        </div>
        <div class="panel-body">


            <table id="{!! $table_id !!}" class="{!! $table_classes !!}" style="width:100%; max-height: 500px">
                <thead>
                <tr>
                    @foreach($table_headers as $table_header)
                        <th style="{{$table_header['style']??''}}">
                            {{$table_header['title']}}
                        </th>
                    @endforeach
                </tr>

                @if(!empty($table_filters))
                    @include('bassoumi_data_table::filters')
                @endif
                </thead>
            </table>

        </div>
    </div>
</div>

@include('bassoumi_data_table::datatable_popup')

@include('bassoumi_data_table::scripts')


<style>
    .datatable-header {
        color: {{config('bassoumi-datatable.style.header-text-color')}};
        background-color: {{config('bassoumi-datatable.style.header-background-color')}};
        border-color: {{config('bassoumi-datatable.style.header-border-color')}};
        padding: 5px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    tr.selected {
        background-color: {{config('bassoumi-datatable.style.selected-row-background-color')}} !important;
    }

    .form-filter {
        border-radius: 4px;
    }

    .datatable-header h4 {
        text-align: center;
    }
</style>
