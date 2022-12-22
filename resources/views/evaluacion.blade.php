<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Colmil</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-2 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h6 class="badge  badge-warning"> COLEGIO MILITAR DEL EJÉRCITO  <br> 
                        “CNL. GUALBERTO VILLARROEL” <br> 
                        <span class="badge badge-secondary">BOLIVIA</span>
                    </h6>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-4 md:grid-cols-2">
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><span class=""> RESULTADO DE LA CONSULTA </span>  </div>
                            </div>

                            <div class="ml-12">
                                <div class=" text-sm">
                                    <div class="card text-black bg-transparent bg-success mb-3" style="width:60rem" >
                                            <div class="card-header">
                                                <label><b>NOMBRES Y APELLIDOS: </b></label> <?php echo $nombre ?> <br>
                                                <label><b>NÚMERO DE C.I.:</b></label>  <?php echo $ci ?> <br>
                                                <label><b>NÚMERO DE PROSPECTO:</b></label> <?php echo $prospecto ?>  <br>
                                            </div>
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr height="5px">
                                                        <th colspan=5 style='text-align:center; vertical-align:middle; color: #fff; background: rgb(99, 79, 79);'>EVALUACION FÍSICA SUMATIVA </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Fecha</th>
                                                        <th scope="col">Prueba</th>
                                                        <th scope="col">Cantidad/Tiempo</th>
                                                        <th scope="col">Nota</th>
                                                        <th scope="col">Atributo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data3 as $data3)                                                     
                                                        <tr>
                                                            <td>{{ $data3->fecha }} </td>
                                                            <td>{{ $data3->pruebas }} </td>
                                                            <td> {{ $data3->cantidad }}  </td>
                                                            <td> {{ $data3->evaluaciones }} </td>
                                                            <td> {{ $data3->atributo }}  </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr > 
                                                        <td colspan=3>
                                                            Nota Evaluación Física Sumativa (sobre 100 Pts.)
                                                        </td>
                                                        <td colspan=2> <?php echo $promedio_fisico ?> </td>
                                                    </tr>                                                    
                                                    <tr >
                                                        <td colspan=3>
                                                            Nota Evaluación Física Sumativa (Equiv. al 50%)
                                                        </td>
                                                        <td colspan=2> <?php echo $promedio_fisico_porcentaje ?> </td>
                                                    </tr>
                                                </tbody>                                                                                           
                                            </table>

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan=5 style='text-align:center; vertical-align:middle; color: #fff; background:rgb(99, 79, 79);'>EVALUACION INTELECTUAL SUMATIVA </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Fecha</th>
                                                        <th scope="col">Prueba</th>
                                                        <th scope="col">Nota</th>
                                                        <th scope="col">Atributo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data4 as $data4)                                                     
                                                        <tr>
                                                            <td>{{ $data4->fecha }} </td>
                                                            <td><span> {{ $data4->pruebas }} </span></td>
                                                            <td> {{ $data4->evaluaciones }} </td>
                                                            <td> {{ $data4->atributo }} </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr > 
                                                        <td colspan=2>
                                                            Nota Evaluación Intelectual Sumativa (sobre 100 Pts.)
                                                        </td>
                                                        <td  colspan=2> <?php echo $total_intelectual ?> </td>
                                                    </tr>                                                    
                                                    <tr >
                                                        <td colspan=2>
                                                            Nota Evaluación Intelectual Sumativa (Equiv. al 50%) 
                                                        </td>
                                                        <td colspan=2> <?php echo number_format((float)($total_intelectual)/2, 4) ?>  </td>
                                                    </tr>
                                                </tbody>                                                                                           
                                            </table>

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan=5 style='text-align:center; vertical-align:middle; color: #fff; background: rgb(99, 79, 79);'>RESUMEN </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($data5 as $data5)                                                     
                                                    <tr>
                                                        <td>Nota Evaluación Física Sumativa </td>
                                                        <td><span> <?php echo $promedio_fisico_porcentaje ?> </span></td>
                                                    </tr>
                                                @endforeach
                                                @foreach ($data6 as $data6)
                                                    <tr>
                                                        <td>Nota Evaluación Intelectual Sumativa </td>
                                                        <td><span>  <?php echo number_format(((float)$total_intelectual)/2, 4) ?>  </span></td>
                                                    </tr>
                                                @endforeach
                                                    <tr>
                                                        <td>Nota Final (Eval.Sum.Fis. + Eval.Sum.Intel.) </td>
                                                        <td><span>   <?php echo number_format($promedio_fisico_porcentaje + number_format((float)($total_intelectual)/2,4),4) ?> </span></td>
                                                    </tr>
                                                    {{-- <tr>
                                                        <td>Orden de Mérito Obtenido </td>
                                                        <td><span> ---- </span></td>
                                                    </tr> --}}
                                                    {{-- <tr>
                                                        <td>Se encuentra dentro de los 450 postulantes habilitados para el curso vestibular de la gestion 2023 </td>
                                                        <td><span> ---- </span></td>
                                                    </tr>                                                                                                                                                                  --}}
                                                    <tr>
                                                    </tr>
                                                </tbody>                                                                                           
                                            </table>                                            
                                            <p class="card-text">
                                                <b>Nota.-</b> SI LA NOTA FINAL ES MAYOR O IGUAL A 51,0000 PUNTOS, USTED APROBÓ, PERO ESTO NO IMPLICA QUE INGRESE AL CURSO VESTIBULAR - GESTIÓN 2023. <br>
                                            </p>
                                            {{-- <p class="card-text">
                                                <b>Nota.-</b> El efectivo de 450 postulantes se encuentra establecido por el Comando General del Ejército (Prospecto pag.29). <br>
                                            </p> --}}
                                        </div>
                                        </div>
                                        <button type="button" class="btn btn-primary">Salir</button>
                                    </div>
                            </div>
                        </div>

                        

                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
