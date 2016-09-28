<?php

error_reporting(E_ALL);

/**
 * cumulo - Cumulo/class.Empresa.php
 *
 * $Id$
 *
 * This file is part of cumulo.
 *
 * Automatically generated on 07.04.2015, 01:27:33 with ArgoUML PHP module
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author Claudio Andrés Reyes Miranda, <claudio.reyes.miranda@gmail.com>
 * @package Cumulo
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Cluster_Licitacion
 *
 * @author Claudio Andrés Reyes Miranda, <claudio.reyes.miranda@gmail.com>
 */
require_once('Cumulo/class.Licitacion.php');

/**
 * include ControlAcceso_Usuario
 *
 * @author Claudio Andrés Reyes Miranda, <claudio.reyes.miranda@gmail.com>
 */
require_once('ControlAcceso/class.Usuario.php');

/* user defined includes */
// section 127-0-1-1-2d1d253:14c92000751:-8000:0000000000000A71-includes begin
// section 127-0-1-1-2d1d253:14c92000751:-8000:0000000000000A71-includes end

/* user defined constants */
// section 127-0-1-1-2d1d253:14c92000751:-8000:0000000000000A71-constants begin
// section 127-0-1-1-2d1d253:14c92000751:-8000:0000000000000A71-constants end

/**
 * Short description of class Cluster_Empresa
 *
 * @access public
 * @author Claudio Andrés Reyes Miranda, <claudio.reyes.miranda@gmail.com>
 * @package Cumulo
 */
class Cluster_Empresa
    extends ControlAcceso_Usuario
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute nombreEmpresa
     *
     * @access public
     * @var String
     */
    public $nombreEmpresa = null;

    /**
     * Short description of attribute direccionEmpresa
     *
     * @access public
     * @var String
     */
    public $direccionEmpresa = null;

    /**
     * Short description of attribute ciudadEmpresa
     *
     * @access public
     * @var String
     */
    public $ciudadEmpresa = null;

    // --- OPERATIONS ---

    /**
     * Short description of method crearEmpresa
     *
     * @access public
     * @author Claudio Andrés Reyes Miranda, <claudio.reyes.miranda@gmail.com>
     * @return Cluster_Empresa
     */
    public function crearEmpresa()
    {
        $returnValue = null;

        // section 127-0-1-1-2d1d253:14c92000751:-8000:0000000000000A99 begin
        // section 127-0-1-1-2d1d253:14c92000751:-8000:0000000000000A99 end

        return $returnValue;
    }

    /**
     * Short description of method eliminarEmpresa
     *
     * @access public
     * @author Claudio Andrés Reyes Miranda, <claudio.reyes.miranda@gmail.com>
     * @return mixed
     */
    public function eliminarEmpresa()
    {
        // section 127-0-1-1-2d1d253:14c92000751:-8000:0000000000000A9B begin
        // section 127-0-1-1-2d1d253:14c92000751:-8000:0000000000000A9B end
    }

    /**
     * Short description of method modificarEmpresa
     *
     * @access public
     * @author Claudio Andrés Reyes Miranda, <claudio.reyes.miranda@gmail.com>
     * @return mixed
     */
    public function modificarEmpresa()
    {
        // section 127-0-1-1-2d1d253:14c92000751:-8000:0000000000000A9D begin
        // section 127-0-1-1-2d1d253:14c92000751:-8000:0000000000000A9D end
    }

} /* end of class Cluster_Empresa */

?>