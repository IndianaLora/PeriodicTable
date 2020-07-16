 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tabla Periodica</title>
     <link rel="stylesheet" href="css/style.css">
 </head>

 <body>
     <?php

        $elementos = [
            ['nombre' => 'H', 'fila' => 0, 'columna' => 0, 'grupo' => 'otros-no-metales'],
            ['nombre' => 'He', 'fila' => 0, 'columna' => 17, 'grupo' => 'gases-nobles'],
            ['nombre' => 'Li', 'fila' => 1, 'columna' => 0, 'grupo' => 'alcalinos'],
            ['nombre' => 'Be', 'fila' => 1, 'columna' => 1, 'grupo' => 'alcalinotérreos'],
            ['nombre' => 'B', 'fila' => 1, 'columna' => 12, 'grupo' => 'metaloides'],
            ['nombre' => 'C', 'fila' => 1, 'columna' => 13, 'grupo' => 'otros-no-metales'],
            ['nombre' => 'N', 'fila' => 1, 'columna' => 14, 'grupo' => 'otros-no-metales'],
            ['nombre' => 'O', 'fila' => 1, 'columna' => 15, 'grupo' => 'otros-no-metales'],
            ['nombre' => 'F', 'fila' => 1, 'columna' => 16, 'grupo' => 'halagenos'],
            ['nombre' => 'Ne', 'fila' => 1, 'columna' => 17, 'grupo' => 'gases-nobles'],
            ['nombre' => 'Na', 'fila' => 2, 'columna' => 0, 'grupo' => 'alcalinos'],
            ['nombre' => 'Mg', 'fila' => 2, 'columna' => 1, 'grupo' => 'alcalinotérreos'],
            ['nombre' => 'Al', 'fila' => 2, 'columna' => 12, 'grupo' => 'otros-metales'],
            ['nombre' => 'Si', 'fila' => 2, 'columna' => 13, 'grupo' => 'metaloides'],
            ['nombre' => 'P', 'fila' => 2, 'columna' => 14, 'grupo' => 'otros-no-metales'],
            ['nombre' => 'S', 'fila' => 2, 'columna' => 15, 'grupo' => 'otros-no-metales'],
            ['nombre' => 'Cl', 'fila' => 2, 'columna' => 16, 'grupo' => 'halagenos'],
            ['nombre' => 'Ar', 'fila' => 2, 'columna' => 17, 'grupo' => 'gases-nobles'],
            ['nombre' => 'K', 'fila' => 3, 'columna' => 0, 'grupo' => 'alcalinos'],
            ['nombre' => 'Ca', 'fila' => 3, 'columna' => 1, 'grupo' => 'alcalinotérreos'],
            ['nombre' => 'Sc', 'fila' => 3, 'columna' => 2, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Ti', 'fila' => 3, 'columna' => 3, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'V', 'fila' => 3, 'columna' => 4, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Cr', 'fila' => 3, 'columna' => 5, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Mn', 'fila' => 3, 'columna' => 6, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Fe', 'fila' => 3, 'columna' => 7, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Co', 'fila' => 3, 'columna' => 8, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Ni', 'fila' => 3, 'columna' => 9, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Cu', 'fila' => 3, 'columna' => 10, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Zn', 'fila' => 3, 'columna' => 11, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Ga', 'fila' => 3, 'columna' => 12, 'grupo' => 'otros-metales'],
            ['nombre' => 'Ge', 'fila' => 3, 'columna' => 13, 'grupo' => 'metaloides'],
            ['nombre' => 'As', 'fila' => 3, 'columna' => 14, 'grupo' => 'metaloides'],
            ['nombre' => 'Se', 'fila' => 3, 'columna' => 15, 'grupo' => 'otros-no-metales'],
            ['nombre' => 'Br', 'fila' => 3, 'columna' => 16, 'grupo' => 'halagenos'],
            ['nombre' => 'Kr', 'fila' => 3, 'columna' => 17, 'grupo' => 'gases-nobles'],
            ['nombre' => 'Rb', 'fila' => 4, 'columna' => 0, 'grupo' => 'alcalinos'],
            ['nombre' => 'Sr', 'fila' => 4, 'columna' => 1, 'grupo' => 'alcalinotérreos'],
            ['nombre' => 'Y', 'fila' => 4, 'columna' => 2, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Zr', 'fila' => 4, 'columna' => 3, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Nb', 'fila' => 4, 'columna' => 4, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Mo', 'fila' => 4, 'columna' => 5, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Tc', 'fila' => 4, 'columna' => 6, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Ru', 'fila' => 4, 'columna' => 7, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Rh', 'fila' => 4, 'columna' => 8, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Pd', 'fila' => 4, 'columna' => 9, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Ag', 'fila' => 4, 'columna' => 10, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Cd', 'fila' => 4, 'columna' => 11, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'In', 'fila' => 4, 'columna' => 12, 'grupo' => 'otros-metales'],
            ['nombre' => 'Sn', 'fila' => 4, 'columna' => 13, 'grupo' => 'otros-metales'],
            ['nombre' => 'Sb', 'fila' => 4, 'columna' => 14, 'grupo' => 'metaloides'],
            ['nombre' => 'Te', 'fila' => 4, 'columna' => 15, 'grupo' => 'metaloides'],
            ['nombre' => 'I', 'fila' => 4, 'columna' => 16, 'grupo' => 'halagenos'],
            ['nombre' => 'Xe', 'fila' => 4, 'columna' => 17, 'grupo' => 'gases-nobles'],
            ['nombre' => 'Cs', 'fila' => 5, 'columna' => 0, 'grupo' => 'alcalinos'],
            ['nombre' => 'Ba', 'fila' => 5, 'columna' => 1, 'grupo' => 'alcalinotérreos'],
            ['nombre' => 'La', 'fila' => 8, 'columna' => 2, 'grupo' => 'lantanidos'],
            ['nombre' => 'Ce', 'fila' => 8, 'columna' => 3, 'grupo' => 'lantanidos'],
            ['nombre' => 'Pr', 'fila' => 8, 'columna' => 4, 'grupo' => 'lantanidos'],
            ['nombre' => 'Nd', 'fila' => 8, 'columna' => 5, 'grupo' => 'lantanidos'],
            ['nombre' => 'Pm', 'fila' => 8, 'columna' => 6, 'grupo' => 'lantanidos'],
            ['nombre' => 'Sm', 'fila' => 8, 'columna' => 7, 'grupo' => 'lantanidos'],
            ['nombre' => 'Eu', 'fila' => 8, 'columna' => 8, 'grupo' => 'lantanidos'],
            ['nombre' => 'Gd', 'fila' => 8, 'columna' => 9, 'grupo' => 'lantanidos'],
            ['nombre' => 'Tb', 'fila' => 8, 'columna' => 10, 'grupo' => 'lantanidos'],
            ['nombre' => 'Dy', 'fila' => 8, 'columna' => 11, 'grupo' => 'lantanidos'],
            ['nombre' => 'Ho', 'fila' => 8, 'columna' => 12, 'grupo' => 'lantanidos'],
            ['nombre' => 'Er', 'fila' => 8, 'columna' => 13, 'grupo' => 'lantanidos'],
            ['nombre' => 'Tm', 'fila' => 8, 'columna' => 14, 'grupo' => 'lantanidos'],
            ['nombre' => 'Yb', 'fila' => 8, 'columna' => 15, 'grupo' => 'lantanidos'],
            ['nombre' => 'Lu', 'fila' => 8, 'columna' => 16, 'grupo' => 'lantanidos'],
            ['nombre' => 'Hf', 'fila' => 5, 'columna' => 3, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Ta', 'fila' => 5, 'columna' => 4, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'W', 'fila' => 5, 'columna' => 5, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Re', 'fila' => 5, 'columna' => 6, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Os', 'fila' => 5, 'columna' => 7, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Ir', 'fila' => 5, 'columna' => 8, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Pt', 'fila' => 5, 'columna' => 9, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Au', 'fila' => 5, 'columna' => 10, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Hg', 'fila' => 5, 'columna' => 11, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Tl', 'fila' => 5, 'columna' => 12, 'grupo' => 'otros-metales'],
            ['nombre' => 'Pb', 'fila' => 5, 'columna' => 13, 'grupo' => 'otros-metales'],
            ['nombre' => 'Bi', 'fila' => 5, 'columna' => 14, 'grupo' => 'otros-metales'],
            ['nombre' => 'Po', 'fila' => 5, 'columna' => 15, 'grupo' => 'metaloides'],
            ['nombre' => 'At', 'fila' => 5, 'columna' => 16, 'grupo' => 'halagenos'],
            ['nombre' => 'Rn', 'fila' => 5, 'columna' => 17, 'grupo' => 'gases-nobles'],
            ['nombre' => 'Fr', 'fila' => 6, 'columna' => 0, 'grupo' => 'alcalinos'],
            ['nombre' => 'Ra', 'fila' => 6, 'columna' => 1, 'grupo' => 'alcalinotérreos'],
            ['nombre' => 'Ac', 'fila' => 9, 'columna' => 2, 'grupo' => 'actinidos'],
            ['nombre' => 'Th', 'fila' => 9, 'columna' => 3, 'grupo' => 'actinidos'],
            ['nombre' => 'Pa', 'fila' => 9, 'columna' => 4, 'grupo' => 'actinidos'],
            ['nombre' => 'U', 'fila' => 9, 'columna' => 5, 'grupo' => 'actinidos'],
            ['nombre' => 'Np', 'fila' => 9, 'columna' => 6, 'grupo' => 'actinidos'],
            ['nombre' => 'Pu', 'fila' => 9, 'columna' => 7, 'grupo' => 'actinidos'],
            ['nombre' => 'Am', 'fila' => 9, 'columna' => 8, 'grupo' => 'actinidos'],
            ['nombre' => 'Cm', 'fila' => 9, 'columna' => 9, 'grupo' => 'actinidos'],
            ['nombre' => 'Bk', 'fila' => 9, 'columna' => 10, 'grupo' => 'actinidos'],
            ['nombre' => 'Cf', 'fila' => 9, 'columna' => 11, 'grupo' => 'actinidos'],
            ['nombre' => 'Es', 'fila' => 9, 'columna' => 12, 'grupo' => 'actinidos'],
            ['nombre' => 'Fm', 'fila' => 9, 'columna' => 13, 'grupo' => 'actinidos'],
            ['nombre' => 'Md', 'fila' => 9, 'columna' => 14, 'grupo' => 'actinidos'],
            ['nombre' => 'No', 'fila' => 9, 'columna' => 15, 'grupo' => 'actinidos'],
            ['nombre' => 'Lr', 'fila' => 9, 'columna' => 16, 'grupo' => 'actinidos'],
            ['nombre' => 'Rf', 'fila' => 6, 'columna' => 3, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Db', 'fila' => 6, 'columna' => 4, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Sg', 'fila' => 6, 'columna' => 5, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Bh', 'fila' => 6, 'columna' => 6, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Hs', 'fila' => 6, 'columna' => 7, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Mt', 'fila' => 6, 'columna' => 8, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Ds', 'fila' => 6, 'columna' => 9, 'grupo' => ' metales-de-transicion'],
            ['nombre' => 'Rg', 'fila' => 6, 'columna' => 10, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Cn', 'fila' => 6, 'columna' => 11, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Nh', 'fila' => 6, 'columna' => 12, 'grupo' => 'otros-metales'],
            ['nombre' => 'Fl', 'fila' => 6, 'columna' => 13, 'grupo' => 'otros-metales'],
            ['nombre' => 'Mc', 'fila' => 6, 'columna' => 14, 'grupo' => 'otros-metales'],
            ['nombre' => 'Lv', 'fila' => 6, 'columna' => 15, 'grupo' => 'otros-metales'],
            ['nombre' => 'Ts', 'fila' => 6, 'columna' => 16, 'grupo' => 'halagenos'],
            ['nombre' => 'Og', 'fila' => 6, 'columna' => 17, 'grupo' => 'gases-nobles'],
            ['nombre' => 'Uue', 'fila' => 7, 'columna' => 0, 'grupo' => 'unknown, but predicted to be an alcalinos'],
        ];
        $grupos = [
            ['nombre' => 'Alcalinos', 'fila' => 10, 'columna' => 0, 'grupo' => 'alcalinos'],
            ['nombre' => 'Alcalinoterreos', 'fila' => 10, 'columna' => 1, 'grupo' => 'alcalinotérreos'],
            ['nombre' => 'Metales de transicion/Bloque D', 'fila' => 10, 'columna' => 2, 'grupo' => 'metales-de-transicion'],
            ['nombre' => 'Lantanidos', 'fila' => 10, 'columna' => 3, 'grupo' => 'lantanidos'],
            ['nombre' => 'Actinidos', 'fila' => 11, 'columna' => 3, 'grupo' => 'actinidos'],
            ['nombre' => 'Otros Metales', 'fila' => 10, 'columna' => 4, 'grupo' => 'otros-metales'],
            ['nombre' => 'Metaloides', 'fila' => 10, 'columna' => 5, 'grupo' => 'metaloides'],
            ['nombre' => 'Otros no Metales', 'fila' => 10, 'columna' => 6, 'grupo' => 'otros-no-metales'],
            ['nombre' => 'Halogenos', 'fila' => 10, 'columna' => 7, 'grupo' => 'halagenos'],
            ['nombre' => 'Gases Nobles', 'fila' => 10, 'columna' => 8, 'grupo' => 'gases-nobles'],
            // ['nombre'=>'Metales','fila' =>9,'columna' =>2,'grupo'=>'gris'],
            //['nombre'=>'No           Metales','fila' =>9,'columna' =>6,'grupo'=>'gris']
        ];
        $clasificacion = [
            ['nombre' => 'Metales','fila' => 9, 'columna' => 2, 'grupo' => 'gris'],
            ['nombre' => '','fila' => 9, 'columna' => 0,'grupo' => 'gris'],
            ['nombre' => '','fila' => 9, 'columna' => 1,'grupo' => 'gris'],
            ['nombre' => '','fila' => 9, 'columna' => 2,'grupo' => 'gris'],
            ['nombre' => '','fila' => 9, 'columna' => 3,'grupo' => 'gris'],
            ['nombre' => '','fila' => 9, 'columna' => 4,'grupo' => 'gris'],
            ['nombre' => '','fila' => 9, 'columna' => 5,'grupo' => 'metaloides'],
            ['nombre' => 'no metales','fila' => 9, 'columna' => 6,'grupo' => 'gris'],
            ['nombre' => '','fila' => 9, 'columna' => 7,'grupo' => 'gris']
        ];

        function buscarElemento($fila, $columna)
        {
            global $elementos;
            foreach ($elementos as $elemento) {

                if ($elemento['fila'] === $fila && $elemento['columna'] === $columna) {

                    return $elemento;
                }
            }

            return null;
        }
        function buscarGrupo($fil, $column)
        {
            global $grupos;
            foreach ($grupos as $grupo) {
                if ($grupo['fila'] === $fil && $grupo['columna'] === $column) {
                    return $grupo;
                }
            }
            return null;
        }
        function buscarClasificacion($filaa, $columnaa)
        {
            global $clasificacion;
            foreach ($clasificacion as $class)
             {
                if ($class['fila'] === $filaa && $class['columna'] === $columnaa) {
                    return $class;
                }
            }
            return null;
        }
        ?>
        


     <div class="container">
         <h1>Tabla periodica</h1>
         <table>
             <?php
                for ($i = 0; $i < 7; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 18; $j++) {
                        $elemento = buscarElemento($i, $j);
                        $clase = $elemento === null ? 'transparente' : $elemento['grupo']; //ternaria
                        echo "<td class=\"" . $clase . "\">";
                        echo $elemento['nombre'];
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                ?>

         </table>

         <table class="margen">
         
             <?php
                for ($i = 8; $i < 10; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 18; $j++) {
                        $elemento = buscarElemento($i, $j);
                        $clase = $elemento === null ?'transparente':$elemento['grupo']; //ternaria
                        echo "<td class=\"" . $clase . "\">";
                        echo $elemento['nombre'];
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                ?>
         </table>
         <table class="margen"> 
         <?php
            for ($i = 9; $i < 10; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 8; $j++) {
                    $class = buscarClasificacion($i, $j);
                    $clase = $class === null ?'transparente':$class['grupo']; //ternaria
                    echo "<th class=\"" . $clase . "\">";
                    echo $class['nombre'];
                    echo "</th>";
                }
                echo "</tr>";
            }
            ?>
         <?php
            for ($i = 10; $i < 12; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 8; $j++) {
                    $grupo = buscarGrupo($i, $j);
                    $clase = $grupo === null ?'transparente':$grupo['grupo']; //ternaria
                    echo "<td class=\"" . $clase . "\">";
                    echo $grupo['nombre'];
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
     </table>
    
     </div>

 </body>

 </html>