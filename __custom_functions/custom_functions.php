<?php

namespace SymbiontFunctions\functionsDefinition;

//Leer ini desde string en php. De esta forma se pueden codificar los php
function parse_ini_file($path, $process) {
    return df_parse_ini_file($path,$process);
}
