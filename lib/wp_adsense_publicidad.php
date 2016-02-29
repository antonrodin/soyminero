<?php

/**
 * Mostrar publicidad y poco mas
 */
if (!function_exists('mostrar_adsense_responsivo')) {
    function mostrar_adsense_responsivo() {
        echo '<div class="publicidad-horizontal-adaptable">
                <div class="publicidad-horizontal-adaptable-centrar">
                    <p>Añade tu código de publicidad en la carpeta "lib/wp_adsense_publicidad"</p>
                </div>
            </div>';
    }
}