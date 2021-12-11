<x-app-layout>
    <form method="POST" action="/feedback">
        @csrf

        <h2>Вы можете задать нам вопрос, заполнив форму ниже</h2><br></br>
        @if ($errors->any())

        @foreach ($errors->all() as $error)
        <h2>{{ $error }}</h2><br>
        @endforeach

        @endif
        @if(isset($msg))
         <h2>{{$msg}}</h2><br></br>
        @endif

        <input type="text" placeholder="Имя" id="name" name="name"><br />
        <input type="text" placeholder="Email" id="email" name="email"><br />
        <input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br />
        <textarea name="message" id="message" placeholder="Введите сюда ваше сообщение"></textarea><br />
        <input type="submit" name="done" id="done" value="Отправить">
    </form>
</x-app-layout>
