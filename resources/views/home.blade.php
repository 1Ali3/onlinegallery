<x-app-layout>
    <x-slot name="banner">
        <img src="img/ban3.jpg" width="1300" height="100" ></a>
    </x-slot>

        @foreach ($paintings as $painting)
        <div id="bigArticle">
            <a  target="_blank" href="img/img">                        <!--здесь появляются картины в блоках-->
                <img img width="100" height="70" src="img/paintings/{{$painting->img}}" ></a>
            <h2>{{$painting->name}} </h2>{{$painting->author}}{{$painting->year}}
            <br></br><p>{{$painting->description}}</p>
            <a href="gallery/{{$painting->gallery}}">
                <div class="more"><img src="img/gde.png" width="1300" height="100" alt="Где посмотреть?" title="Где посмотреть?"></div>
            </a>
        </div>
        @endforeach
        <br></br>
        <div class="clear"></div> 


</x-app-layout>
