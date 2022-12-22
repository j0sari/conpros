<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App;
class consultaController extends Controller
{
    public function index()
    {    
        return view('welcome');
    }

    public function consulta(Request $request)
    {
        // echo "CI: ".$request->input('ci')."<br>";
        // echo "Propecto: ".$request->prospecto."<br>";
        $ci = $request->ci;
        $prospecto = $request->prospecto;

        // echo "CI: ".$ci."<br>";
        // echo "Propecto: ".$prospecto."<br>";

        //echo "Msj: ".request('mensaje')."<br>";
        // $request->input('nombre');
        // $request->apellido;
        // request('mensaje');
 
        //return view('resultado', compact('ci', 'prospecto'));
        //*********************************************** */
        // $ci = $request->ci;
        // $prospecto = $request->prospecto;

        $data1=\DB::select("select pr.codigo, p.ci, p.ext, p.exp, 
            (p.nombres || ' ' || p.paterno || ' ' || p.materno) AS nombre_completo,
            e.cupo, e.estado, e.posicion 
            from eval1 as e,aspirante as a,persona as p,prospecto as pr,gestion as g
            where e.cd_aspirante=a.code and a.cd_persona=p.code and a.cd_prospecto=pr.code and pr.cd_gestion=g.code
            and p.ci=$ci and pr.codigo=$prospecto");

        $data2=\DB::select("select pe1.fecha, 
                                pe1.evaluacion,
                                (case 
                                when pe1.evaluacion = 'Revisión de Documentos Administrativos y Exámenes Médicos (Laboratorios)' and pe1.atributo = 'No Cumple' then pe1.atributo
                                when pe1.evaluacion = 'Revisión de Documentos Administrativos y Exámenes Médicos (Laboratorios)' and pe1.atributo = 'Sin Calificar' then ''
                                when pe1.evaluacion = 'Salto Alto' and pe1.atributo = 'Reprobó' then pe1.atributo
                                when pe1.evaluacion = 'Salto Alto' and pe1.atributo = 'Sin Calificar' then ''
                                when pe1.evaluacion = 'Exámenes Médicos' and pe1.atributo = 'No Apto' then pe1.atributo
                                when pe1.evaluacion = 'Exámenes Médicos' and pe1.atributo = 'Sin Calificar' then ''
                                when pe1.evaluacion = 'Natación' and pe1.atributo = 'No Aprobó' then pe1.atributo
                                when pe1.evaluacion = 'Natación' and pe1.atributo = 'Sin Calificar' then ''
                                when pe1.evaluacion = 'Evaluación Física Sumativa' and pe1.atributo = 'Sin Calificar' then ''
                                when pe1.evaluacion = 'Evaluación Física Sumativa' and pe1.atributo::float > 50 then 'Aprobó'
                                when pe1.evaluacion = 'Evaluación Física Sumativa' and pe1.atributo::float <= 50 and pe1.atributo::float <> 1.7500 then 'Reprobó'
                                when pe1.evaluacion = 'Evaluación Física Sumativa' and pe1.atributo::float = 1.7500 then 'Habilitado'               			
                                when pe1.evaluacion = 'Evaluación Intelectual Sumativa' and pe1.atributo = 'Sin Calificar' then ''
                                when pe1.evaluacion = 'Evaluación Intelectual Sumativa' and pe1.atributo::float > 50 then 'Aprobó'
                                when pe1.evaluacion = 'Evaluación Intelectual Sumativa' and pe1.atributo::float <= 50 and pe1.atributo::float <> 1.7500 then 'Reprobó'
                                when pe1.evaluacion = 'Evaluación Intelectual Sumativa' and pe1.atributo::float = 1.7500 then 'Habilitado'                  			                  			
                                else  pe1.atributo end) as atributo, pe1.detalles
                                from (
                                    select (
                                    case
                                        when pe.grupo = 'Grupo 1' and pe.pruebas = 'Peso/Talla' then '12/11/2022'
                                        when pe.grupo = 'Grupo 1' and pe.pruebas = 'documento' then '12/11/2022'
                                        when pe.grupo = 'Grupo 1' and pe.pruebas = 'medico' then '14/11/2022'
                                        when pe.grupo = 'Grupo 1' and pe.pruebas = 'salto' then '15/11/2022'
                                        when pe.grupo = 'Grupo 1' and pe.pruebas = 'natacion' then '15/11/2022'
                                        when pe.grupo = 'Grupo 1' and pe.pruebas = 'fisico' then '16/11/2022'
                                        when pe.grupo = 'Grupo 1' and pe.pruebas = 'logico' then '18/11/2022'
                                        when pe.grupo = 'Grupo 1' and pe.pruebas = 'cupo' then '20/11/2022'
                                        when pe.grupo = 'Grupo 1' and pe.pruebas = 'Evaluación Psicológica' then '20/11/2022'
                                        when pe.grupo = 'Grupo 2' and pe.pruebas = 'Peso/Talla' then '21/11/2022'
                                        when pe.grupo = 'Grupo 2' and pe.pruebas = 'documento' then '21/11/2022'
                                        when pe.grupo = 'Grupo 2' and pe.pruebas = 'medico' then '23/11/2022'
                                        when pe.grupo = 'Grupo 2' and pe.pruebas = 'salto' then '24/11/2022'
                                        when pe.grupo = 'Grupo 2' and pe.pruebas = 'natacion' then '25/11/2022'
                                        when pe.grupo = 'Grupo 2' and pe.pruebas = 'fisico' then '26/11/2022'
                                        when pe.grupo = 'Grupo 2' and pe.pruebas = 'logico' then '27/11/2022'
                                        when pe.grupo = 'Grupo 2' and pe.pruebas = 'cupo' then '27/11/2022' 
                                        when pe.grupo = 'Grupo 2' and pe.pruebas = 'Evaluación Psicológica' then '27/11/2022'                                       
                                        when pe.grupo = 'Grupo 3' and pe.pruebas = 'Peso/Talla' then '28/11/2022'
                                        when pe.grupo = 'Grupo 3' and pe.pruebas = 'documento' then '28/11/2022'
                                        when pe.grupo = 'Grupo 3' and pe.pruebas = 'medico' then '30/11/2022'
                                        when pe.grupo = 'Grupo 3' and pe.pruebas = 'salto' then '01/12/2022'
                                        when pe.grupo = 'Grupo 3' and pe.pruebas = 'natacion' then '02/12/2022'
                                        when pe.grupo = 'Grupo 3' and pe.pruebas = 'fisico' then '03/12/2022'
                                        when pe.grupo = 'Grupo 3' and pe.pruebas = 'logico' then '04/12/2022'
                                        when pe.grupo = 'Grupo 3' and pe.pruebas = 'cupo' then '04/12/2022'
                                        when pe.grupo = 'Grupo 3' and pe.pruebas = 'Evaluación Psicológica' then '04/12/2022'
                                        end) as fecha,
                                    (case
                                        when pe.pruebas = 'Peso/Talla' then 'Peso/Talla'
                                        when pe.pruebas = 'documento' then 'Revisión de Documentos Administrativos y Exámenes Médicos (Laboratorios)'
                                        when pe.pruebas = 'medico' then 'Exámenes Médicos'
                                        when pe.pruebas = 'salto' then 'Salto Alto'
                                        when pe.pruebas = 'natacion' then 'Natación'
                                        when pe.pruebas = 'fisico' then 'Evaluación Física Sumativa'
                                        when pe.pruebas = 'logico' then 'Evaluación Intelectual Sumativa'
                                        when pe.pruebas = 'cupo' then 'Cupo'
                                        when pe.pruebas = 'Evaluación Psicológica' then 'Evaluación Psicológica'
                                        end) as evaluacion,
                                    (case
                                        when pe.pruebas = 'Peso/Talla' then 'Peso: ' || pe.peso || ' / ' ||'Talla: ' || pe.talla                                    
                                        when pe.pruebas = 'documento' and pe.evaluaciones = 0 then 'No Cumple'
                                        when pe.pruebas = 'documento' and pe.evaluaciones = 1 then 'Cumple'
                                        when pe.pruebas = 'documento' and pe.evaluaciones = 2 then 'Sin Calificar'
                                        when pe.pruebas = 'medico' and pe.evaluaciones = 0 then 'No Apto'
                                        when pe.pruebas = 'medico' and pe.evaluaciones = 1 then 'Apto'
                                        when pe.pruebas = 'medico' and pe.evaluaciones = 2 then 'Sin Calificar'
                                        when pe.pruebas = 'salto' and pe.evaluaciones = 0 then 'Reprobó'
                                        when pe.pruebas = 'salto' and pe.evaluaciones = 1 then 'Aprobó'
                                        when pe.pruebas = 'salto' and pe.evaluaciones = 2 then 'Sin Calificar'
                                        when pe.pruebas = 'natacion' and pe.evaluaciones = 0 then 'No Aprobó'
                                        when pe.pruebas = 'natacion' and pe.evaluaciones = 1 then 'Aprobó'
                                        when pe.pruebas = 'natacion' and pe.evaluaciones = 2 then 'Sin Calificar'
                                        when pe.pruebas = 'fisico' and pe.evaluaciones = -1 then 'Sin Calificar'
                                        when pe.pruebas = 'fisico' and pe.evaluaciones > 0 then (pe.evaluaciones::float)::varchar
                                        when pe.pruebas = 'logico' and pe.evaluaciones = -1 then 'Sin Calificar'
                                        when pe.pruebas = 'logico' and pe.evaluaciones > 0 then (pe.evaluaciones::float)::varchar
                                        when pe.pruebas = 'cupo' and pe.evaluaciones = 0 then 'Sin Cupo'
                                        when pe.pruebas = 'cupo' and pe.evaluaciones = 1 then 'Aprobado en Cupo'
                                        when pe.pruebas = 'cupo' and pe.evaluaciones = 2 then 'Sin Calificar'
                                        when pe.pruebas = 'Evaluación Psicológica' and pe.evaluaciones = 0 then 'No Apto'
                                    	when pe.pruebas = 'Evaluación Psicológica' and pe.evaluaciones = 1 then 'Apto'
                                    	when pe.pruebas = 'Evaluación Psicológica' and pe.evaluaciones = 2 then 'Sin Calificar'                                         
                                            end) as atributo, pe.detalles		
                                    from (
                                        select 
                                        (select gr.nombre
                                        from eval1 as e,aspirante as a,persona as p,prospecto as pr,gestion as g,grupo as gr
                                        where e.cd_aspirante=a.code and a.cd_persona=p.code and a.cd_prospecto=pr.code and pr.cd_gestion=g.code and gr.code=a.cd_grupo
                                        and p.ci=$ci and pr.codigo=$prospecto) as grupo, e.detalle, e.ddocumento, 
                                        unnest(array['Peso/Talla', 'documento', 'medico', 'salto','natacion','fisico','logico', 'Evaluación Psicológica']) AS pruebas, 
                                        unnest(array[e.pesotalla, e.documento, e.medico, e.salto, e.natacion, e.fisico, e.logico, e.psicologico]) AS evaluaciones,
                                        unnest(array['', e.ddocumento::varchar, e.dmedico::varchar, e.dsalto::varchar, e.dnatacion::varchar, '', e.dintelectual::varchar, e.dpsicologico]) AS detalles,
                                        e.peso, e.talla
                                        from eval1 as e,aspirante as a,persona as p,prospecto as pr,gestion as g
                                        where e.cd_aspirante=a.code and a.cd_persona=p.code and a.cd_prospecto=pr.code and pr.cd_gestion=g.code
                                        and p.ci=$ci and pr.codigo=$prospecto
                                        order by e.documento, e.medico, e.salto, e.natacion, e.fisico, e.logico, e.psicologico
                                    ) as pe
                                ) as pe1");
            
        //return view('Welcome', compact('data1', 'data2'),compact('imprimo'));       
        return view('resultado', compact('data1', 'data2'));
    }

    public function evaluacion(Request $request)
    {
        $nombre = $request->nombre;
        $ci = $request->ci;
        $prospecto = $request->codigo; 

        $data3=\DB::select("select (case 
                            when pe.sexo = 1 and pe.pruebas = 'Abdominales' and pe.evaluaciones > 45 then 'Aprobo'
                            when pe.sexo = 0 and pe.pruebas = 'Abdominales' and pe.evaluaciones > 25 then 'Aprobo'
                            when pe.sexo = 1 and pe.pruebas = 'Flexiones de brazo' and pe.evaluaciones > 45 then 'Aprobo'
                            when pe.sexo = 0 and pe.pruebas = 'Flexiones de brazo' and pe.evaluaciones > 25 then 'Aprobo'
                            when pe.sexo = 1 and  pe.pruebas = 'Aeróbica (3200 mts)' and pe.evaluaciones > 50 then 'Aprobo'
                            when pe.sexo = 0 and  pe.pruebas = 'Aeróbica (3200 mts)' and pe.evaluaciones > 50 then 'Aprobo'			 
                            when pe.sexo = 1 and  pe.pruebas = 'Velocidad (100 mts)' and pe.evaluaciones > 50  then 'Aprobo'
                            when pe.sexo = 1 and  pe.pruebas = 'Velocidad (100 mts)' and pe.evaluaciones > 50  then 'Aprobo'
                            else 'No Aprobo' end) as atributo,
                        (case 
                            when pe.grupo = 'Grupo 1' and pe.pruebas = 'Abdominales' then '16/11/2022'
                            when pe.grupo = 'Grupo 1' and pe.pruebas = 'Flexiones de brazo'  then '16/11/2022'
                            when pe.grupo = 'Grupo 1' and pe.pruebas = 'Aeróbica (3200 mts)' then '17/11/2022'
                            when pe.grupo = 'Grupo 1' and pe.pruebas = 'Velocidad (100 mts)' then '17/11/2022'
                            when pe.grupo = 'Grupo 2' and pe.pruebas = 'Abdominales' then '23/11/2022'
                            when pe.grupo = 'Grupo 2' and pe.pruebas = 'Flexiones de brazo'  then '23/11/2022'
                            when pe.grupo = 'Grupo 2' and pe.pruebas = 'Aeróbica (3200 mts)' then '24/11/2022'
                            when pe.grupo = 'Grupo 2' and pe.pruebas = 'Velocidad (100 mts)' then '24/11/2022'
                            when pe.grupo = 'Grupo 3' and pe.pruebas = 'Abdominales' then '30/11/2022'
                            when pe.grupo = 'Grupo 3' and pe.pruebas = 'Flexiones de brazo'  then '30/11/2022'
                            when pe.grupo = 'Grupo 3' and pe.pruebas = 'Aeróbica (3200 mts)' then '01/12/2022'
                            when pe.grupo = 'Grupo 3' and pe.pruebas = 'Velocidad (100 mts)' then '01/12/2022'
                        end) as fecha, pe.pruebas, pe.evaluaciones::integer, pe.cantidad
                                    from 
                                    (	select (select gr.nombre
                                                from eval1 as e,aspirante as a,persona as p,prospecto as pr,gestion as g,grupo as gr
                                                where e.cd_aspirante=a.code and a.cd_persona=p.code and a.cd_prospecto=pr.code and pr.cd_gestion=g.code and gr.code=a.cd_grupo
                                                and p.ci=$ci and pr.codigo=$prospecto) as grupo, p.sexo,
                                                unnest(array['Abdominales', 'Flexiones de brazo', 'Aeróbica (3200 mts)', 'Velocidad (100 mts)']) as pruebas, 
                                                unnest(array[e.abdominalnota, e.brazonota, e.aerobicanota, e.velocidadnota]) as evaluaciones,
                                                unnest(array[CAST(e.abdominal AS varchar), CAST(e.brazo AS varchar),CAST(e.aerobica AS varchar),CAST(e.velocidad AS varchar)]) as cantidad
                                        from eval1 as e,aspirante as a,persona as p,prospecto as pr,gestion as g,grupo as gr
                                        where e.cd_aspirante=a.code and a.cd_persona=p.code and a.cd_prospecto=pr.code and pr.cd_gestion=g.code and gr.code=a.cd_grupo
                                        and p.ci=$ci and pr.codigo=$prospecto
                                    ) as pe");

        $data4=\DB::select("select (case when pe.pruebas = 'Historia' and pe.evaluaciones > 50 then 'Aprobo' 
                                when pe.pruebas = 'Geografía' and pe.evaluaciones > 50 then 'Aprobo' 
                                when pe.pruebas = 'Lenguaje' and pe.evaluaciones > 50 then 'Aprobo'
                                when pe.pruebas = 'Física' and pe.evaluaciones > 50 then 'Aprobo'
                                when pe.pruebas = 'Física' and pe.evaluaciones > 50 then 'Aprobo' else 'No Aprobo'
                            end) as atributo,
                            (case when pe.grupo = 'Grupo 1' and pe.pruebas = 'Historia' then '17/11/2022'
                                when pe.grupo = 'Grupo 1' and pe.pruebas = 'Matemáticas' then '17/11/2022'
                                when pe.grupo = 'Grupo 1' and pe.pruebas = 'Geografía'  then '18/11/2022'
                                when pe.grupo = 'Grupo 1' and pe.pruebas = 'Física' then '18/11/2022'
                                when pe.grupo = 'Grupo 1' and pe.pruebas = 'Lenguaje' then '19/11/2022'
                                when pe.grupo = 'Grupo 2' and pe.pruebas = 'Historia' then '25/11/2022'
                                when pe.grupo = 'Grupo 2' and pe.pruebas = 'Matemáticas' then '25/11/2022'
                                when pe.grupo = 'Grupo 2' and pe.pruebas = 'Geografía'  then '26/11/2022'
                                when pe.grupo = 'Grupo 2' and pe.pruebas = 'Física' then '26/11/2022'
                                when pe.grupo = 'Grupo 2' and pe.pruebas = 'Lenguaje' then '27/11/2022'
                                when pe.grupo = 'Grupo 3' and pe.pruebas = 'Historia' then '02/12/2022'
                                when pe.grupo = 'Grupo 3' and pe.pruebas = 'Matemáticas' then '02/12/2022'
                                when pe.grupo = 'Grupo 3' and pe.pruebas = 'Geografía'  then '03/12/2022'
                                when pe.grupo = 'Grupo 3' and pe.pruebas = 'Física' then '03/12/2022'
                                when pe.grupo = 'Grupo 3' and pe.pruebas = 'Lenguaje' then '04/11/2022'
                            end) as fecha, pe.pruebas, pe.evaluaciones::integer 
                        from 
                        (	select (select gr.nombre
                                    from eval1 as e,aspirante as a,persona as p,prospecto as pr,gestion as g,grupo as gr
                                    where e.cd_aspirante=a.code and a.cd_persona=p.code and a.cd_prospecto=pr.code and pr.cd_gestion=g.code and gr.code=a.cd_grupo
                                    and p.ci=$ci and pr.codigo=$prospecto) as grupo,
                                    unnest(array['Historia','Geografía','Lenguaje','Física','Matemáticas']) AS pruebas, 
                                    unnest(array[e.historia, e.geografia, e.lenguaje, e.fisica, e.matematicas]) AS evaluaciones
                            from eval1 as e,aspirante as a,persona as p,prospecto as pr,gestion as g,grupo as gr
                            where e.cd_aspirante=a.code and a.cd_persona=p.code and a.cd_prospecto=pr.code and pr.cd_gestion=g.code and gr.code=a.cd_grupo
                            and p.ci=$ci and pr.codigo=$prospecto
                        ) as pe");
        $data5=\DB::select("select sum(pe.evaluaciones::float) as total_fisico
                            from 
                            (	select 
                                        unnest(array['Abdominales', 'Flexiones de brazo', 'Aeróbica (3200 mts)', 'Velocidad (100 mts)']) AS pruebas, 
                                        unnest(array[e.abdominalnota, e.brazonota, e.aerobicanota, e.velocidadnota]) as evaluaciones
                                from eval1 as e,aspirante as a,persona as p,prospecto as pr,gestion as g,grupo as gr
                                where e.cd_aspirante=a.code and a.cd_persona=p.code and a.cd_prospecto=pr.code and pr.cd_gestion=g.code and gr.code=a.cd_grupo
                                and p.ci=$ci and pr.codigo=$prospecto
                            ) as pe");
        $total_fisico = $data5[0]->total_fisico;       
        $data6=\DB::select("select sum(pe.evaluaciones::float) as total_intelectual  
            from 
            (	select 
                        unnest(array['Historia','Geografía','Lenguaje','Física','Matemáticas']) AS pruebas, 
                        unnest(array[e.historia, e.geografia, e.lenguaje, e.fisica, e.matematicas]) AS evaluaciones
                from eval1 as e,aspirante as a,persona as p,prospecto as pr,gestion as g,grupo as gr
                where e.cd_aspirante=a.code and a.cd_persona=p.code and a.cd_prospecto=pr.code and pr.cd_gestion=g.code and gr.code=a.cd_grupo
                and p.ci=$ci and pr.codigo=$prospecto
            ) as pe");
        
        
        $total_intelectual = number_format(((float)$data6[0]->total_intelectual)/5,4);
        $total_intelectual_promedio = number_format(((float)$data6[0]->total_intelectual/2),4);
        $total_final = $total_fisico + $total_intelectual;
        // totales fisico
        $data7=\DB::select("select (sum(promedio.evaluaciones)::float/4)::float promedio from (
            select unnest(array[e.abdominalnota, e.brazonota, e.aerobicanota, e.velocidadnota]) as evaluaciones
            from eval1 as e,aspirante as a,persona as p,prospecto as pr,gestion as g,grupo as gr
            where e.cd_aspirante=a.code and a.cd_persona=p.code and a.cd_prospecto=pr.code and pr.cd_gestion=g.code and gr.code=a.cd_grupo
            and p.ci=$ci and pr.codigo=$prospecto
            ) as promedio");
        $promedio_fisico = number_format((float)$data7[0]->promedio,4);
        $promedio_fisico_porcentaje = number_format(((float)$data7[0]->promedio/2),4);
        // totales intelectual
        


        return view('evaluacion', compact('data3', 'data4', 'data5', 'data6', 'nombre', 'ci', 'prospecto', 'total_final', 'promedio_fisico', 'promedio_fisico_porcentaje', 'total_intelectual', 'total_intelectual_promedio'));
    }
}
