<h3>Perulangan For</h3>
@for ($i = 1; $i <= 10; $i++)
    {{ $i }} <br>
@endfor

<h3>Perulangan While</h3>
@php $i = 1; @endphp
@while ($i <= 10)
    {{ $i }} <br>
    @php $i++; @endphp
@endwhile

<h3>Perulangan Foreach</h3>
@foreach ($nilai as $n)
    Nilai: {{ $n }} <br>
@endforeach
