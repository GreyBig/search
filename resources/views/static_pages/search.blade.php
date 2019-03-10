@extends('layouts.default')

@section('content')

<form  class="form-inline mt-4 mt-lg-5" method="POST" action="{{ route('store') }}">
      {{ csrf_field() }}
      <input class="form-control mr-sm-2 col-md-6 offset-md-3" type="text" placeholder="请输入手机号码" name="phonenumber" aria-label="Search">
      <button  class="btn btn-outline-success my-2 my-sm-0 " type="submit">分析号码</button>
</form>

<div class="my-auto jumbotron">

      <div class="lead">
        <p>
            五行数理说明：<br/>号码{{ $num }}的数理为<span class="green">{{ $sum }},<br/>{{ $datas->forecast_message}},</span>
            <br/><span class="small-font">其暗示的信息</span>：
        </p>
      </div>
      <h3 style="font-weight:bold">{{ $datas->implied_information }}</h3>
      <p class="small-font">
        诗云: {{ $datas->poetry_cloud }}
      </p>
      <!-- 幸运星 -->
        @if ($datas->lucky_star=4)
            <div>
                <span class="gray">幸运星：</span>
                <span class="red">★★★★</span><span class="gray">☆☆☆</span>
            </div>
            <div>号码价值评估: <span>¥21.90<span></div>
        @elseif ($datas->lucky_star=6)
            <div>
                <span class="gray">幸运星：</span>
                <span class="red">★★★★★★</span><span class="gray">☆</span>
            </div>
        @elseif ($datas->lucky_star=1)
            <div>
                <span class="gray">幸运星：</span>
                <span class="red">★</span><span class="gray">☆☆☆☆☆☆</span>
            </div>
        @endif
        <div>号码{{ $num }}的个性系数为{{ $datas->personality_coefficient }},主人性格类型：<span class="green">{{ $datas->personality_type }},</span><br/>具体表现：{{ $datas->performance }}<div>
        </div>
@stop
