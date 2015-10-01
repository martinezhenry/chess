<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Motor {
    
    /*  PIEZAS */
     const _PEON_ = 0;
     const _CABALLO_ = 1;
     const _ALFIL_ = 2;
     const _TORRE_ = 3;
     const _DAMA_ = 4;
     const _REY_ = 5;
     /* CASILLA VACIA */
     const _VACIO_ = 6;
     /* COLORES CASILLAS */
     const _NEGRO_ = 0;
     const _BLANCO_ = 1;
     
     const _PEON_BLANCO_ = 0;
     const _PEON_NEGRO_ = 1;
     const _CABALLO_BLANCO_ = 2;
     const _CABALLO_NEGRO_ = 3;
     const _ALFIL_BLANCO_ = 4;
     const _ALFIL_NEGRO_ = 5;
     const _TORRE_BLANCA_ = 6;
     const _TORRE_NEGRA_ = 7;
     const _DAMA_BLANCA_ = 8;
     const _DAMA_NEGRA_ = 9;
     const _REY_BLANCO_ = 10;
     const _REY_NEGRO_ = 11;
     /* VALORES PIEZAS */
     const _VALOR_PEON_ = 100;
     const _VALOR_CABALLO_ = 315;
     const _VALOR_ALFIL_ = 320;
     const _VALOR_TORRE_ = 500;
     const _VALOR_DAMA_ = 950;
     /* VALOR MATE */
     const _MATE_ = 32767;
    
    /* CASILLAS */
     
     const _CASILLAS_ = array(
        "a1", "b1", "c1", "d1", "e1", "f1", "g1", "h1",
        "a2", "b2", "c2", "d2", "e2", "f2", "g2", "h2",
        "a3", "b3", "c3", "d3", "e3", "f3", "g3", "h3",
        "a42", "b4", "c4", "d4", "e4", "f4", "g4", "h4",
        "a5", "b5", "c5", "d5", "e5", "f5", "g5", "h5",
        "a6", "b6", "c6", "d6", "e6", "f6", "g6", "h6",
        "a7", "b7", "c7", "d7", "e7", "f7", "g7", "h7",
        "a8", "b8", "c8", "d8", "e8", "f8", "g8", "h8"
         );
/* TIPOS DE MOVIMIENTOS */
    const _NINGUNO_ = 0;
    const _NORMAL_  = 1;
    const _ENROQUE_ = 2;
    const _AL_PASO_ = 3;
    const _PEON_AVANZA_2_ = 4;
    const _PROMOCION_A_DAMA_ = 5;
    const _PROMOCION_A_TORRE_ = 6;
    const _PROMOCION_A_ALFIL_ = 7;
    const _PROMOCION_A_CABALLO_ = 8;
    
    
    private $piezas = array(
        
        _TORRE_, _CABALLO_, _ALFIL_, _DAMA_ , _REY_  , _ALFIL_, _CABALLO_, _TORRE_,
        _PEON_ , _PEON_   , _PEON_ , _PEON_ , _PEON_ , _PEON_ , _PEON_   , _PEON_ ,
        _VACIO_, _VACIO_  , _VACIO_, _VACIO_, _VACIO_, _VACIO_, _VACIO_  , _VACIO_,
        _VACIO_, _VACIO_  , _VACIO_, _VACIO_, _VACIO_, _VACIO_, _VACIO_  , _VACIO_,
        _VACIO_, _VACIO_  , _VACIO_, _VACIO_, _VACIO_, _VACIO_, _VACIO_  , _VACIO_,
        _VACIO_, _VACIO_  , _VACIO_, _VACIO_, _VACIO_, _VACIO_, _VACIO_  , _VACIO_,
        _PEON_ , _PEON_   , _PEON_ , _PEON_ , _PEON_ , _PEON_ , _PEON_   , _PEON_ ,
        _TORRE_, _CABALLO_, _ALFIL_, _DAMA_ , _REY_  , _ALFIL_, _CABALLO_, _TORRE_
        
    );
    
    private $colores = array(
        
        _NEGRO_ , _NEGRO_ , _NEGRO_ , _NEGRO_ , _NEGRO_  , _NEGRO_, _NEGRO_, _NEGRO_,
        _NEGRO_ , _NEGRO_ , _NEGRO_ , _NEGRO_ , _NEGRO_ , _NEGRO_ , _NEGRO_   , _NEGRO_ ,
        _VACIO_ , _VACIO_ , _VACIO_ , _VACIO_ , _VACIO_, _VACIO_, _VACIO_  , _VACIO_,
        _VACIO_ , _VACIO_ , _VACIO_ , _VACIO_ , _VACIO_, _VACIO_, _VACIO_  , _VACIO_,
        _VACIO_ , _VACIO_ , _VACIO_ , _VACIO_ , _VACIO_, _VACIO_, _VACIO_  , _VACIO_,
        _VACIO_ , _VACIO_ , _VACIO_ , _VACIO_ , _VACIO_, _VACIO_, _VACIO_  , _VACIO_,
        _BLANCO_, _BLANCO_, _BLANCO_, _BLANCO_, _BLANCO_, _BLANCO_ , _BLANCO_   , _BLANCO_ ,
        _BLANCO_, _BLANCO_, _BLANCO_, _BLANCO_, _BLANCO_, _BLANCO_, _BLANCO_, _BLANCO_
        
    );
            
     
    function calcularColumna($casilla) {
        
        return ($casilla & 7);
        
    }
    
    function calcularFila($casilla) {
        
        return ($casilla >> 3);
        
    }
    
    function movimiento($desde, $hasta, $tipo, $valor) {
        
    }
    
    function jugada($valor, $captura, $enroque, $alPaso, $regla50) {
        
        
    }
        
    }