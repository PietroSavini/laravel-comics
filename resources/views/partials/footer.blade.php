<footer>
    <section class="footer">
        <div class="wrapper">
            <div class="row_ms_footer">
                <div class="col left">
                    <div class="footer-col">
                        @php
                            $footerData = require '../config/footer.php';
                        @endphp
                        <ul>
                            <h2>{{ $footerData[0]['name'] }}</h2>
                            @foreach ($footerData[0]['components'] as $item)
                                <li>
                                    <a href="">
                                        <p>{{ $item }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <ul>
                            <h2>{{ $footerData[1]['name'] }}</h2>
                            @foreach ($footerData[1]['components'] as $item)
                                <li>
                                    <a href="">
                                        <p>{{ $item }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="footer-col">

                        <ul>
                            <h2>{{ $footerData[2]['name'] }}</h2>
                            @foreach ($footerData[2]['components'] as $item)
                                <li>
                                    <a href="">
                                        <p>{{ $item }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="footer-col">

                        <ul>
                            <h2>{{ $footerData[3]['name'] }}</h2>
                            @foreach ($footerData[3]['components'] as $item)
                                <li>
                                    <a href="">
                                        <p>{{ $item }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>

                </div>
                <div class="col right">
                    <img :src="dcLogo" alt="">
                </div>
            </div>
        </div>
    </section>
</footer>
