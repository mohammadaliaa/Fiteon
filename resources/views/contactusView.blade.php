@include('layouts.script') @include('layouts.navbar')
<div class="container"></div>
<br /> @if (app()->getLocale()== 'fa')
<h1 class="px10 font-weight-bold text-right">تماس با ما</h1>
@else
<h1 class="px10 font-weight-bold">Contact us</h1>
@endif

<br />
<div class="">
    <div class="card" style="margin: auto;border-color: transparent;width: 80%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <br /> @if (app()->getLocale()== 'fa')
        <div class="px-5 text-right" style="direction: rtl;">
            @foreach ($infos as $info)
            <div class="row">
                <div class="col-md-6" style="display: inline-flex;">
                    @lang('msg.phone') &nbsp;
                    <h5>
                        <b> {{$info->phone}}</b>
                    </h5>
                </div>
                <div class="col-md-6" style="display: inline-flex;">
                    @lang('msg.fax') &nbsp;
                    <h5>
                        <b> {{$info->fax}}</b>
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="display: inline-flex;">
                    @lang('msg.mobile') &nbsp;
                    <h5>
                        <b> {{$info->mobile}}</b>
                    </h5>
                </div>
                <div class="col-md-6" style="display: inline-flex;">
                    @lang('msg.email') &nbsp;
                    <h5>
                        <b> {{$info->email}}</b>
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="display: inline-flex;">
                    @lang('msg.address') &nbsp;
                    <h5>
                        <b> {{$info->address_1}}</b>
                    </h5>
                </div>
            </div>
            @if ($info->address_2)
            <div class="row">
                <div class="col-md-6" style="display: inline-flex;">
                    @lang('msg.address') &nbsp;
                    <h5>
                        <b> {{$info->address_2}}</b>
                    </h5>
                </div>
            </div>
            @endif @if ($info->address_3)
            <div class="row">
                <div class="col-md-6" style="display: inline-flex;">
                    @lang('msg.address') &nbsp;
                    <h5>
                        <b> {{$info->address_3}}</b>
                    </h5>
                </div>
            </div>
            @endif @endforeach
        </div>
        @else
        <div class="px-5">
            @foreach ($infos as $info)
            <div class="row">
                <div class="col-md-6" style="display: inline-flex;">
                    @lang('msg.phone') &nbsp;
                    <h5>
                        <b> {{$info->phone}}</b>
                    </h5>
                </div>
                <div class="col-md-6" style="display: inline-flex;">
                    @lang('msg.fax') &nbsp;
                    <h5>
                        <b> {{$info->fax}}</b>
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="display: inline-flex;">
                    @lang('msg.mobile') &nbsp;
                    <h5>
                        <b> {{$info->mobile}}</b>
                    </h5>
                </div>
                <div class="col-md-6" style="display: inline-flex;">
                    @lang('msg.email') &nbsp;
                    <h5>
                        <b> {{$info->email}}</b>
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="display: inline-flex;">
                    @lang('msg.address') &nbsp;
                    <h5>
                        <b> {{$info->address_1}}</b>
                    </h5>
                </div>
            </div>
            @if ($info->address_2)
            <div class="row">
                <div class="col-md-6" style="display: inline-flex;">
                    @lang('msg.address') &nbsp;
                    <h5>
                        <b>
                            {{$info->address_2}}
                        </b>
                    </h5>
                </div>
            </div>
            @endif @if ($info->address_3)
            <div class="row">
                <div class="col-md-6" style="display: inline-flex;">
                    @lang('msg.address') &nbsp;
                    <h5>
                        <b> {{$info->address_3}}</b>
                    </h5>
                </div>
            </div>
            @endif @endforeach
        </div>
        @endif

        <br />
    </div>
</div>
@include('layouts.footer')
