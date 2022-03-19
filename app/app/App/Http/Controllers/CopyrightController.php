<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with http://www.network-science.de/ascii/
    const COPYRIGHT = "
   
    __________        
    \______   \___.__.
     |    |  _<   |  |
     |    |   \\___  |
     |______  // ____|
            \/ \/     
    ____   ____.__                            __        _________
    \   \ /   /|__| ____   ____  ____   _____/  |_     /   _____/
     \   Y   / |  |/    \_/ ___\/ __ \ /    \   __\    \_____  \ 
      \     /  |  |   |  \  \__\  ___/|   |  \  |      /        \
       \___/   |__|___|  /\___  >___  >___|  /__|   /\/_______  /
                       \/     \/    \/     \/       \/        \/ 
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
