@extends('layouts.base')

@section('css')
<link rel='stylesheet' href='/css/about.css' />
<link rel='stylesheet' href='/css/effects.css' />
@endsection

@section('content')
<style type="text/css">
    .logo-well{
        width: 10em;
    }
    .logo-img{
        width: 7em;
    }
    .self-container{
        width: 56em;
        margin-bottom: 30px;
    }
    .self-container .qrcode{
        height: 15em;
    }
    .self-text{
        font-size: 16px;
    }
</style>
<div class="self-container">
    <h1>is.app</h1>
    <p class="self-text">
        is app 短链接，顾名思义，转向必是app，特别适于app的分享链接。因为app域名刚刚开放申请不到一个月，我姑且妄称app域名第一短链接，估计app域名做短链接几乎没有更合适的了。
    </p>
    <p class="self-text">
        按照我的设想随后会尝试推出前缀形式的短链接，比如app.is.app这样的形式，当然这样操作上会复杂很多，不过正是这个域名有趣的地方。我想这大概不符合中国的备案制度，后面会想办法规避。既然开弓必没有回头箭，大家的支持就是我前行的动力。
    </p>
    <p class="self-text">
        现在你们看到的公测版，它完全基于Polr搭建而来。服务端使用最基本的LNMP架构，虽然使用了<a target="_blank" href="https://lumen.laravel.com/">为速度而生的Lumen框架</a>，但是我觉得性能上应该还有发挥的余地，留待日后慢慢优化。如果有前辈有提高性能的意见，还请不吝赐教，毕竟成本高昂。
    </p>
    <p class="self-text">
        公测期间申请的链接将长期有效，同时开放了自定义申请，如果大家没有抢到钟意的域名，抢一个短链接也不错^_^。但是也请大家注意：
    </p>
    <h4 style="color: red;">非法链接一律删除！！！恶意批量申请一律删除！！！</h4>
    <p class="self-text">
        大家如果喜欢这个产品，可以小小的支持一下，请我喝一杯咖啡。<br/>
        <img class="qrcode" src="/img/alipay.jpeg">
        <img class="qrcode" src="/img/wechat.png">
    </p>
</div>
<div class='well logo-well'>
    <img class='logo-img' src='/img/logo.png' />
</div>

<div class='about-contents'>
    @if ($role == "admin")
    <dl>
        <p>Build Information</p>
        <dt>Version: {{env('POLR_VERSION')}}</dt>
        <dt>Release date: {{env('POLR_RELDATE')}}</dt>
        <dt>App Install: {{env('APP_NAME')}} on {{env('APP_ADDRESS')}} on {{env('POLR_GENERATED_AT')}}<dt>
    </dl>
    <p>You are seeing the information above because you are logged in as an administrator.</p>
    @endif

    <p>{{env('APP_NAME')}} is powered by Polr 2, an open source, minimalist link shortening platform.
        Learn more at <a href='https://github.com/Cydrobolt/polr'>its Github page</a> or its <a href="//project.polr.me">project site</a>.
        <br />Polr is licensed under the GNU GPL License.
    </p>
</div>
<a href='#' class='btn btn-success license-btn'>More Information</a>
<pre class="license" id="gpl-license">
Copyright (C) 2013-2017 Chaoyi Zha

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
</pre>

@endsection

@section('js')
<script src='/js/about.js'></script>
@endsection
