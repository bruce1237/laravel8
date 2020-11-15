<h1>Test Blade File</h1>
<h2>Include file:</h2>
@Include('header')
<hr />


@php

$str = 'This is a string avarlable';
$arr =[
'arrayValue1',
'arrayValue2',
'arrayValue3',
'arrayValue4',
];
@endphp

<h2>Str avarlable:</h2>
<p> {{ $str }}</p>

<hr />
<h2>Array avarlable</h2>
<ul>
    @foreach ($arr as $value)
        <li>{{ $value }}</li>
    @endforeach
</ul>
<hr />

<h2>For loop</h2>
<ol>
    @for ($i = 0; $i < 10; $i++)
        <li>$i ={{ $i }}</li>
    @endfor
</ol>

<h2>If statements</h2>

@if (isset($str))
    <p>variable $str is set:{{ $str }}</p>
@else
    <p>variable $str is not set</p>
@endif

<h2>PHP CODE</h2>
<ol>
    <li>{{ $str ? '$Str is not empty' : 'Str is empty' }}</li>
    <li>WRONG!! {{  $str1 = 'This is ECHO from PHP' }}</li>
</ol>
