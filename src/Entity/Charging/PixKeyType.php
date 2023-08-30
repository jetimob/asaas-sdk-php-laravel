<?php

namespace Jetimob\Asaas\Entity\Charging;

enum PixKeyType: string
{
    case CPF   = 'CPF';
    case CNPJ  = 'CNPJ';
    case EMAIL = 'EMAIL';
    case PHONE = 'PHONE';
    case EVP   = 'EVP';
}
