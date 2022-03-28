<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Soy Pablo Bastias, Programador Web Full Stack y estudiante avanzado de Ingenieria Informatica" />

        <!-- Styles -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/main.css')}}" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link href="{{asset('imgs/shortcut-icon.ico')}}" rel="shortcut icon">

        <title>PabloMultifunciones</title>

    </head>
    <body id="body">
        <div class="container-fluid p-0" >
            <div class="col col-12" id="description">
                <div class="row">
                    <div class="col col-6" data-aos="fade-down-right">
                        <img style="width:100%" src="{{asset('imgs/banner_principal.svg')}}">
                    </div>
                    <div class="col col-6 text-center" data-aos="fade-down-left" style="color: #F2F2F2;">
                        <img class="rounded-circle" id="foto-perfil" src="{{asset('imgs/foto.jpg')}}">
                        <p class="h2" style="font-size: 3vw">Soy Pablo Bastias, <strong>Programador Web Full Stack</strong> y estudiante avanzado de Ingenieria Informatica.</p>
                    </div>
                </div>
            </div>
            <div class="col col-12 p-3" data-aos="fade-left" id="barra">
                <div class="row text-center">
                    <div class="col col-4" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB ;transform: ;msFilter:;"><path d="M13.707 2.293a.999.999 0 0 0-1.414 0l-5.84 5.84c-.015-.001-.029-.009-.044-.009a.997.997 0 0 0-.707.293L4.288 9.831a2.985 2.985 0 0 0-.878 2.122c0 .802.313 1.556.879 2.121l.707.707-2.122 2.122A2.92 2.92 0 0 0 2 19.012a2.968 2.968 0 0 0 1.063 2.308c.519.439 1.188.68 1.885.68.834 0 1.654-.341 2.25-.937l2.04-2.039.707.706c1.134 1.133 3.109 1.134 4.242.001l1.415-1.414a.997.997 0 0 0 .293-.707c0-.026-.013-.05-.015-.076l5.827-5.827a.999.999 0 0 0 0-1.414l-8-8zm-.935 16.024a1.023 1.023 0 0 1-1.414-.001l-1.414-1.413a.999.999 0 0 0-1.414 0l-2.746 2.745a1.19 1.19 0 0 1-.836.352.91.91 0 0 1-.594-.208A.978.978 0 0 1 4 19.01a.959.959 0 0 1 .287-.692l2.829-2.829a.999.999 0 0 0 0-1.414L5.701 12.66a.99.99 0 0 1-.292-.706c0-.268.104-.519.293-.708l.707-.707 7.071 7.072-.708.706zm1.889-2.392L8.075 9.339 13 4.414 19.586 11l-4.925 4.925z"></path></svg>
                        <p id="name-icon">Diseñar</p>
                    </div>
                    <div class="col col-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB ;transform: ;msFilter:;"><path d="M19 3H5c-1.103 0-2 .897-2 2v4h18V5c0-1.103-.897-2-2-2zM3 19c0 1.103.897 2 2 2h8V11H3v8zm12 2h4c1.103 0 2-.897 2-2v-8h-6v10z"></path></svg>
                        <p id="name-icon">Maquetar</p>
                    </div>
                    <div class="col col-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB ;transform: ;msFilter:;"><path d="m7.375 16.781 1.25-1.562L4.601 12l4.024-3.219-1.25-1.562-5 4a1 1 0 0 0 0 1.562l5 4zm9.25-9.562-1.25 1.562L19.399 12l-4.024 3.219 1.25 1.562 5-4a1 1 0 0 0 0-1.562l-5-4zm-1.649-4.003-4 18-1.953-.434 4-18z"></path></svg>
                        <p id="name-icon">Programar</p>
                    </div>
                </div>
            </div>
            <div class="col col-12" id="description">
                <div class="row">
                    <div data-aos="fade-right" class="col col-6">
                        <div style="padding-top: 10%;">
                            <p class="h2 text-center" style="font-size: 3vw">Llevo un año desarrollando aplicaciones y sitios web con diseño responsivo y profesional. Mis resultados siempre son orientados a complacer al cliente.</p>
                        </div>
                    </div>
                    <div data-aos="flip-right" class="col col-6">
                        <img style="width:100%;" src="{{asset('imgs/banner_secundario_1.svg')}}">
                    </div>
                </div>
            </div>
            <div class="col col-12 p-3" id="barra" data-aos="fade-right">
                <div class="row text-center">
                    <h2>Mis Habilidades</h2>
                    <div class="col col-2" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB;transform: ;msFilter:;"><path d="M4.136 3.012h15.729l-1.431 16.15-6.451 1.826-6.414-1.826-1.433-16.15zm5.266 7.302-.173-2.035 7.533.002.173-1.963-9.87-.002.522 5.998h6.835l-.243 2.566-2.179.602-2.214-.605-.141-1.58H7.691l.247 3.123L12 17.506l4.028-1.08.558-6.111H9.402v-.001z"></path></svg>                        
                        <p id="name-icon">HTML</p>
                    </div>
                    <div class="col col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB;transform: ;msFilter:;"><path d="M4.192 3.143h15.615l-1.42 16.034-6.404 1.812-6.369-1.813L4.192 3.143zM16.9 6.424l-9.8-.002.158 1.949 7.529.002-.189 2.02H9.66l.179 1.913h4.597l-.272 2.62-2.164.598-2.197-.603-.141-1.569h-1.94l.216 2.867L12 17.484l3.995-1.137.905-9.923z"></path></svg>                       
                        <p id="name-icon">CSS</p>
                    </div>
                    <div class="col col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB;transform: ;msFilter:;"><path d="M3 3h18v18H3V3zm16.525 13.707c-.131-.821-.666-1.511-2.252-2.155-.552-.259-1.165-.438-1.349-.854-.068-.248-.078-.382-.034-.529.113-.484.687-.629 1.137-.495.293.09.563.315.732.676.775-.507.775-.507 1.316-.844-.203-.314-.304-.451-.439-.586-.473-.528-1.103-.798-2.126-.775l-.528.067c-.507.124-.991.395-1.283.754-.855.968-.608 2.655.427 3.354 1.023.765 2.521.933 2.712 1.653.18.878-.652 1.159-1.475 1.058-.607-.136-.945-.439-1.316-1.002l-1.372.788c.157.359.337.517.607.832 1.305 1.316 4.568 1.249 5.153-.754.021-.067.18-.528.056-1.237l.034.049zm-6.737-5.434h-1.686c0 1.453-.007 2.898-.007 4.354 0 .924.047 1.772-.104 2.033-.247.517-.886.451-1.175.359-.297-.146-.448-.349-.623-.641-.047-.078-.082-.146-.095-.146l-1.368.844c.229.473.563.879.994 1.137.641.383 1.502.507 2.404.305.588-.17 1.095-.519 1.358-1.059.384-.697.302-1.553.299-2.509.008-1.541 0-3.083 0-4.635l.003-.042z"></path></svg>                   
                        <p id="name-icon">Javascript</p>
                    </div>
                    <div class="col col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB;transform: ;msFilter:;"><path d="M2.15 16.78h1.57a.14.14 0 0 0 .14-.12l.35-1.82h1.22a4.88 4.88 0 0 0 1.51-.2A2.79 2.79 0 0 0 8 14a3.18 3.18 0 0 0 .67-.85 3.43 3.43 0 0 0 .36-1 2.43 2.43 0 0 0-.41-2.16 2.64 2.64 0 0 0-2.09-.78h-3a.16.16 0 0 0-.15.13L2 16.6a.19.19 0 0 0 0 .13.17.17 0 0 0 .15.05zM5 10.62h1a1.45 1.45 0 0 1 1.08.29c.17.18.2.52.11 1a1.81 1.81 0 0 1-.57 1.12 2.17 2.17 0 0 1-1.33.33h-.8zm9.8-.95a2.7 2.7 0 0 0-1.88-.51h-1.19l.33-1.76a.15.15 0 0 0 0-.13.16.16 0 0 0-.11 0h-1.57a.14.14 0 0 0-.14.12l-1.38 7.27a.13.13 0 0 0 0 .12.13.13 0 0 0 .11.06h1.54a.14.14 0 0 0 .14-.13l.77-4.07h1.11c.45 0 .61.1.66.16a.81.81 0 0 1 0 .62l-.61 3.24a.13.13 0 0 0 0 .12.14.14 0 0 0 .11.06h1.56a.16.16 0 0 0 .15-.13l.64-3.4a1.7 1.7 0 0 0-.24-1.64zm4.52-.51h-3.13a.14.14 0 0 0-.15.13l-1.46 7.31a.16.16 0 0 0 0 .13.14.14 0 0 0 .11.05h1.63a.14.14 0 0 0 .15-.12l.37-1.82h1.27a5.28 5.28 0 0 0 1.56-.2 3 3 0 0 0 1.18-.64 3.31 3.31 0 0 0 .7-.85 3.45 3.45 0 0 0 .37-1 2.38 2.38 0 0 0-.42-2.16 2.81 2.81 0 0 0-2.18-.83zm.62 2.77a1.83 1.83 0 0 1-.6 1.12 2.28 2.28 0 0 1-1.37.33h-.8l.54-2.76h1a1.6 1.6 0 0 1 1.13.29c.16.18.16.52.1 1.02z"></path></svg>                    
                        <p id="name-icon">PHP</p>
                    </div>
                    <div class="col col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB;transform: ;msFilter:;"><path d="M12 21.985c-.275 0-.532-.074-.772-.202l-2.439-1.448c-.365-.203-.182-.277-.072-.314.496-.165.588-.201 1.101-.493.056-.037.129-.02.185.017l1.87 1.12c.074.036.166.036.221 0l7.319-4.237c.074-.036.11-.11.11-.202V7.768c0-.091-.036-.165-.11-.201l-7.319-4.219c-.073-.037-.165-.037-.221 0L4.552 7.566c-.073.036-.11.129-.11.201v8.457c0 .073.037.166.11.202l2 1.157c1.082.548 1.762-.095 1.762-.735V8.502c0-.11.091-.221.22-.221h.936c.108 0 .22.092.22.221v8.347c0 1.449-.788 2.294-2.164 2.294-.422 0-.752 0-1.688-.46l-1.925-1.099a1.55 1.55 0 0 1-.771-1.34V7.786c0-.55.293-1.064.771-1.339l7.316-4.237a1.637 1.637 0 0 1 1.544 0l7.317 4.237c.479.274.771.789.771 1.339v8.458c0 .549-.293 1.063-.771 1.34l-7.317 4.236c-.241.11-.516.165-.773.165zm2.256-5.816c-3.21 0-3.87-1.468-3.87-2.714 0-.11.092-.221.22-.221h.954c.11 0 .201.073.201.184.147.971.568 1.449 2.514 1.449 1.54 0 2.202-.35 2.202-1.175 0-.477-.185-.825-2.587-1.063-1.999-.2-3.246-.643-3.246-2.238 0-1.485 1.247-2.366 3.339-2.366 2.347 0 3.503.809 3.649 2.568a.297.297 0 0 1-.056.165c-.037.036-.091.073-.146.073h-.953a.212.212 0 0 1-.202-.164c-.221-1.012-.789-1.34-2.292-1.34-1.689 0-1.891.587-1.891 1.027 0 .531.237.696 2.514.99 2.256.293 3.32.715 3.32 2.294-.02 1.615-1.339 2.531-3.67 2.531z"></path></svg>
                        <p id="name-icon">NodeJS</p>
                    </div>
                    <div class="col col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB;transform: ;msFilter:;"><path d="m12 12.765 5.592-9.437h-3.276L12 7.33v.002L9.688 3.328h-3.28z"></path><path d="M18.461 3.332 12 14.235 5.539 3.332H1.992L12 20.672l10.008-17.34z"></path></svg>                        
                        <p id="name-icon">VueJS</p>
                    </div>
                    <div class="col col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB;transform: ;msFilter:;"><circle cx="12" cy="11.245" r="1.785"></circle><path d="m7.002 14.794-.395-.101c-2.934-.741-4.617-2.001-4.617-3.452 0-1.452 1.684-2.711 4.617-3.452l.395-.1.111.391a19.507 19.507 0 0 0 1.136 2.983l.085.178-.085.178c-.46.963-.841 1.961-1.136 2.985l-.111.39zm-.577-6.095c-2.229.628-3.598 1.586-3.598 2.542 0 .954 1.368 1.913 3.598 2.54.273-.868.603-1.717.985-2.54a20.356 20.356 0 0 1-.985-2.542zm10.572 6.095-.11-.392a19.628 19.628 0 0 0-1.137-2.984l-.085-.177.085-.179c.46-.961.839-1.96 1.137-2.984l.11-.39.395.1c2.935.741 4.617 2 4.617 3.453 0 1.452-1.683 2.711-4.617 3.452l-.395.101zm-.41-3.553c.4.866.733 1.718.987 2.54 2.23-.627 3.599-1.586 3.599-2.54 0-.956-1.368-1.913-3.599-2.542a20.683 20.683 0 0 1-.987 2.542z"></path><path d="m6.419 8.695-.11-.39c-.826-2.908-.576-4.991.687-5.717 1.235-.715 3.222.13 5.303 2.265l.284.292-.284.291a19.718 19.718 0 0 0-2.02 2.474l-.113.162-.196.016a19.646 19.646 0 0 0-3.157.509l-.394.098zm1.582-5.529c-.224 0-.422.049-.589.145-.828.477-.974 2.138-.404 4.38.891-.197 1.79-.338 2.696-.417a21.058 21.058 0 0 1 1.713-2.123c-1.303-1.267-2.533-1.985-3.416-1.985zm7.997 16.984c-1.188 0-2.714-.896-4.298-2.522l-.283-.291.283-.29a19.827 19.827 0 0 0 2.021-2.477l.112-.16.194-.019a19.473 19.473 0 0 0 3.158-.507l.395-.1.111.391c.822 2.906.573 4.992-.688 5.718a1.978 1.978 0 0 1-1.005.257zm-3.415-2.82c1.302 1.267 2.533 1.986 3.415 1.986.225 0 .423-.05.589-.145.829-.478.976-2.142.404-4.384-.89.198-1.79.34-2.698.419a20.526 20.526 0 0 1-1.71 2.124z"></path><path d="m17.58 8.695-.395-.099a19.477 19.477 0 0 0-3.158-.509l-.194-.017-.112-.162A19.551 19.551 0 0 0 11.7 5.434l-.283-.291.283-.29c2.08-2.134 4.066-2.979 5.303-2.265 1.262.727 1.513 2.81.688 5.717l-.111.39zm-3.287-1.421c.954.085 1.858.228 2.698.417.571-2.242.425-3.903-.404-4.381-.824-.477-2.375.253-4.004 1.841.616.67 1.188 1.378 1.71 2.123zM8.001 20.15a1.983 1.983 0 0 1-1.005-.257c-1.263-.726-1.513-2.811-.688-5.718l.108-.391.395.1c.964.243 2.026.414 3.158.507l.194.019.113.16c.604.878 1.28 1.707 2.02 2.477l.284.29-.284.291c-1.583 1.627-3.109 2.522-4.295 2.522zm-.993-5.362c-.57 2.242-.424 3.906.404 4.384.825.47 2.371-.255 4.005-1.842a21.17 21.17 0 0 1-1.713-2.123 20.692 20.692 0 0 1-2.696-.419z"></path><path d="M12 15.313c-.687 0-1.392-.029-2.1-.088l-.196-.017-.113-.162a25.697 25.697 0 0 1-1.126-1.769 26.028 26.028 0 0 1-.971-1.859l-.084-.177.084-.179c.299-.632.622-1.252.971-1.858.347-.596.726-1.192 1.126-1.77l.113-.16.196-.018a25.148 25.148 0 0 1 4.198 0l.194.019.113.16a25.136 25.136 0 0 1 2.1 3.628l.083.179-.083.177a24.742 24.742 0 0 1-2.1 3.628l-.113.162-.194.017c-.706.057-1.412.087-2.098.087zm-1.834-.904c1.235.093 2.433.093 3.667 0a24.469 24.469 0 0 0 1.832-3.168 23.916 23.916 0 0 0-1.832-3.168 23.877 23.877 0 0 0-3.667 0 23.743 23.743 0 0 0-1.832 3.168 24.82 24.82 0 0 0 1.832 3.168z"></path></svg>
                        <p id="name-icon">ReactJS</p>
                    </div>
                    <div class="col col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB;transform: ;msFilter:;"><path d="M3.345 6.935c-1.756 2.523-1.538 5.806-.196 8.487l.098.19c.021.04.041.082.063.121.012.024.026.047.039.069a7.842 7.842 0 0 0 .198.344l.073.12a9.14 9.14 0 0 0 .211.33 10.179 10.179 0 0 0 .221.319l.036.049c.063.088.129.175.196.261l.074.094.182.223.069.082c.082.097.167.194.252.289l.005.005c.004.004.007.006.01.011.083.091.17.181.256.271l.083.083.205.201.084.08c.092.087.186.172.281.256l.004.004.049.041c.083.073.169.145.255.215l.105.084a11.03 11.03 0 0 0 .565.424c.029.021.057.042.087.062l.024.017c.076.053.154.103.231.153.033.022.066.045.101.067a10.975 10.975 0 0 0 .886.509c.065.034.129.068.195.101l.045.022.08.039c.102.048.205.097.308.143l.066.029c.119.052.239.102.36.149l.088.035a13.895 13.895 0 0 0 .382.142c.125.044.252.085.38.124l.092.028c.128.039.256.085.39.11 8.492 1.548 10.958-5.102 10.958-5.102-2.072 2.698-5.748 3.41-9.232 2.618-.132-.03-.261-.071-.39-.109l-.097-.029a10.929 10.929 0 0 1-.755-.264l-.093-.036c-.12-.047-.239-.097-.356-.148l-.071-.031a11.932 11.932 0 0 1-.301-.14l-.087-.042c-.078-.038-.155-.079-.232-.118-.051-.027-.104-.053-.155-.082a8.294 8.294 0 0 1-.278-.156l-.094-.052a11.4 11.4 0 0 1-.363-.223l-.098-.065a10.557 10.557 0 0 1-.259-.172l-.083-.059c-.082-.058-.164-.116-.244-.176a11.921 11.921 0 0 1-.328-.255l-.099-.079c-.092-.076-.184-.152-.274-.231a12.01 12.01 0 0 1-.319-.288c-.028-.026-.055-.051-.081-.078a7.985 7.985 0 0 1-.208-.203l-.081-.081a10.76 10.76 0 0 1-.254-.269l-.012-.012a11.75 11.75 0 0 1-.258-.293l-.067-.081a10.313 10.313 0 0 1-.254-.313 11.855 11.855 0 0 1-.215-.286C3.864 11.825 3.17 8.186 4.715 5.198"></path><path d="M8.794 4.809c-1.27 1.827-1.2 4.273-.21 6.205.166.324.353.639.561.938.191.273.401.597.654.816.092.101.187.199.284.295l.076.074c.094.092.19.182.291.271l.011.01.003.002c.111.097.224.19.34.281l.078.06a8.281 8.281 0 0 0 .366.268c.053.037.108.072.161.107.026.017.051.035.078.051a7.14 7.14 0 0 0 .301.184c.076.044.155.087.233.13.026.015.055.029.082.043.055.028.108.057.163.083a9.645 9.645 0 0 0 .365.171l.074.031c.093.039.186.077.281.113l.117.044c.086.032.171.06.256.089l.117.037c.121.038.243.085.37.107 6.556 1.086 8.068-3.961 8.068-3.961-1.364 1.964-4.006 2.902-6.825 2.17a7.866 7.866 0 0 1-.743-.232l-.118-.043a7.629 7.629 0 0 1-.353-.145 8.79 8.79 0 0 1-.344-.159c-.057-.028-.113-.058-.17-.087l-.099-.051a9.352 9.352 0 0 1-.533-.313l-.08-.053a7.65 7.65 0 0 1-.602-.435c-1.234-.974-2.213-2.306-2.678-3.815-.488-1.566-.382-3.323.462-4.75"></path><path d="M13.379 3.221c-.749 1.102-.823 2.469-.304 3.686.548 1.292 1.671 2.304 2.981 2.785a3.85 3.85 0 0 0 .234.079c.077.024.152.053.233.067 3.62.699 4.601-1.857 4.862-2.234-.86 1.239-2.306 1.536-4.078 1.105a5.403 5.403 0 0 1-.939-.344 5.39 5.39 0 0 1-.895-.545c-1.585-1.204-2.573-3.501-1.536-5.372"></path></svg>
                        <p id="name-icon">JQuery</p>
                    </div>
                    <div class="col col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB;transform: ;msFilter:;"><path d="M19.891 7.788a8.966 8.966 0 0 1 1.099 4.313 8.986 8.986 0 0 1-4.47 7.771l2.746-7.939c.513-1.282.684-2.309.684-3.219a7.165 7.165 0 0 0-.059-.926m-6.651.087a14.14 14.14 0 0 0 1.026-.088c.485-.063.428-.775-.056-.749 0 0-1.463.112-2.4.112-.887 0-2.375-.125-2.375-.125-.487-.024-.55.713-.061.738 0 0 .449.052.938.075l1.399 3.838-1.975 5.899-3.274-9.724a17.006 17.006 0 0 0 1.028-.083c.487-.063.43-.775-.055-.747 0 0-1.455.115-2.395.115-.167 0-.365-.007-.575-.013C6.093 4.726 8.862 3.113 12 3.113c2.341 0 4.471.894 6.071 2.36-.038-.002-.076-.008-.117-.008-.883 0-1.51.77-1.51 1.596 0 .741.427 1.369.883 2.108.343.601.742 1.37.742 2.481 0 .763-.295 1.662-.685 2.899l-.896 2.987-3.25-9.675.002.014zM12 21.087a8.983 8.983 0 0 1-2.54-.364l2.697-7.838 2.763 7.572c.021.044.042.085.065.124a9.016 9.016 0 0 1-2.985.508m-8.99-8.988a8.94 8.94 0 0 1 .778-3.658l4.287 11.749a8.993 8.993 0 0 1-5.065-8.091m8.99-10c-5.513 0-10 4.487-10 10s4.487 10 10 10 10-4.487 10-10-4.487-10-10-10"></path></svg>
                        <p id="name-icon">Wordpress</p>
                    </div>
                    <div class="col col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB;transform: ;msFilter:;"><path d="M20 6c0-2.168-3.663-4-8-4S4 3.832 4 6v2c0 2.168 3.663 4 8 4s8-1.832 8-4V6zm-8 13c-4.337 0-8-1.832-8-4v3c0 2.168 3.663 4 8 4s8-1.832 8-4v-3c0 2.168-3.663 4-8 4z"></path><path d="M20 10c0 2.168-3.663 4-8 4s-8-1.832-8-4v3c0 2.168 3.663 4 8 4s8-1.832 8-4v-3z"></path></svg>
                        <p id="name-icon">MySql</p>
                    </div>
                    <div class="col col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB;transform: ;msFilter:;"><path d="M18.002 2.997H5.999A3.011 3.011 0 0 0 2.997 6v12.002a3.012 3.012 0 0 0 3.002 3.001h12.003a3.012 3.012 0 0 0 3.001-3.001V6a3.012 3.012 0 0 0-3.001-3.003zm-1.64 12.647c-.152.36-.389.68-.693.927a3.594 3.594 0 0 1-1.206.614c-.49.151-1.074.229-1.75.229H7.888V6.909h5.103c.943 0 1.7.213 2.267.646.569.436.854 1.082.854 1.958 0 .528-.13.983-.389 1.357-.259.373-.63.664-1.111.868v.034c.642.135 1.137.438 1.464.912.327.473.493 1.069.493 1.789 0 .405-.078.788-.225 1.147l.02.021v.003zm-2.084-2.589c-.309-.282-.739-.419-1.297-.419H9.737v3.276h3.253c.554 0 .991-.144 1.298-.435.308-.289.464-.701.464-1.229-.005-.518-.156-.919-.464-1.193h-.014.004zm-.451-2.119c.299-.251.444-.613.444-1.084 0-.526-.131-.902-.397-1.116-.264-.214-.646-.326-1.146-.326H9.727v2.898h3.001c.436.001.81-.127 1.099-.372z"></path></svg>
                        <p id="name-icon">Bootstrap</p>
                    </div>
                    <div class="col col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10vw" height="10vw" viewBox="0 0 24 24" style="fill: #CA6AFB;transform: ;msFilter:;"><path d="M15.332 8.668a3.333 3.333 0 0 0 0-6.663H8.668a3.333 3.333 0 0 0 0 6.663 3.333 3.333 0 0 0 0 6.665 3.333 3.333 0 0 0 0 6.664A3.334 3.334 0 0 0 12 18.664V8.668h3.332z"></path><circle cx="15.332" cy="12" r="3.332"></circle></svg>                        
                        <p id="name-icon">Figma</p>
                    </div>
                </div>
            </div>
            <div class="col col-12" id="description">
                <div class="row">
                    <div class="col col-12">
                        <h2 data-aos="fade-up" class="text-center text-decoration-underline" style="font-size: 3vw;">¿Te interesan mis trabajos? Aca te muestro los mas destacados</h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center" style="margin-top: 2vw;">
                    <div class="col col-6" data-aos="flip-left">
                        <a target="_blank" href="https://locosxlospuntos.com.ar/"><img id="imagen-proyecto" src="{{asset('imgs/sitio_muestra_1.png')}}"></a>
                    </div>
                    <div class="col col-6" data-aos="fade-right" style="float: left;color: #F2F2F2;width:40%;">
                        <p class="h2" id="description-work">www.locosxlospuntos.com.ar fue desarrollado con PHP y el framework CodeIgniter para un club de futbol. Es un sistema con registro de usuarios, panel de administracion y gestion de partidos de futbol y muchas otras funcionalidades mas. </p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-3">
                    <div class="col col-6" data-aos="fade-left" style="float: right;color: #F2F2F2;width:40%;">
                        <p class="h2" id="description-work" style="text-align: right">www.mylatindate.com fue desarrollado con PHP y el framework CodeIgniter para un emprendedor. Es un sitio web que tiene un sisema de registro de usuarios, configuracion de perfil, chat y muchas otras funcionalidades mas.</p>
                    </div>
                    <div class="col col-6" data-aos="flip-right">
                        <a target="_blank" href="https://mylatindate.com/"><img id="imagen-proyecto" src="{{asset('imgs/sitio_muestra_2.png')}}"></a>
                    </div>
                </div>
                <div class="row d-flex justify-content-center" style="margin-top: 2vw;">
                    <div class="col col-6" data-aos="flip-left">
                        <a target="_blank" href="https://human2coach.com/"><img id="imagen-proyecto" src="{{asset('imgs/sitio_muestra_3.png')}}"></a>
                    </div>
                    <div class="col col-6" data-aos="fade-right" style="float: left;color: #F2F2F2;width:40%;">
                        <p class="h2" id="description-work">www.human2coach.com fue desarrollado con React JS y Next JS. Es un sistema con tres roles diferentes; TeamManager, TeamLeader y Collaborator. Esta aplicacion ayuda a administrar los planes que hay en una empresa asi como tambien gestionar un sistema de metricas.</p>
                    </div>
                </div>
            </div>
            <div class="col col-12 p-3" id="barra" data-aos="fade-up">
                <div class="row">
                    <div class="col col-12 d-flex" >
                        <a target="_blank" href="https://github.com/PabloMultifunciones?tab=repositories"><svg id="github-icono" xmlns="http://www.w3.org/2000/svg" width="12vw" height="12vw" viewBox="0 0 24 24" style="fill: #CA6AFB;transform: ;msFilter:;"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"></path></svg></a>   
                        <h2 style="float:right; font-size: 2vw;">Dado que soy un entusiasta de la programacion, constantemene estoy creando nuevas aplicaciones para poder mejorar mis habilidades y obtener nuevos conocimientos. Si te interesa conocer mas sobre mis trabajos, <span style="text-decoration: underline;">haz click en el icono</span>. Este te llevara a mis repositorios de GitHub donde guardo tanto mis proyectos profesionales (Entre los cuales estan los que se muestran arriba) como los personales.</h2>
                    </div>
                </div>
            </div>
            <div class="col col-12" id="description">
                <div class="row">
                    <div id="banner-imagen" class="col col-12 col-lg-7" data-aos="flip-right">
                        <img style="width:100%;"src="{{asset('imgs/banner_secundario_2.svg')}}">
                    </div>
                    <div class="col col-12 col-lg-5" data-aos="fade-right">
                        <div class="row">
                            <div id="contactame" class="col col-12">
                                <div id="message" style="display: none; text-align:center;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" style="fill: #CA6AFB;transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M14.828 14.828a3.988 3.988 0 0 1-2.02 1.09 4.108 4.108 0 0 1-1.616 0 4.103 4.103 0 0 1-.749-.232 4.161 4.161 0 0 1-.679-.368 4.115 4.115 0 0 1-1.082-1.082l-1.658 1.117c.215.319.462.619.733.889a5.991 5.991 0 0 0 8.485.002c.272-.271.52-.571.734-.891l-1.658-1.117c-.143.211-.307.41-.49.592z"></path><circle cx="8.5" cy="10.5" r="1.5"></circle><path d="M15.5 10c-2 0-2.5 2-2.5 2h5s-.501-2-2.5-2z"></path></svg>
                                    <p class="h3">Gracias por su interes. Recibira un mensaje de respuesta lo antes posible.</p>
                                    <p class="h2" style="text-decoration: underline;">Que tenga un buen dia</p>
                                </div>
                                <form id="formulario" method="POST" ACTION="{{route('send')}}">
                                    <p class="h1 text-center" id="contactame-title">Contáctame</p>
                                    <div class="row d-flex pe-5">
                                        <div class="col col-3 pt-1 text-end input-label">
                                            <label>Nombre</label>
                                        </div>
                                        <div class="col col-9">
                                            <input type="text" class="form-control input-form" id="input-nombre" required>
                                        </div>
                                    </div>
                                    <div class="row d-flex pe-5">
                                        <div class="col col-3 pt-1 text-end input-label">
                                            <label>Email</label>
                                        </div>
                                        <div class="col col-9">
                                            <input type="email" class="form-control input-form" id="input-email" required>
                                        </div>
                                    </div>
                                    <div class="row d-flex pe-5">
                                        <div class="col col-3 pt-1 text-end input-label">
                                            <label>Asunto</label>
                                        </div>
                                        <div class="col col-9">
                                            <input type="text" class="form-control input-form" id="input-asunto" required>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col col-12 mt-2 pt-1 pb-2 text-center ps-5 pe-5 pt-3">
                                            <button type="button" id="button-enviar">Enviar</button>
                                        </div>           
                                    </div>
                                </form>
                            </div>
                            <div id="banner-secundario-3" class="col col-12 col-lg-12 mt-3">
                                <img class="mx-auto d-block" style="width:16vw;"src="{{asset('imgs/banner_secundario_3.svg')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 p-3" id="barra">
                <div class="row text-center">
                    <div class="col col-4" >
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=541526624568">
                            <img id="icono-barra" data-aos-anchor-placement="center-bottom" data-aos="flip-up" class="img-fluid" src="{{asset('imgs/whatsapp-banner.png')}}">
                        </a>
                    </div>
                    <div class="col col-4">
                        <a target="_blank" href="https://www.workana.com/freelancer/8bcf4f97985603929008dfbfe486c5ed">
                            <img id="icono-barra" data-aos-anchor-placement="center-bottom" data-aos="flip-up" class="img-fluid" src="{{asset('imgs/workana-banner.png')}}">
                        </a>   
                    </div>
                    <div class="col col-4">
                        <a target="_blank" href="https://www.linkedin.com/in/pablomultifunciones/">
                            <img id="icono-barra" data-aos-anchor-placement="center-bottom" data-aos="flip-up" class="img-fluid" src="{{asset('imgs/linkedin-banner.jpg')}}">
                        </a>   
                    </div>
                </div>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>