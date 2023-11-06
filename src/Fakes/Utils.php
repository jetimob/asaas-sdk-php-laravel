<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Fakes;

use Jetimob\Asaas\Api\DeleteResponse;

class Utils
{
    public static function fakeCpf(): string
    {
        $cpf = (string) random_int(100000000, 999999999);

        $aux = [10,9,8,7,6,5,4,3,2];
        $total = 0;

        foreach (str_split($cpf) as $key => $char) {
            $total += $char * $aux[$key];
        }

        $firstVerification = 11 - ($total % 11);

        $cpf .= ($firstVerification >= 10) ? '0' : $firstVerification;

        //Segundo digito verificador
        $aux = [11,10,9,8,7,6,5,4,3,2];
        $total = 0;

        foreach (str_split($cpf) as $key => $char) {
            $total += $char * $aux[$key];
        }

        $secondVerification = 11 - ($total % 11);
        $cpf .= ($secondVerification >= 10) ? '0' : $secondVerification;

        return $cpf;
    }

    public static function deletedResponse(string $id): DeleteResponse
    {
        return DeleteResponse::deserialize([
           'deleted' => true,
           'id' => $id,
        ]);
    }
}