<header>
    <div class="wrapper">
        <a href=""><img src="" alt="DC-logo.png"></a>
        <div>
            <nav>
                <ul>
                    @php
                        $nav = require '../config/header.php'
                    @endphp
                    @foreach ($nav as $item)
                    <li><a href="{{$item['href']}}">{{ $item['link_name']}}</a></li>   
                    @endforeach
                </ul>
            </nav>
        </div>
    </div> 
</header>
           