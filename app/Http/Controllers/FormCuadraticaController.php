<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormCuadraticaController extends Controller
{
    public function viewForm()
    {
        return view('FormulaCuadratica');
    }

    public function FormComplete(Request $rqs)
    {
        $varA = $rqs->input('numA');
        $varB = $rqs->input('numB');
        $varC = $rqs->input('numC');
        $varResult1 = '';
        $varResult2 = '';

        $miniTotal = $varB * $varB - 4 * $varA * $varC;

        if ($miniTotal < 0) {
            $varResult1 =
                'Los numeros que ingresaste no tiene una solucion real.';
        } elseif ($miniTotal == 0) {
            $varX = -$varB / (2 * $varA);

            $varResult1 = "La unica solucion de X seria $varX";
        } else {
            $varX1 = (-$varB + sqrt($miniTotal)) / (2 * $varA);
            $varX2 = (-$varB - sqrt($miniTotal)) / (2 * $varA);

            $varResult1 = "x1: $varX1";
            $varResult2 = "x2: $varX2";
        }

        if (!$varB) {
            $varB = 'No tiene valores';
        }

        if (!$varC) {
            $varC = 'No tiene valores';
        }

        return view('solucionFormula', [
            'varResult1' => $varResult1,
            'varResult2' => $varResult2,
            'varA' => $varA,
            'varB' => $varB,
            'varC' => $varC,
        ]);
    }
}
