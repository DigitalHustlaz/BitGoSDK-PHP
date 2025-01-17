<?php



namespace dhtech\BitGoSDK\Enum;

abstract class AddressType {
    
    const LEGACY_DEPOSIT    = 0;
    const LEGACY_CHANGE     = 1;
    
    const P2SH_DEPOSIT      = 10;
    const P2SH_CHANGE       = 11;
    
    const BECH32_DEPOSIT    = 20;
    const BECH32_CHANGE     = 21;

    // Taproot fork address format
    const BECH32M_DEPOSIT   = 30;
    const BECH32M_CHANGE    = 31;
}