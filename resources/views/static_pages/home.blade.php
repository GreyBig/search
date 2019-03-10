@extends('layouts.default')

@section('content')
<!-- <div class="offset-md-2 col-md-8">
  <div class="card ">
    <div class="card-header" >
      <h5 style="margin-bottom: -4px">测试</h5>
    </div>
    <div class="card-body">
      @include('shared._errors')
      <form method="POST" action="{{ route('store') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="phonenumber">手机号码：</label>
            <input type="text" name="phonenumber" class="form-control">
          </div>

          <button type="submit" class="btn btn-primary">分析号码</button>
      </form>

      <hr>

      @include('static_pages._recommed')

    </div>
  </div>
</div> -->

<main role="main" class="my-auto text-center">
    <h1 class="bfont titlesize">手机号预测</h1>
    <p class="mfont">传说中，数字是一种符号，人们经常随身携带的符号则具
    有特定的暗示力，您相信吗？</p>
    <!-- <p style="color:#C5AAEE">传说中，数字是一种符号，人们经常随身携带的符号则具有特定的暗示力，您相信吗？</p>
    <p style="color:#B8E1E1">传说中，数字是一种符号，人们经常随身携带的符号则具有特定的暗示力，您相信吗？</p>
    <p style="color:#E4DAB4">传说中，数字是一种符号，人们经常随身携带的符号则具有特定的暗示力，您相信吗？</p> -->
    <!-- <p style="color:#B4D1E4">传说中，数字是一种符号，人们经常随身携带的符号则具有特定的暗示力，您相信吗？</p>
    <p style="color:#A3A3F5">传说中，数字是一种符号，人们经常随身携带的符号则具有特定的暗示力，您相信吗？</p>
    <p style="color:#333333">传说中，数字是一种符号，人们经常随身携带的符号则具有特定的暗示力，您相信吗？</p>
    <p style="color:#f66D9b">传说中，数字是一种符号，人们经常随身携带的符号则具有特定的暗示力，您相信吗？</p> -->
    @include('shared._errors')
    <form role="form" class=" mt-4 mt-md-0" method="POST" action="{{ route('store') }}">
      {{ csrf_field() }}
      <input class="form-control mr-sm-2 col-md-6 offset-md-3" type="text" placeholder="请输入手机号码" name="phonenumber" aria-label="Search">
      <button style="margin-top: 20px;" class="btn btn-outline-success " type="submit">分析号码</button>
    </form>
    <hr class="yellow"/>

  </main>
  @include('static_pages._recommed')

@stop
