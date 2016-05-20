<?php

class InterfaceCumulo
{
    /**
     * @param $interface
     */

    var $username;
    var $password;
    var $hostname;
    var $baseDatos;
    var $link;

    function InterfaceCumulo($u, $p, $h, $b)
    {
        $this->password = $p;
        $this->hostname = $h;
        $this->username = $u;
        $this->baseDatos = $b;
        $this->link = mysql_connect($this->hostname, $this->username, $this->password);
    }

    function llamarInterface($interface)
    {
        $archivo = ELCUMULO . "Interface/" . $interface . ".php";
        require_once($archivo);
    }

    function llamarPlataforma($plataforma)
    {
        $archivo = ELCUMULO . "Plataforma/" . $plataforma . ".php";
        require_once($archivo);
    }

    function preguntarTabla($que, $donde)
    {
        $result = $this->resultado('SELECT ' . $que . ' FROM ' . $donde);
        // Imprimir los resultados en HTML
        echo '<h2 class="sub-header">Prueba preguntar tabla</h2>
            <div class="table-responsive">
                <table class="table table-striped">';
        while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
            echo '<tr>';
            foreach ($line as $col_value) {
                echo '<td>' . $col_value . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>
            </div>';
    }

    function resultado($c)
    {
// Conectando, seleccionando la base de datos
        mysql_select_db($this->baseDatos, $this->link);


// Realizar una consulta MySQL
        $query = $c;
        $result = mysql_query($query);
        return $result;
    }
}

?>