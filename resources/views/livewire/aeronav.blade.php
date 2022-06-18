<div>
    @foreach ($aeronaves as $aeronave)

        {{$aeronave->nombre}}

    @endforeach

 

    {{ $aeronaves->links() }}
</div>
