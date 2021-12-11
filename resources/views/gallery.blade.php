<x-app-layout>
    <div id="about_us">
        @if(isset($gallery))
        <h2>Вы можете увидеть это произведение вживую!</h2>
        <br></br>
        <p>В данный момент картина находится по адресу:</p><br></br>
        <h2><i>{{$gallery->name}}</i></h2>{{$gallery->location}}
        <br></br>
        <img src="/img/{{$gallery->img}}" alt="Статья 1" title="Статья 1">

        <p>сайт: <a href="{{$gallery->website}}" target="_blank">{{$gallery->website}}</a></p>
        @else
        <h2>Gallery not found</h2>
        @endif

    </div>
</x-app-layout>
