<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\GeneralBundle\Models;
/**
 * Description of GeneralModel
 *
 * @author sergio.amaya
 */
class GeneralModel {
    
    public function getXmlAgent($usuario) {
        return '<FILTRO>
                  <VALORFIJO>DATOS_AGENTE</VALORFIJO>
                  <usuario>NOAMADEUS</usuario>
                  <contrasena>' . $usuario . '</contrasena>
               </FILTRO>';
    }
    
    public function getXmlAgentAdditionals($usuario) {
        return '<FILTRO>
                  <VALORFIJO>DATOS_ADICIONALES_AGENTE</VALORFIJO>
                  <usuario>' . $usuario . '</usuario>
               </FILTRO>';
    }
    
    public function getXmlIncentive($info){
        
        $info = ["empresa" => '10',"identificacion" => '79553459',"fecha_ini" => '2017-08-01',"fecha_fin" => '2017-08-06'];
        
        return '<FILTRO>
                    <VALORFIJO>CONSULTAR_INCENTIVOS_ASESOR</VALORFIJO>
                    <EMPRESA>'.$info['empresa'].'</EMPRESA>
                    <IDENTIFICACION>'.$info['identificacion'].'</IDENTIFICACION>
                    <FECHA_INICIAL>'.$info['fecha_ini'].'</FECHA_INICIAL>
                    <FECHA_FINAL>'.$info['fecha_fin'].'</FECHA_FINAL>
            </FILTRO>';
    }
    
}
