<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <header class="bg-red-800 text-white p-4 flex justify-between items-center">
        <h1 class="text-3xl font-bold">header</h1>
    </header>


    <main class="p-4">

            <div class="card bg-gray-200 p-4 max-w-3xl mx-auto">

                @if($profile == 'PROFILO CIOCCOLATO')
                    <div class="wrapper-content">
                        <h2 class="font-bold text-lg" style="color: rgb(83, 43, 41)">PROFILO CIOCCOLATO (maggioranza di A)</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lobortis sollicitudin sollicitudin. Phasellus purus massa, fermentum et finibus in, fringilla sit amet neque. Vestibulum ante enim, cursus ut nulla quis, gravida tincidunt lorem. Morbi laoreet enim vitae orci blandit aliquet faucibus faucibus ex. Curabitur lobortis viverra faucibus. Integer molestie ligula id odio lobortis, eget aliquet ipsum faucibus. Pellentesque molestie nec augue et facilisis. Ut facilisis commodo turpis, a fermentum nibh pellentesque at. Integer lacinia ac risus pellentesque convallis. Pellentesque ac sem id tellus vehicula aliquet. Sed vitae nibh sodales, convallis ante a, pellentesque urna.
                        </p>
                    </div>

                @elseif($profile == 'PROFILO VANIGLIA')
                    <div class="wrapper-content">
                        <h2 class="font-bold text-lg" style="color: rgb(204, 183, 91)">PROFILO VANIGLIA (maggioranza di B)</h2>
                        <p>
                            Donec tincidunt elit in mollis congue. Aliquam ac tincidunt leo, in auctor enim. Morbi cursus diam sit amet sodales molestie. Sed porta dapibus porttitor. Duis malesuada quam nisl, nec facilisis metus vulputate vel. Donec consequat non odio vitae maximus. Mauris ut dui fringilla, egestas ligula at, ornare ex. Ut scelerisque nunc nisi, malesuada congue nisi elementum vel. Sed augue nulla, mollis sit amet fermentum varius, dapibus ac tortor. Aenean nec sagittis justo, non pretium libero. Morbi quis varius lacus, nec lacinia ligula. Ut vel pharetra orci, id laoreet sem. Nulla facilisi. Integer dapibus nibh sem, in vestibulum arcu scelerisque tincidunt. Pellentesque ligula metus, ultricies quis lectus id, blandit tincidunt nisl. Fusce non venenatis sapien. In congue dictum risus et mattis. Cras magna ligula, auctor ac augue eget, interdum finibus risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec quis arcu semper, semper nunc id, pellentesque erat. Quisque gravida eu purus quis porta. Proin ut nunc eu nunc maximus semper eu vel quam. Nullam ac ante eu ipsum dignissim efficitur.
                        </p>
                    </div>
                
                @elseif($profile == 'PROFILO PEPERONCINO')
                    <div class="wrapper-content">
                        <h2 class="font-bold text-lg" style="color: red">PROFILO PEPERONCINO (maggioranza di C)</h2>
                        <p>
                            Sed suscipit ante mauris, malesuada venenatis libero egestas quis. Sed posuere quam vitae eros imperdiet porttitor. Nulla facilisi. Nulla augue ligula, lacinia id quam ut, varius porttitor massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras vel tempus ligula. Ut id sem scelerisque, sodales ipsum vitae, euismod elit. Sed at tortor lectus. Praesent at lectus dolor. Fusce ultrices nisi augue, eget rutrum orci rhoncus et. Sed mattis commodo dapibus. Nullam sodales dapibus sapien eu ultrices. Phasellus convallis turpis in metus elementum, vitae venenatis tellus rutrum. Duis sit amet risus varius, dignissim nunc quis, consequat justo. Duis rhoncus, urna quis condimentum faucibus, tellus leo posuere erat, nec laoreet odio tellus ac eros. Duis facilisis erat quis ipsum mollis dictum. Nullam suscipit turpis nec laoreet pretium. In metus magna, vestibulum sit amet pharetra vel, volutpat at urna. Donec euismod, elit quis venenatis luctus, sapien orci lobortis nunc, eu tincidunt leo diam vitae sem. Quisque odio nulla, consectetur vitae lorem ac, ornare vestibulum risus. Duis justo purus, scelerisque id turpis sit amet, pellentesque dignissim nunc. Quisque ullamcorper ac urna a porttitor. Vivamus dolor lorem, consectetur id laoreet sit amet, hendrerit ac nisi. Nulla viverra, velit vel vulputate elementum, felis eros venenatis turpis, eget accumsan elit libero eu ipsum. Integer eu facilisis metus. Phasellus sit amet mi sit amet diam imperdiet eleifend. Aenean in nisi urna.
                        </p>
                    </div>
                @endif

            </div>
            
    </main>


    <footer class="bg-gray-300 text-gray-700 p-4 flex justify-center items-center">
        <p>footer</p>
    </footer>
</body>
</html>